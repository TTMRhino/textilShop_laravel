<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Auth\AuthenticationException;
use App\Models\User;

class AuthenticateApi extends Middleware
{
   public function authenticate($request, array $guards)
   {
      $api_token = $request->query('api_token');

      if(empty($api_token)){
          $api_token = $request->input('api_token');
      }

      if(empty($api_token)){
          $api_token = $request->bearerToken();
      }


      $user = User::find($request->id);
      if($api_token === $user->api_token) return ;
     // return response()->json(['message' => 'Unauthenticated'], 500);
    
      $this->unauthenticated($request, $guards);
     
      
   }
}

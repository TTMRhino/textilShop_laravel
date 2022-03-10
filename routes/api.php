<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(['middleware' => 'auth:sanctum'], function(){
     Route::apiResources([
        'organizations' => OrganizationsController::class,
    ]);
  
    //Route::get('/organizations/{id}', [OrganizationsController::class,], 'show');
});

/*Route::middleware('auth_api')->match(['post','get'],'/user/{id}', function (Request $request, $id) {
    $user = App\Models\User::find($id);
   
    if(is_null($user)) return response('', 404);
    return $user;
});*/

Route::get('/items/{sort?}',[App\Http\Controllers\Api\V1\ItemsController::class, 'index']);
Route::get('/items/mgroup/{id}',[App\Http\Controllers\Api\V1\ItemsController::class, 'getItemByMGroup']);
Route::get('/items/sgroup/{id}',[App\Http\Controllers\Api\V1\ItemsController::class, 'getItemBySGroup']);


Route::apiResources([
    //'items' => ItemsController::class,
    'maingroup' => MainGroupController::class,
    'subgroup' => SubGroupController::class,
    'orders' => OrdersController::class,
    'customers' => CustomersController::class,
    
    
]);

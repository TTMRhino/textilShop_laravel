<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.user.index');
    }

    public function changePassword(Request $request)
    {
        if ($request->password === $request->repPassword){

            $user = Auth::user();
            $user->password = Hash::make($request->password);
            $user->save();

            return redirect()->back()->withSuccess('Password '. $user->name .' changed successfully!');
        }

        return redirect()->back()->withErrors('Password do not match!');
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect('/login');
      }
}

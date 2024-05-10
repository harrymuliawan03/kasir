<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function login(Request $request)
    {
            $data = $request->all();

            $user = User::where('email', $data['email'])->where('password', $data['password'])->first();
        
            if (!$user || $user == null) {
               return Redirect::back()->withErrors(['error' => 'Invalid email or password'])->withInput();
            }

            $token = Str::uuid()->toString();
            $user->remember_token = $token;
            $user->save();
            Cookie::queue(Cookie::make('token',$token,60));

            return redirect()->route('home');
    }
}
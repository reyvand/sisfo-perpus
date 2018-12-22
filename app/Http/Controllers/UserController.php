<?php

namespace App\Http\Controllers;

use Auth;
use Hash;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(Request $request) {
    	$db = new User;
    	$login = array('user_name' => $request->username, 'password' => $request->password);
    	if(Auth::attempt($login)) {
    		return redirect('/');
    	} else {
    		$error = 'Username atau password yang anda masukkan salah';
    		return redirect('/login')->with('error',$error);
    	}
    }

    public function logout() {
    	if(Auth::check()) {
    		Auth::logout();
    		return redirect('/');
    	} else {
    		return redirect('/');
    	}
    }
}

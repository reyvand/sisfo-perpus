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
    		return redirect('/login');
    	}
    }
}

<?php

namespace App\Http\Controllers;

use Auth;
use Hash;
use App\User;
use Validator;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function signIn(Request $request) {
    	$login = array('user_name' => $request->username, 'password' => $request->password);
    	if(Auth::attempt($login)) {
    		return redirect('/');
    	} else {
    		$error = 'Username atau password yang anda masukkan salah';
    		return redirect('/signin')->with('error',$error);
    	}
    }

    public function signOut() {
    	if(Auth::check()) {
    		Auth::logout();
    		return redirect('/');
    	} else {
    		return redirect('/');
    	}
    }

    public function signUp(Request $request) {
    	$db = new User;
    	$last_id = sprintf("%'03d", $db::select('id')->orderBy('id','desc')->first()->id);
    	
    	$message = array('required' => ':attribute tidak boleh kosong',
    									 'username.min' => 'Username minimal memiliki 6 karakter',
    									 'username.alpha_num' => 'Username hanya boleh mengandung huruf dan angka',
    									 'password.min' => 'Password minimal memiliki 8 karakter',
    									 'password.different' => 'Password tidak boleh sama dengan username');

    	$rules = array('fname' => 'required|max:20',
    								 'lname' => 'required|max:20',
    								 'username' => 'required|max:30|min:6|alpha_num',
    								 'password' => 'required|max:30|min:8|different:username');
    	
    	$validator = Validator::make($request->post(), $rules, $message);
    	if($validator->fails()) {
    		$find = array('/fname/','/lname/');
    		$replacement = array('Nama Depan','Nama Belakang');
    		$errormsg = ucfirst(preg_replace($find, $replacement, $validator->errors()->first()));
    		return redirect('/signup')->with('error',$errormsg);
    	} else {
    		$db->user_id = "USR".$last_id;
    		$db->user_name = $request->username;
    		$db->user_password = Hash::make($request->password);
    		$db->user_fname = $request->fname;
    		$db->user_lname = $request->lname;
    		$db->user_role = "user";
    		$db->save();
    		$success = "Pendaftaran berhasil. Silahkan login";
    		return redirect('/signup')->with('success',$success);
    	}
    }

    public function showProfile() {
    	$db = new User;
    	$profile = $db::find(Auth::user()->id);
    	return view('user.profile')->with('my', $profile);
    }

    public function updateProfile(Request $request) {
    	$db = new User;
    	$profile = $db::find(Auth::user()->id);
    	$profile->user_fname = $request->fname;
    	$profile->user_lname = $request->lname;
    	$profile->save();
    	$success = "Profil berhasil diperbaharui";
    	return redirect('/user/profile')->with('success',$success);
    }

    public function changePass(Request $request) {
    	$db = new User;
    	$profile = $db::find(Auth::user()->id);
    	if(Hash::check($request->oldpass, $profile->user_password)) {
    		$message = array('required' => ':attribute tidak boleh kosong',
    									 'newpass.min' => 'Password minimal memiliki 8 karakter',
    									 'newpass.different' => 'Password baru tidak boleh sama dengan password lama',
    									 'newpass_confirm.same' => 'Konfirmasi password baru tidak sesuai');

	    	$rules = array('newpass' => 'required|max:30|min:8|different:oldpass',
	    								 'newpass_confirm' => 'same:newpass');
	    	$validator = Validator::make($request->post(), $rules, $message);
	    	if($validator->fails()) {
	    		return redirect('/user/changepass')->with('error',$validator->errors()->first());
	    	} else {
	    		$profile->user_password = Hash::make($request->newpass);
	    		$profile->save();
	    		$message = "Password berhasil diperbaharui";
	    		return redirect('/user/changepass')->with('success',$message);
	    	}
    	} else {
    		$errormsg = "Terdapat kesalahan saat mengganti password. Hubungi admin";
    		return redirect('/user/changepass')->with('error',$errormsg);
    	}
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class usercontroller extends Controller
{
    public function index(){
    	return view('login');
    }

	public function postLogin(Request $request){
    	if (Auth::attempt($request->only('username','password'))) {
    		return redirect('Dashboard');
    	}

    	return redirect('login')->with('login_failed','Invalid username or password');
    }    

	public function register(){
		$user = User::all();
    	return view('register', compact('user'));
    }    

    public function store(Request $request){
    	$this->validate($request, [
			'nama' => 'required',
			'username' => 'required',
			'password' => 'required'
		]);

    	$user = new User;
    	$user->nama = $request->nama;
    	$user->username = $request->username;
    	$user->password = bcrypt($request->password);
    	$user->save();

    	return redirect('Product');
    }

    public function logout(){
        Auth::logout();
        return redirect('/') ;
    }
}

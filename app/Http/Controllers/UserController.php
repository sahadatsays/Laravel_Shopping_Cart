<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function getSignup(){

    	return view('users.signup');
    }
    public function postSignup(Request $request){
    	$this->validate($request,[
            'name'   => 'required',
    		'email'    => 'email|required|unique:users',
    		'password' => 'required|min:4'
    		]);
    	$user = new User([
            'name' =>$request->input('name'),
    		'email' => $request->input('email'),
    		'password' => bcrypt($request->input('password'))
    		]);
    	$user->save();

    	return redirect()->route('shop.index');
    }
}

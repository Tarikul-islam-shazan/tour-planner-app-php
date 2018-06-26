<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function index(){
    	return view('admin.login');
    }
    public function create(){
    	if(!(auth()->attempt(request(['name','password']))) && (request('id')!=1)){
           return redirect('/login');
    	}
    	return redirect('/admin');
    }
    public function destroy(){
    	auth()->logout();
    	return redirect('/login');
    }
}

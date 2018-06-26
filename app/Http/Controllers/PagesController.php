<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hotel;

class PagesController extends Controller
{
	public function __construct(){
		$this->middleware('auth')->except(['index']);
	}
    public function index(){
    	 $hotels = Hotel::all();
        return view ("layouts.index",compact('hotels'));
    }
    public function admin(){
    	 return view('admin.home');
    }
}

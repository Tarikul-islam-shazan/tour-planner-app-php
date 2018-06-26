<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hotel;

class HotelController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
       
    	return view('Hotels.create');
    }
    public function store(){

        $this->validate(request(),[
        	'hotel_name'=> 'required|unique:hotels',
			'total_seat'=> 'required',
			'vacancy'	=> 'required',
			'city'		=> 'required',
			'country'	=> 'required',
			'contact_no'=> 'required|size:11|unique:hotels',
			'address'	=> 'required',
			'email'		=> 'required|unique:hotels'
        ]);
    	Hotel::create(request()->all());
    	return redirect('/hotel/show');
    }
    public function show(){
    		$hotels = Hotel::all();
    		return view('Hotels.show',compact('hotels'));
    }
    public function edit($id){
        return view('Hotels.edit',compact('id'));
    }
    public function update(Request $request, $id){

  
    	 $hotel = Hotel::find($id);
    	  if(isset($request->hotel_name)){
    	 	$hotel->hotel_name = $request->hotel_name;
    	    $hotel->save();
    	}
    	 if(isset($request->address)){
    	 	$hotel->address = $request->address;
    	    $hotel->save();
    	}
        if(isset($request->cost)){
            $this->validate($request,[
                'cost' => 'numeric'
            ]);
            $hotel->cost = $request->cost;
            $hotel->save();
        }
        if(isset($request->email)){
            $hotel->email = $request->email;
            $hotel->save();
        }
         if(isset($request->total_seat)){
            $hotel->total_seat = $request->total_seat;
            $hotel->save();
        }
         if(isset($request->vacancy)){
            $hotel->vacancy = $request->vacancy;
            $hotel->save();
        }
        if(isset($request->city)){
            $hotel->city = $request->city;
            $hotel->save();
        }
        if(isset($request->country)){
            $hotel->country = $request->country;
            $hotel->save();
        }
        if(isset($request->contact_no)){
            $hotel->contact_no = $request->contact_no;
            $hotel->save();
        }

   

    	return redirect('/hotel/show');
    }
    public function delete($id){
       $hotel = Hotel::find($id);
       $hotel->delete();
       return redirect('/hotel/show');
    }
   
}

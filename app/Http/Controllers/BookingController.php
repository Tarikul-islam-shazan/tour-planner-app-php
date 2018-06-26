<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hotel;

class BookingController extends Controller
{
        public function index()
        {
    		$hotels = Hotel::all();
    		return view('bookings.create',compact('hotels'));
        }
        public function create(){
        	$name = request('hotel_name');
        	$booking =  request('booking_seat');
        	//find the user select hotel info
        	$hotel = Hotel::select()
        				->where('hotel_name','=',$name)
        				->get();
            //room left
        	$vacancy = $hotel[0]->vacancy - $booking;
        	//update room vacancy
        	$hotel[0]->vacancy = $vacancy;
        	$hotel[0]->save();

        	//redirect to the booking confirm page
        	return view('bookings.show',compact('name','booking'));
        	

        }
}

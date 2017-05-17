<?php

namespace App\Http\Controllers;

use Request;
use App\Partner;

class PartnershipController extends Controller
{
    public function display(){

    	return view('form.partnership');

    }
    
	public function store(){

		Partner::create(Request::all());

	}
}

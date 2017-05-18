<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\PartnershipRequest;
use App\Partner;

class PartnershipController extends Controller
{
	public function __construct(){

		$this->middleware('auth');

	}

    public function display(){

    	return view('form.partnership');

    }
    
	public function store(PartnershipRequest $request){
		Partner::create($request->all());
		return redirect('home');
	}
}

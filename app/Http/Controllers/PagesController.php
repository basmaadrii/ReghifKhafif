<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
	public function partnership(){
		
		return view('form.partnership');

	}
    public function feedback(){

    	return view('feedback');

    }

}

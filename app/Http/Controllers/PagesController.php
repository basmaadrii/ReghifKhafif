<?php

namespace App\Http\Controllers;

use Request;

class PagesController extends Controller
{
	public function partnership(){
		
		return view('form.partnership');

	}

	public function feedbackstore(){


	}





    public function feedback(){

    	return view('form.feedback');

    }

}

<?php

namespace App\Http\Controllers;


use Request;
use App\Feedback;
class FeedbackController extends Controller
{

	public function display(){

    	return view('form.feedback');

    }
    
	public function store(){

		Feedback::create( Request::all());



		


	}

}

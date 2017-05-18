<?php

namespace App\Http\Controllers;


use App\Http\Requests;
use App\Http\Requests\FeedbackRequest;
use App\Feedback;
class FeedbackController extends Controller
{

	public function display(){

    	return view('form.feedback');

    }
    
	public function store(FeedbackRequest $request){

		Feedback::create( $request->all());
		return redirect('Feedback');



		


	}

}

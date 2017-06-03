<?php

namespace App\Http\Controllers;


use App\Http\Requests;
use App\Http\Requests\FeedbackRequest;
use Illuminate\Support\Facades\Auth;

use App\Feedback;


class FeedbackController extends Controller
{
	public function __construct(){
		$this->middleware('admin', ['only' => 'showFeedbacks']);
	}	

	public function display(){

    	return view('form.feedback');

    }
    
	public function store(FeedbackRequest $request){
		$feedback = new Feedback($request->all());
		if(Auth::user()){
			$feedback->isUser = true;
			$feedback->user_id = Auth::user()->id;
		}
		else{
			$feedback->isUser = false;
		}

		$feedback->save();

		return redirect('feedback');
	}

	public function showFeedbacks(){
		$feedbacks = Feedback::latest('updated_at')->get();
    	return view('pages.feedbacks', compact('feedbacks'));
	}

}

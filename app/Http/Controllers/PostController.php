<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\PostRequest;

use App\post;
use Carbon\Carbon;

class PostController extends Controller
{
    public function display(){
    	return view('form.postform');
    }

     public function store(PostRequest $request){
	    $published_at = Carbon::now();
	    post::create($request->all(), $published_at);
	    return redirect('post');
     }
}

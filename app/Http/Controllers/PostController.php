<?php

namespace App\Http\Controllers;

use Request;
use App\post;
use Carbon\Carbon;

class PostController extends Controller
{
    public function display(){
    	return view('form.postform');
    }

     public function store(){
	    $published_at = Carbon::now();
	    post::create(Request::all(), $published_at);
     }
}

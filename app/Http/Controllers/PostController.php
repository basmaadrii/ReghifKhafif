<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Facades\Auth;

use App\post;
use Carbon\Carbon;


class PostController extends Controller
{
	public function __construct(){
		$this->middleware('auth');
	}
    public function display(){
    	return view('form.postform');
    }

     public function store(PostRequest $request){
     	$post = new Post($request->all());
     	Auth::user()->posts()->save($post);
	    return redirect('post');
     }
}

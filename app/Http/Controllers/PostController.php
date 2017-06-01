<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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

        if($request->hasFile('image')){
            $ext = $post->image->getClientOriginalExtension();
            $filename = 'posts/photo'.rand(11111,99999).'.'.$ext;
            Storage::disk('public')->put($filename, file($post->image));
            $post->image = $filename;
        }

     	Auth::user()->posts()->save($post);
	    return redirect('newsfeed');
     }
}

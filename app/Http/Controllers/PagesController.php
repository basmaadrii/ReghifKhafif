<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PagesController extends Controller
{
    public function displayMenu()
    {
    	return view('pages.menu');
    }

 	public function displayContact()
    {
    	return view('pages.contact');
    }


    public function newsfeed(){
    	$posts = Post::all();
    	return view('pages.newsfeed', compact('posts'));
    }
}

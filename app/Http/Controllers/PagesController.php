<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

}

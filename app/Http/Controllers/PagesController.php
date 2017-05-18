<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function displayMenue()
    {
    	return view('pages.menue');
    }

 	public function displayContact()
    {
    	return view('pages.contact');
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function feedback(){

    	return view('FeedBack');
    }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
	protected $table = 'feedback'; 
    protected $fillable = [
	    'Quality',
	    'ServiceEfficiency',
	    'cleanliness',
	    'speedofservice',
	    'valueformoney',
	    'staffattitude',
	    'additionalcomment'
    ];
}

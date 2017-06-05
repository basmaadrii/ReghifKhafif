<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    
    protected $table = 'partnership';

    protected $fillable = [
    	'name',
    	'email',
    	'address',
    	'phonenumber',
    	'offer',
    	'additionalInfo',
    	'documentation',
    ];

    public function user(){
    	return $this->belongsTo('App\User');
    }
}

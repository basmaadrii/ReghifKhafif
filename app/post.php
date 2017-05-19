<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
  protected $fillable=[
 	'text',
 	'image',
 	'published_at',
  ];

  public function user(){
  	return $this->belongsTo('App\User');
  }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    protected $fillable = ['name','slug'];

    public function posts(){
    	return $this->belongsToMany('App\Posts');
    }
}

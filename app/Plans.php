<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plans extends Model
{
    protected $table="plans";
    public function vote(){
    	return $this->belongsTo('App\Vote','vote_id','id');
    }
}

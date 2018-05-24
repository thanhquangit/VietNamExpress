<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    protected $table="vote";
    public function plans(){
    	return $this->hasMany('App\Plans','vote_id','id');
    }
}

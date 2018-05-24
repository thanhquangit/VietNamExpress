<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = "comment";
    public function news(){
    	return $this->belongsTo('App\News','news_id','id');
    }
}

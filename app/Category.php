<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  	protected $table = "category";
  	public function type(){
  		return $this->hasMany('App\Type','category_id','id');
  	}
}

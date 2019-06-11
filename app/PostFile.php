<?php

namespace App;

use Category;
use Illuminate\Database\Eloquent\Model;

class PostFile extends Model
{
	public function category($value=''){
		//return $this->belongsTo('App/Category')->withDefault();
		return $this->belongsTo(Category::class);
	}
}

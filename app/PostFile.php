<?php

namespace Dropbox;

use Dropbox\Category;
use Illuminate\Database\Eloquent\Model;

class PostFile extends Model
{
	public function getRouteKeyName(){
        return 'slug';
    }

	public function category($value=''){
		//return $this->belongsTo('App/Category')->withDefault();
		return $this->belongsTo(Category::class);
	}

	public function belongs(){
		 return $this->belongsTo(Category::class,'category_id');
	}

	public function belongsUser(){
		 return $this->belongsTo(User::class,'user_id');
	}
	
}

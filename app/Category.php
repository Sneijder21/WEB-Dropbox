<?php

namespace Dropbox;

use PostFile;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function postFiles(){
    	return $this->hasMany(PostFile::class,'category_id');
    }
}

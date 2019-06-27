<?php

namespace Dropbox\Http\Controllers;

use Illuminate\Http\Request;
use Dropbox\Category;
use Illuminate\Support\Facades\DB;
class CategoryController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request){
    	DB::beginTransaction();
    	try {
    		$categoria=new Category();
    		$categoria->name=$request->get('name_category');
    		$categoria->save();
    		DB::commit();
    	} catch (Exception $e) {
    		DB::rollBack();
    	}
    	
    }
}

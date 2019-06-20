<?php

namespace Dropbox\Http\Controllers;

use Dropbox\PostFile;
use Dropbox\Category;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class FilesController extends Controller
{
    public function index(){
        /*$PostFiles=\DB::table('post_files')->get();*/
        $PostFiles=PostFile::all();
        return view('Backend.Files.index',compact('PostFiles'));
    }

    public function create(){
        $categories= Category::all();
        return view('Backend.Files.create',compact('categories'));
    }

    public function store(Request $request){
        if ($request->hasFile('file')) {
            //$name=$request->file->getClientOriginalName();
            $category=$request->get('category');
            $name=$request->get('name');
            $request->file->storeAs('public',$name);

            $file=new PostFile;
            $file->name=$name;
            $file->category_id=$category;
            $file->save();
            return "el archivo se subio exitosamente";
            
            /*$request->file('file');
            return $request->file->storeAs('public', $request->file->getClientOriginalName());*/ 
        }else{
            return back()->withInput();
        }
    }

    public function show($name){
        /*esto retorna un arreglo de todas los archivos almacenados en la carpeta publica de storage*/
            //return Storage::files('public');

        /*Si queremos que nos retorne un archivo en especifico se hace de la sig. forma.*/
        return response()->download(storage_path('app/public/'.$name),null,[],null);
    }

    public function delete($name){
        /*First Option*/
        Storage::delete($name);
        /*Second Option*/
        unlink(storage_path('app/public/'.$name));
        return "El Archivo  fue exitosamente eliminado del sistema";
    }
    public function hidde($id){
        PostFile::where('id',$id)->delete();
        return "Archivo exitosamente ocultado";
    }
    public function validation_file($name){
        $archivo=Storage::exists('app/public/'.$name)?true:false;
       return $archivo;
    }
} 

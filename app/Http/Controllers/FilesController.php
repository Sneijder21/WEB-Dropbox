<?php

namespace App\Http\Controllers;

use App\File;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class FilesController extends Controller
{
    public function index()
    {
        return view('Backend.Files');
    }

    public function store(Request $request)
    {
        if ($request->hasFile('file')) {
            $nombre=$request->file->getClientOriginalName();
            $request->file->storeAs('public',$nombre);

            $file=new File;
            $file->name=$nombre;
            $file->save();
            return "el archivo se subio exitosamente";
            
            /*$request->file('file');
            return $request->file->storeAs('public', $request->file->getClientOriginalName());*/ 
        }else{
            return back()->withInput();
        }
        
    }

    public function show($name)
    {
        /*esto retorna un arreglo de todas los archivos almacenados en la carpeta publica de storage*/
            //return Storage::files('public');

        /*Si queremos que nos retorne un archivo en especifico se hace de la sig. forma.*/
        return response()->download(storage_path('app/public/'.$name),null,[],null);
    }

}

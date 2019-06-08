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
        //$request->file('file');
        // $nombre=$request->file->getClientOriginalName();
        // $request->file->storeAs('public',$nombre);

        // $file=new File;
        // $file->name=$nombre;
        // $file->save();
        // return "el archivo se subio exitosamente";

        $request->file('file');
        return $request->file->storeAs('public', $request->file->getClientOriginalName());
    }

    public function show()
    {
        return Storage::files('public');
    }

}

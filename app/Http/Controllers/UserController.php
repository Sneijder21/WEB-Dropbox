<?php

namespace Dropbox\Http\Controllers;

use Illuminate\Http\Request;
use Dropbox\User;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::all();
        return view('Backend.users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('name_profile')) {
            $image->$request->file('name_profile');
            $name_image=time().$image->getClientOriginalName();
            $image->move(public_path().'/profile/images',$name_image);
            // minute14:11 043
        }
            $user=new User;
            $user->name=$request->get('name');
            $user->email=$request->get('email');
            // $user->image_profile=$name_image->name;
            $user->password=bcrypt($request->get('password'));
            $user->save();
            // return redirect('panel.users')->with('info','El usuario se creó exitosamente');
            return "Archivo exitosamente guardado";
            
  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

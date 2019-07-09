<?php

namespace Dropbox\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Dropbox\User;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{

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
        if ($request->hasFile('image_profile')) {
            $image=$request->file('image_profile');
            $name_image=time().$image->getClientOriginalName();
            $image->move(public_path().'/profile/images',$name_image);
            // minute14:11 043
        }
            $user=new User;
            $user->name=$request->get('name');
            $user->email=$request->get('email');
            $user->image_profile=$name_image;
            $user->password=Hash::make($request->get('password'));
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
        $user=User::find($id);
        return view('Backend.users.details',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario=User::findOrFail($id);
        return view('Backend.users.edit_modal',compact('usuario'));
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
        DB::beginTransaction();
        try {
            if ($request->hasFile('image_profile')) {
                $image=$request->file('image_profile');
                $name_image=time().$image->getClientOriginalName();
                $image->move(public_path().'/profile/images',$name_image);
                // minute14:11 043
            }
            $user= User::findOrFail($id);
            $user->name=$request->get('name');
            $user->email=$request->get('email');
            $user->image_profile=$name_image;
            $user->password=Hash::make($request->get('password'));
            $user->save();

            DB::commit();

            return "Archivo exitosamente guardado";
        } catch (Exception $e) {
            DB::rollBack();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::beginTransaction();
        try {
            $user=User::findOrFail($id);
            if($user->image_profile=='profile.svg'){
                $user->delete();
            }else{
                $file_path=(public_path().'/profile/images/'.$user->image_profile);
                unlink($file_path);
                $user->delete();
            }
            DB::commit();
            return view('Backend.users.index');
        } catch (Exception $e) {
            DB::rollBack();
        }
    }
}

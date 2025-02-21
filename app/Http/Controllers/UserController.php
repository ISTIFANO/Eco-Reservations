<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function index(){

        echo "GJWN";
    }
public function show(){

    $utilisateur = User::get();
foreach($utilisateur as $users){

    Role::find($users->role_id);
}

    return view('content.users',compact('utilisateur'));
}
    public function profile(){
        $request=1;
        $userinfos = User::find($request);
        return view('client.profile',compact('userinfos'));
    }
    public function update(Request $request){
        $id=1;

        $salle = User::find($id);

        // dd($salle);
        $salle->update($request->all());
        
            return back();


    }
}

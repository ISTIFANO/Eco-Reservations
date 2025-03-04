<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller{
    public function login(){
    return view('pages.Login');
    }

    public function register(Request $request){

        // $data = $request->validate(['name'=>'required','email'=>'required','password'=>'required','role_id'=>'required','phone'=>'required','lastname'=>'required']);

       $register = new User;
        $register->name = $request->name;

        $register->email = $request->email;
         $register->password = Hash::make($request->password);

        $register->role_id = $request->role_id;
        $register->phone=$request->phone;

        $register->lastname = $request->lastname;
        $register->save(); 

        return redirect('/Login')->with('succ', 'Login succ');
    }

    public function AuthLogin(Request $request){

       

            // $user = $request->only('email','password');
// dd($user);
// Auth::attempt($user)

      if (User::find($request["email"]) && User::find($request["password"] )) {
                return redirect('/salle/show')->with('succ', 'Login succ');
               }
               dd(User::find($request["email"]));
                return back()->with('error', 'Email or Password not succ');
                }


                
                public function logout()
                {
                    Auth::logout();
                    return redirect('/Login');
                }
                
    }




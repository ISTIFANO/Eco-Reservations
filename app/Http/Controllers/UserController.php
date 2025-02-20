<?php

namespace App\Http\Controllers;

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

    return view('content.users',compact('utilisateur'));
}
    public function store(){

        return "user";
    }
}

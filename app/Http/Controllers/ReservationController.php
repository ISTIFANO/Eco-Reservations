<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function store(){
        echo 'ndsdk';

        return "salle";
    }
  
    public function update($id){

        return "reservation";
    }
    public function show(){
        echo 'ndsdk';

        return view('reservations.show');
    }}

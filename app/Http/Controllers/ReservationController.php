<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Reservation;
use App\Models\Salle;
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
$resevation = Reservation::get();
foreach($resevation as $resevations){
    User::find($resevations->user_id);
    Salle::find($resevations->salle_id);

}

        return view('content.validate',compact('resevation'));
    }}

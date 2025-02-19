<?php

namespace App\Http\Controllers;

use App\Models\Salle;
use Illuminate\Http\Request;

class SalleController extends Controller
{
   
    public function store(Request $request){

$data = $request->validate(['titre'=>'required','description'=>'required','location'=>'required','number'=>'required','start_date'=>'required','start_date'=>'required','status'=>'required']);

$createSalle = Salle::create($data);

redirect('/salle')->with('succ','creation succefuly');

    }
    public function destroy($id){

        return "salle";
    }
    public function edit($id){

        return "salle";
    }
    public function show(){

        return view('reservations.show');
    }
}

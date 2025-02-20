<?php

namespace App\Http\Controllers;

use App\Models\Salle;
use Illuminate\Http\Request;

class SalleController extends Controller
{
public function index(){


    return view('pages.Admin');

}
   
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
        $salle = Salle::get();

        return view('reservations.show', compact('salle'));
    }

    public function Tsalle(){
       
        $Tsalle = Salle::all();

        return view('content.Tsale', compact('Tsalle'));
    }
}

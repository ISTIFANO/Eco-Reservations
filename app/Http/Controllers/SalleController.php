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

// $data = $request->validate(['titre'=>'required','description'=>'required','location'=>'required','number'=>'required','status'=>'required','images'=>'required']);


Salle::create($request->all());

// $createSalle = Salle::create($request);

return redirect('/Tsalle')->with('succ','creation succefuly');

    }
    public function destroy(Request $request){
     
        if($request['id']){

          $salles = Salle::find($request['id']);
          $salles->delete();
        }
        return back()->with('succ', 'deleted  succ');
    }

    public function EditForm(Request $request){
        $salle = Salle::find($request['id']);

        return view('content.Salleform', compact('salle'));

        
    }
//     public function update(Request $request)
// {
//     $post = Salle::find($request->id);
//     if (!$post) {
//         return back()->with('error', 'Post not found');
//     }
//     $post->update($request->all());
//     return redirect('/Tsalle');
// }
public function update(Request $request)
    {
        // die($request['id']);
        
        $salle = Salle::find($request['id']);

        // dd($salle);
        $salle->update($request->all());
        
            return redirect('/Tsalle')->with('success', 'updated successfully');
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

<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Reservation;
use App\Models\Salle;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
  
    public function ApplayReservation(Request $request){
                Reservation::create($request->all());        
        return redirect('/Tsalle')->with('succ','creation succefuly');
        
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
    }

    public function Rvalidation(Request $request)
    {
        // $request->validate([
        //     'id' => 'required', 
        //     'status' => 'required',
        // ]);
        $id = (int) $request->id;
        $reservation = Reservation::find($id);
            if ($reservation) {
            $reservation->status = $request->status;


            $reservation->save(); 
    
            return back();
        }
    
    }
    

// public function Rvalidation(Request $request){
//     $request->validate([
//         'user_id' => 'required',
//         'salle_id' => 'required',
//         'status' => 'required|string|max:255',
//     ]);
//     $salle = Reservation::where('user_id', $request->user_id)
//                         ->where('salle_id', $request->salle_id)
//                         ->update(['status' => $request->status, 'updated_at' => now()]); 

//         return back()->with('success', 'Status updated successfully');
//     }

   
}










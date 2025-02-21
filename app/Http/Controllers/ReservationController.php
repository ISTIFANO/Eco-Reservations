<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Reservation;
use App\Models\Salle;
use Illuminate\Http\Request;

class ReservationController extends Controller
{

    public function ApplayReservation(Request $request)
    {
        if (count(Reservation::where('salle_id', $request['salle_id'])->get()) == 0) {
            Reservation::create($request->all());
            return redirect('/Tsalle')->with('succ', 'Creation successful');
        } else {
            $reservations = Reservation::where('salle_id', $request['salle_id'])->get();

            // dd("vghbhhbbh");
            foreach ($reservations as $reservation) {
                if ($request['date_start'] >= $reservation->date_start && $request['date_start'] <= $reservation->date_fin) {
                    return redirect()->back();
                }
                if ($request['date_fin'] >= $reservation->date_start && $request['date_fin'] <= $reservation->date_fin) {
                    return redirect()->back();  
                }
                if ($request['date_start'] <= $reservation->date_start && $request['date_fin'] >= $reservation->date_fin) {
                    return redirect()->back();
                }
            }
            Reservation::create($request->all());
            return redirect('/Tsalle');
        }
    }


    public function delete(Request $request)
    {


        $salles = Reservation::find($request['id']);
        $salles->delete();

        return back();
    }

    public function show()
    {
        $resevation = Reservation::get();
        foreach ($resevation as $resevations) {
            User::find($resevations->user_id);
            Salle::find($resevations->salle_id);
        }

        return view('content.validate', compact('resevation'));
    }


    public function mesreservation()
    {
        $id = 1;
        $ids = ['user_id' => $id];
        $mesreservation = Reservation::where('user_id', $ids)->get();


        foreach ($mesreservation as $resevations) {
            Salle::find($resevations->salle_id);
        }

        return view('client.mes_reservations', compact('mesreservation'));
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

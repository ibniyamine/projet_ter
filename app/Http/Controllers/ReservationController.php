<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\billet;

class ReservationController extends Controller
{
    public function index(){
        $billets = billet::all();
        return view('reservation.index', compact('billets'));
    }

    public function create(){
        return view('reservation.create');
    }

    public function store(Request $request){
        // $request->validate(
        //     [
        //         "depart" =>"required",
        //         "arrive" =>"required",
        //         "tarif" =>"required",
        //         "classe" =>"required",
        //         "heure_depart" =>"required",
                
        //     ]
        // );
        billet::create($request->all()); 
        return redirect()->route('reservation');
    }

    public function show(){
        return view('reservation.showQr');
    }
}

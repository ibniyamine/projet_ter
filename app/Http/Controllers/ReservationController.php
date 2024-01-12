<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\billet;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

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

    public function show($id){
        $billet = billet::findOrFail($id);
        $donneBillet = "Départ: {$billet->depart}\nArrivée: {$billet->arrive}\nClasse: {$billet->classe}\nTarif: {$billet->tarif}\nHeure de Départ: {$billet->heure_depart}";
        $qrCode = QrCode::size(250)->generate($donneBillet);
        return view('reservation.showQr', compact('billet', 'qrCode'));
    }

    public function delete($id){
        $billet = billet::findOrFail($id);
        $billet->delete();
        $billets = billet::all();
        return view('reservation.index', compact('billets'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HoraireController extends Controller
{
    public function index(){
        $horaires = [
            [
                'id' => 1,
                'gare_depart'=>'Dakar',
                'gare_arrivee'=>'Djamgnadjo',
                'date'=>'18/01/2024',
                'heure_depart'=>'08:00',
                'heure_arrivee'=>'09:00',
            ],
            [
                'id' => 2,
                'gare_depart'=>'Dakar',
                'gare_arrivee'=>'Djamgnadjo',
                'date'=>'18/01/2024',
                'heure_depart'=>'10:00',
                'heure_arrivee'=>'11:00',
            ],
            [
                'id' => 3,
                'gare_depart'=>'Dakar',
                'gare_arrivee'=>'Djamgnadjo',
                'date'=>'18/01/2024',
                'heure_depart'=>'12:00',
                'heure_arrivee'=>'13:00',
            ],
            [
                'id' => 4,
                'gare_depart'=>'Dakar',
                'gare_arrivee'=>'Djamgnadjo',
                'date'=>'18/01/2024',
                'heure_depart'=>'14:00',
                'heure_arrivee'=>'15:00',
            ],
            [
                'id' => 5,
                'gare_depart'=>'Dakar',
                'gare_arrivee'=>'Djamgnadjo',
                'date'=>'18/01/2024',
                'heure_depart'=>'16:00',
                'heure_arrivee'=>'17:00',
            ],
            [
                'id' => 6,
                'gare_depart'=>'Dakar',
                'gare_arrivee'=>'Djamgnadjo',
                'date'=>'18/01/2024',
                'heure_depart'=>'18:00',
                'heure_arrivee'=>'19:00',
            ],
            [
                'id' => 7,
                'gare_depart'=>'Dakar',
                'gare_arrivee'=>'Djamgnadjo',
                'date'=>'18/02/2024',
                'heure_depart'=>'08:00',
                'heure_arrivee'=>'09:00',
            ],
            [
                'id' => 8,
                'gare_depart'=>'Dakar',
                'gare_arrivee'=>'Djamgnadjo',
                'date'=>'18/02/2024',
                'heure_depart'=>'10:00',
                'heure_arrivee'=>'11:00',
            ],
            [
                'id' => 9,
                'gare_depart'=>'Dakar',
                'gare_arrivee'=>'Djamgnadjo',
                'date'=>'18/02/2024',
                'heure_depart'=>'12:00',
                'heure_arrivee'=>'13:00',
            ],
            [
                
                'id' => 10,
                'gare_depart'=>'Dakar',
                'gare_arrivee'=>'Djamgnadjo',
                'date'=>'18/02/2024',
                'heure_depart'=>'14:00',
                'heure_arrivee'=>'15:00',
            ],
            [
                'id' => 11,
                'gare_depart'=>'Dakar',
                'gare_arrivee'=>'Djamgnadjo',
                'date'=>'18/02/2024',
                'heure_depart'=>'16:00',
                'heure_arrivee'=>'17:00',
            ],
            ];
            return view('horaire.horaire', compact('horaires'));
    }
}

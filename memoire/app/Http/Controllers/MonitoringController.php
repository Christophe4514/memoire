<?php

namespace App\Http\Controllers;

use App\Models\Maison;
use App\Models\Monitoring;
use Illuminate\Http\Request;

class MonitoringController extends Controller
{
    public function index(){
        // $details = Monitoring::latest()->first();

        $details = Monitoring::all();

        return view('monitoring.index', compact('details'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request, $id){
        $maison = Maison::find($id);

        if(!$maison){
            return response([
                'message' => 'Maison introuvable.'
            ], 403);
        }

        $attrs = $request->validate([
            'luminosite' =>'required|string',
            'temperature' =>'required|string',
            'humidite' =>'required|string',
            'pir' =>'required|string',
            'fume' =>'required|string',
        ]);

        Monitoring::create([
            'luminosite' => $attrs['luminosite'],
            'temperature' => $attrs['temperature'],
            'humidite' => $attrs['humidite'],
            'pir' => $attrs['pir'],
            'fume' => $attrs['fume'],
            'maison_id' => $id,
        ]);

        return response([
            'message' => 'Détails de la maison crée avec succès'
        ], 200);
    }

}

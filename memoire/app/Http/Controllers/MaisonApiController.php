<?php

namespace App\Http\Controllers;

use App\Models\Maison;
use Illuminate\Http\Request;

class MaisonApiController extends Controller
{
    public function index(){
        $maison = Maison::all();

        // dd($maison);
        return response([
            'maison' => $maison[0]->maison,
            'ventillateur' => $maison[0]->ventillateur,
            'lampe' => $maison[0]->lampe
        ], 200);
        //  return response()->json($maison);
    }
}

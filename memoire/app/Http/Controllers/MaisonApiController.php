<?php

namespace App\Http\Controllers;

use App\Models\Maison;
use Illuminate\Http\Request;

class MaisonApiController extends Controller
{
    public function index(){
        $maison = Maison::all();

        return response()->json($maison);
    }
}

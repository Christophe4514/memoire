<?php

namespace App\Http\Controllers;

use App\Models\Maison;
use Illuminate\Http\Request;

class MaisonController extends Controller
{
    public function create(){
        return view('maison.create_maison');
    }

    public function store(Request $request){
        $maison = new Maison();
        $maison->maison = $request->input('maison');
        $maison->save();
        return redirect(url('/home'))->with('status', 'maison creer avec sucess');
    }

    public function allumer_lampe($id){
        $maisons = Maison::find($id);
        $maisons->lampe = 1;
        $maisons->save();
        return back();
    }
    public function allumer_ventillateur($id){
        $maisons = Maison::find($id);
        $maisons->ventillateur = 1;
        $maisons->save();
        return back();
    }
    public function eteindre_lampe($id){
        $maisons = Maison::find($id);
        $maisons->lampe = 0;
        $maisons->save();
        return back();
    }
    public function eteindre_ventillateur($id){
        $maisons = Maison::find($id);
        $maisons->ventillateur = 0;
        $maisons->save();
        return back();
    }

    public function supprimer($id){
        $maison = Maison::find($id);

        $maison->delete();

        return back();
    }

    public function edit($id){
        $maison = Maison::find($id);

        return view('maison.edit', compact('maison'));
    }

    public function update(Request $request, $id){
        $maison = Maison::find($id);

        $maison->maison = $request->input('maison');
        $maison->update();
        return redirect(url('/home'))->with('status', 'maison modifier avec sucess');
    }
}

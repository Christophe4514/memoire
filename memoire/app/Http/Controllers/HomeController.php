<?php

namespace App\Http\Controllers;

use App\Models\Lampe;
use App\Models\Maison;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $maisons = Maison::all();
        return view('home', compact('maisons'));
    }
}

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __("Projet de fin d'étude") }}
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="container ">
            <div class="container text-center">
                <!-- Bouton flottant à droite avec fond bleu -->
                <a href="{{ url('/formulaire') }}" class="btn btn-primary">Ajouter une maison</a>

            </div>
            <div>
                @if (Session::has('status'))
                    <div class="alert alert-success">
                        {{ Session::get('status') }}
                    </div>
                @endif
            </div>
            <br>
            <div class="row justify-content-center">
                @foreach ($maisons as $maison)
                    <div class="col-6">
                        <div class="card bg-success">
                            <div class="card-header">
                                <h2 class="text-center">{{ $maison->maison }}</h2>
                            </div>
                            <div class="card-body">
                                <h3 class="text-center">Actions :</h3>
                                <br>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-6">
                                            @if ($maison->lampe == 0)
                                            <!-- Bouton flottant à droite avec fond bleu -->
                                                <a href="{{ url('/allumer_lampe/' . $maison->id) }}" class="btn btn-primary">Allumer
                                                Lampe</a>
                                            @else
                                                <a href="{{ url('/eteindre_lampe/'. $maison->id) }}" class="btn btn-danger">Eteindre Lampe</a>
                                            @endif
                                        </div>
                                        <div class="col-6">
                                            @if ($maison->ventillateur == 0)
                                            <!-- Bouton flottant à droite avec fond bleu -->
                                                <a href="{{ url('/allumer_ventillateur/' . $maison->id) }}" class="btn btn-primary">Allumer
                                                    ventillateur</a>
                                            @else
                                                <a href="{{ url('/eteindre_ventillateur/'. $maison->id) }}" class="btn btn-danger">Eteindre ventillateur</a>
                                            @endif
                                        </div>
                                    </div>
                                    <br>
                                    <a href="{{ url('/detail/'. $maison->id) }}" class="btn btn-primary">Détails</a>
                                </div>
                            </div>
                            <div class="card-footer">

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

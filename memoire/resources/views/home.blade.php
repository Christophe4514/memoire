@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    {{-- <div class="card-header text-center">{{ __('Dashboard') }}</div> --}}

                    <div class="card-body display-6 text-center">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __("Maison SM") }}
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
                    <div class="col-10 my-2">
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
                                        <div class="clo-12">
                                            <P>
                                                <hr>
                                            </P>
                                        </div>
                                        <div class="col-4 my-2">
                                            <a href="{{ url('/detail/'. $maison->id) }}" class="btn btn-primary">Données </a>
                                        </div>
                                        <div class="col-4 my-2">
                                            <a href="{{ url('/supprimer/'. $maison->id) }}" class="btn btn-danger">Supprimer </a>
                                        </div>
                                        <div class="col-4 my-é">
                                            <a href="{{ url('/modifier/'. $maison->id) }}" class="btn btn-dark">Modifier </a>
                                        </div>
                                    </div>
                                    <br>
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

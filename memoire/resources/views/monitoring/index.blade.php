@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">{{ __('Monitoring') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __("Détails de la maison") }}
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="container">
            <div class="container text-center">
                <!-- Bouton flottant à droite avec fond bleu -->
                <a href="{{ url('/home') }}" class="btn btn-primary">Retour </a>

            </div>
            <br>
            <table class="table table-dark">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Luminosité</th>
                    <th scope="col">Temperature</th>
                    <th scope="col">Humidité</th>
                    <th scope="col">Pir</th>
                    <th scope="col">Fumée</th>
                    <th scope="col">Date</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($details as $key=> $detail)
                    <tr>
                        <th scope="row">{{$key + 1}}</th>
                        <td>{{$detail->luminosite}}</td>
                        <td>{{$detail->temperature}}</td>
                        <td>{{$detail->humidite}}</td>
                        <td>{{$detail->pir}}</td>
                        <td>{{$detail->fume}}</td>
                        <td>{{$detail->created_at}}</td>
                      </tr>
                    @endforeach
                </tbody>
              </table>  
        </div>
    </div>
@endsection
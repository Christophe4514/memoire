@extends('layouts.app')

@section('content')
    <div class="container">
        <div>
            <h2 class="text-center">
                Modification de la maison : {{$maison->maison}}
            </h2>
        </div>
        <form method="POST" action="{{url('/update/'. $maison->id )}}">
            @csrf
            <div class="mb-3">
                <label for="maison" class="form-label">Nom de la maison</label>
                <input type="text" name="maison" class="form-control" id="maison" value="{{$maison->maison}}">
                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
            </div>
            {{-- <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div> --}}
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection

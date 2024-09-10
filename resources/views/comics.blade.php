{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('hero')
    <!-- sezione del jumbutron -->
    <div class="jumbutron">
        <img src="{{Vite::asset('resources/img/jumbotron.jpg')}}" alt="">

        <div class="info container">
            <h3>CURRENT SERIES</h3>
        </div>

    </div>
@endsection

@section('content')

    <section class="contenuti">
        <!-- contenitore all'80% -->
        <div class="container">

            <!-- card con immagine fumetto e titolo -->
            @foreach ( $comics as $comic )
                <div class="card">
                    <!-- immagine che andrà gestita con props -->
                    <div>
                        <img src="{{$comic['thumb']}}" alt="{{$comic['series']}}">
                    </div>
                    <!-- titolo del fumetto gestito con props -->
                    <h5>{{$comic['series']}}</h5>
                </div>
            @endforeach

    </section>

    <div class="contenuti more">
        <button>LOAD MORE</button>
    </div>

@endsection


@section('titlePage')
    comics
@endsection

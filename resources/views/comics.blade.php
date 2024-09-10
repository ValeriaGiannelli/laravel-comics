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
            <div class="card">
                <!-- immagine che andrà gestita con props -->
                <div>
                    <img src="https://www.coverbrowser.com/image/action-comics/1-1.jpg" alt="singleComic.series">
                </div>
                <!-- titolo del fumetto gestito con props -->
                <h5>ACTION COMICS</h5>
            </div>
            <!-- card con immagine fumetto e titolo -->
            <div class="card">
                <!-- immagine che andrà gestita con props -->
                <div>
                    <img src="https://www.coverbrowser.com/image/action-comics/1-1.jpg" alt="singleComic.series">
                </div>
                <!-- titolo del fumetto gestito con props -->
                <h5>ACTION COMICS</h5>
            </div>
            <!-- card con immagine fumetto e titolo -->
            <div class="card">
                <!-- immagine che andrà gestita con props -->
                <div>
                    <img src="https://www.coverbrowser.com/image/action-comics/1-1.jpg" alt="singleComic.series">
                </div>
                <!-- titolo del fumetto gestito con props -->
                <h5>ACTION COMICS</h5>
            </div>
            <!-- card con immagine fumetto e titolo -->
            <div class="card">
                <!-- immagine che andrà gestita con props -->
                <div>
                    <img src="https://www.coverbrowser.com/image/action-comics/1-1.jpg" alt="singleComic.series">
                </div>
                <!-- titolo del fumetto gestito con props -->
                <h5>ACTION COMICS</h5>
            </div>
            <!-- card con immagine fumetto e titolo -->
            <div class="card">
                <!-- immagine che andrà gestita con props -->
                <div>
                    <img src="https://www.coverbrowser.com/image/action-comics/1-1.jpg" alt="singleComic.series">
                </div>
                <!-- titolo del fumetto gestito con props -->
                <h5>ACTION COMICS</h5>
            </div>
            <!-- card con immagine fumetto e titolo -->
            <div class="card">
                <!-- immagine che andrà gestita con props -->
                <div>
                    <img src="https://www.coverbrowser.com/image/action-comics/1-1.jpg" alt="singleComic.series">
                </div>
                <!-- titolo del fumetto gestito con props -->
                <h5>ACTION COMICS</h5>
            </div>
            <!-- card con immagine fumetto e titolo -->
            <div class="card">
                <!-- immagine che andrà gestita con props -->
                <div>
                    <img src="https://www.coverbrowser.com/image/action-comics/1-1.jpg" alt="singleComic.series">
                </div>
                <!-- titolo del fumetto gestito con props -->
                <h5>ACTION COMICS</h5>
            </div>
            <!-- card con immagine fumetto e titolo -->
            <div class="card">
                <!-- immagine che andrà gestita con props -->
                <div>
                    <img src="https://www.coverbrowser.com/image/action-comics/1-1.jpg" alt="singleComic.series">
                </div>
                <!-- titolo del fumetto gestito con props -->
                <h5>ACTION COMICS</h5>
            </div>
            <!-- card con immagine fumetto e titolo -->
            <div class="card">
                <!-- immagine che andrà gestita con props -->
                <div>
                    <img src="https://www.coverbrowser.com/image/action-comics/1-1.jpg" alt="singleComic.series">
                </div>
                <!-- titolo del fumetto gestito con props -->
                <h5>ACTION COMICS</h5>
            </div>
            <!-- card con immagine fumetto e titolo -->
            <div class="card">
                <!-- immagine che andrà gestita con props -->
                <div>
                    <img src="https://www.coverbrowser.com/image/action-comics/1-1.jpg" alt="singleComic.series">
                </div>
                <!-- titolo del fumetto gestito con props -->
                <h5>ACTION COMICS</h5>
            </div>
            <!-- card con immagine fumetto e titolo -->
            <div class="card">
                <!-- immagine che andrà gestita con props -->
                <div>
                    <img src="https://www.coverbrowser.com/image/action-comics/1-1.jpg" alt="singleComic.series">
                </div>
                <!-- titolo del fumetto gestito con props -->
                <h5>ACTION COMICS</h5>
            </div>
            <!-- card con immagine fumetto e titolo -->
            <div class="card">
                <!-- immagine che andrà gestita con props -->
                <div>
                    <img src="https://www.coverbrowser.com/image/action-comics/1-1.jpg" alt="singleComic.series">
                </div>
                <!-- titolo del fumetto gestito con props -->
                <h5>ACTION COMICS</h5>
            </div>
        </div>
    </section>

    <div class="contenuti more">
        <button>LOAD MORE</button>
    </div>

@endsection


@section('titlePage')
    comics
@endsection

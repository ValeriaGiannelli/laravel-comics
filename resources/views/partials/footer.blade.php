@php
    $menu_dc_comics=config('menu_list.dc_comics');
    $menu_shop=config('menu_list.shop');
    $menu_dc=config('menu_list.dc');
    $menu_sites=config('menu_list.sites');
@endphp


 <!-- parte alta del merchandise -->
 <div class="up">

    <div class="container">

        <div class="single-element" key="index">
            <!-- icona del link -->
            <div class="imgagine">
                <img src="{{Vite::asset('resources/img/buy-comics-digital-comics.png')}}" alt="page.title">
            </div>

            <!-- link -->
            <a href="#">Digital comics</a>
        </div>
        <div class="single-element" key="index">
            <!-- icona del link -->
            <div class="imgagine">
                <img src="{{Vite::asset('resources/img/buy-comics-digital-comics.png')}}" alt="page.title">
            </div>

            <!-- link -->
            <a href="#">Digital comics</a>
        </div>
        <div class="single-element" key="index">
            <!-- icona del link -->
            <div class="imgagine">
                <img src="{{Vite::asset('resources/img/buy-comics-digital-comics.png')}}" alt="page.title">
            </div>

            <!-- link -->
            <a href="#">Digital comics</a>
        </div>
        <div class="single-element" key="index">
            <!-- icona del link -->
            <div class="imgagine">
                <img src="{{Vite::asset('resources/img/buy-comics-digital-comics.png')}}" alt="page.title">
            </div>

            <!-- link -->
            <a href="#">Digital comics</a>
        </div>
        <div class="single-element" key="index">
            <!-- icona del link -->
            <div class="imgagine">
                <img src="{{Vite::asset('resources/img/buy-comics-digital-comics.png')}}" alt="page.title">
            </div>

            <!-- link -->
            <a href="#">Digital comics</a>
        </div>



    </div>

</div>

<!-- link utili -->
<div class="link-utili">

    <div class="container">

        <!-- parte dei link -->
        <div class="links">

            <!-- colonna -->
            <div class="col-link">
                <ul>
                    <!-- titolo -->
                    <li class="title">
                        DC COMICS
                    </li>

                    {{-- link --}}
                    @foreach ( $menu_dc_comics as $link )
                        <li >
                            <a href="#">{{$link['text']}}</a>
                        </li>
                    @endforeach

                    <!-- titolo -->
                    <li class="title">
                       SHOP
                    </li>

                    <!-- link -->
                    @foreach ($menu_shop as $link )
                        <li>
                            <a href="#">{{$link['text']}}</a>
                        </li>
                    @endforeach

                </ul>
            </div>

            <!-- colonna -->
            <div class="col-link">
                <ul>
                    <!-- titolo -->
                    <li class="title">
                        DC
                    </li>

                    <!-- link -->
                    @foreach ($menu_dc as $link )
                    <li>
                        <a href="#">{{$link['text']}}</a>
                    </li>
                    @endforeach

                </ul>
            </div>

            <!-- colonna -->
            <div class="col-link">
                <ul>
                    <!-- titolo -->
                    <li class="title">
                        SITES
                    </li>

                    <!-- link -->
                    @foreach ($menu_sites as $link )
                        <li>
                            <a href="#">{{$link['text']}}</a>
                        </li>
                    @endforeach

                </ul>
            </div>


        </div>

        <!-- parte del logo -->
         <div class="log-bg">
            <!-- <img src="../assets/img/dc-logo-bg.png" alt=""> -->
         </div>

    </div>

</div>


<!-- sing-up e follow us -->
<div class="down">

    <div class="container">

        <button><a href="">SING-UP NOW!</a></button>

        <div class="follow">
            <span>FOLLOW US</span>

            <a href="#">
                <img src="{{Vite::asset('resources/img/footer-facebook.png') }}" alt="icona facebook">
            </a>

            <a href="#">
                <img src="{{Vite::asset('resources/img/footer-twitter.png') }}" alt="icona facebook">

            </a>

            <a href="#">
                <img src="{{Vite::asset('resources/img/footer-youtube.png') }}" alt="icona facebook">
            </a>

            <a href="#">
                <img src="{{Vite::asset('resources/img/footer-pinterest.png') }}" alt="icona facebook">
            </a>

            <a href="#">

                <img src="{{Vite::asset('resources/img/footer-periscope.png') }}" alt="icona facebook">
            </a>
        </div>

    </div>

</div>

@extends('app')
@section('content')
<!-- home 
================================================== -->
<section id="home" class="s-home page-hero target-section" data-parallax="scroll"
    data-image-src="{{asset('stellar/images/services-bg.jpg')}}" data-natural-width=3000 data-natural-height=2000
    data-position-y=center>

    <div class="shadow-overlay"></div>

    <div class="home-content">

        <div class="row home-content__main">

            <h1>
                Koperasi Serba Usaha Amertha Dana <br>
                RAT 2020 <br>
            </h1>

            <div class="home-content__button">
                <a href="#about" class="smoothscroll btn btn-animatedbg">
                    More About Us
                </a>
            </div>



            {{-- <form id="mc-form" class="group mc-form" novalidate="true">
                        <input type="email" value="" name="EMAIL" class="email" id="mc-email" placeholder="Email Address"
                            required="">
                        <input type="submit" name="subscribe" value="Subscribe">
                        <label for="mc-email" class="subscribe-message"></label>
                    </form> --}}





        </div> <!-- end home-content__main -->

        <div class="home-content__scroll">
            <a href="#about" class="scroll-link smoothscroll">
                Scroll
            </a>
        </div>

    </div> <!-- end home-content -->

</section> <!-- end s-home -->
@endsection
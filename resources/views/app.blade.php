<!DOCTYPE html>
<html class="no-js" lang="en">

<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>{{$title}}</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{asset('stellar/css/base.css')}}">
    <link rel="stylesheet" href="{{asset('stellar/css/vendor.css')}}">
    <link rel="stylesheet" href="{{asset('stellar/css/main.css')}}">

    <link href="{{asset('assets/fontawesome-free/css/all.min.css')}}" rel="stylesheet">

    <!-- script
    ================================================== -->
    <script src="{{asset('stellar/js/modernizr.js')}}"></script>
    <script src="{{asset('stellar/js/pace.min.js')}}"></script>

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="{{asset('stellar/favicon.png')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('stellar/favicon.png')}}" type="image/x-icon">

</head>


<body id="top">

    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader" class="dots-jump">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>


    <!-- header
    ================================================== -->
    <header class="s-header">

        <div class="row">

            {{-- <div class="header-logo">
                <a class="site-logo" href="index.html"><img src="{{asset('stellar/images/logo.svg')}}"
            alt="Homepage"></a>
        </div> --}}

        <nav class="header-nav-wrap" style="left: 0;">
            <ul class="header-nav">
                <li class="current"><a class="" href="{{ route('index') }}" title="home">Home</a></li>
                <li class="current"><a class="" href="{{ route('unda') }}" title="unda">Tabungan Anggota</a></li>
                <li class="current"><a class="" href="{{ route('undn') }}" title="unda">Tabungan Non Anggota</a></li>
                <li><a class="" href="#undd" title="undd">Deposito</a></li>
            </ul>
        </nav> <!-- end header-nav-wrap -->



        <a class="header-menu-toggle" href="#0">
            <span class="header-menu-icon"></span>
        </a>

        </div> <!-- end row -->

    </header> <!-- end s-header -->


    @yield('content')





    <!-- footer
    ================================================== -->
    <footer>
        <div class="row">
            <div class="col-full cl-copyright">
                <span>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved
                </span>
            </div>
        </div>
    </footer>


    <!-- photoswipe background
    ================================================== -->
    <div aria-hidden="true" class="pswp" role="dialog" tabindex="-1">

        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">

            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>

            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div><button class="pswp__button pswp__button--close"
                        title="Close (Esc)"></button> <button class="pswp__button pswp__button--share"
                        title="Share"></button> <button class="pswp__button pswp__button--fs"
                        title="Toggle fullscreen"></button> <button class="pswp__button pswp__button--zoom"
                        title="Zoom in/out"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div><button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
                <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>

        </div>

    </div><!-- end photoSwipe background -->


    <!-- Java Script
    ================================================== -->
    <script src="{{asset('stellar/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('stellar/js/plugins.js')}}"></script>
    <script src="{{asset('stellar/js/main.js')}}"></script>

</body>
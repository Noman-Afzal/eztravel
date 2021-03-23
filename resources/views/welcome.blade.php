@extends('layouts.web')

@push('stylesheets')
@endpush

@section('navbar')
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
@endsection

@section('content')
    <section class="container-fluid bg-primary py-5">

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner text-white">
                <div class="carousel-item active" style="height: 450px">
                    <img
                        src="./assets/media/1-01.png"
                        alt=""
                        style="height: 400px; position: absolute; right: 100px;"
                    />
                    <div class="d-flex align-items-center h-100">
                        <div class="container">
                            <h1 class="display-4 font-weight-bold mb-5">
                                #1 Award-winning
                                <br/>
                                Digital Marketing<br/>Agency
                            </h1>
                            <button class="btn btn-dark mr-3">Get Free Quote</button>
                            <button class="btn btn-light">
                                <i class="far fa-play-circle"></i> Intro Video
                            </button>
                        </div>
                    </div>

                </div>
                <div class="carousel-item" style="height: 450px">
                    <img
                        src="./assets/media/1-01.png"
                        alt=""
                        style="height: 400px; position: absolute; right: 100px;"
                    />
                    <div class="d-flex align-items-center h-100">
                        <div class="container">
                            <h1 class="display-4 font-weight-bold mb-5">
                                #1 Award-winning
                                <br/>
                                Digital Marketing<br/>Agency
                            </h1>
                            <button class="btn btn-dark mr-3">Get Free Quote</button>
                            <button class="btn btn-light">
                                <i class="far fa-play-circle"></i> Intro Video
                            </button>
                        </div>
                    </div>

                </div>

                <div class="carousel-item" style="height: 450px">
                    <img
                        src="./assets/media/1-01.png"
                        alt=""
                        style="height: 400px; position: absolute; right: 100px;"
                    />
                    <div class="d-flex align-items-center h-100">
                        <div class="container">
                            <h1 class="display-4 font-weight-bold mb-5">
                                #1 Award-winning
                                <br/>
                                Digital Marketing<br/>Agency
                            </h1>
                            <button class="btn btn-dark mr-3">Get Free Quote</button>
                            <button class="btn btn-light">
                                <i class="far fa-play-circle"></i> Intro Video
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Trusted by our awesome partners -->
    <section id="trusted" class="container py-5">
        <h2 class="text-center font-weight-bold">Trusted by our awesome partners</h2>
        <div class="row py-5">
            <div class="col text-center">
                <img src="./assets/media/1-06.png" alt="" style="height: 80px" class="mx-auto">
            </div>
            <div class="col text-center">
                <img src="./assets/media/1-07.png" alt="" style="height: 80px" class="mx-auto">
            </div>
            <div class="col text-center">
                <img src="./assets/media/1-09.png" alt="" style="height: 80px" class="mx-auto">
            </div>
            <div class="col text-center">
                <img src="./assets/media/1-06.png" alt="" style="height: 80px" class="mx-auto">
            </div>
            <div class="col text-center">
                <img src="./assets/media/1-10.png" alt="" style="height: 80px" class="mx-auto">
            </div>

        </div>
    </section>

    <!-- How we can help your business? -->
    <section id="business" class="container">
        <h2 class="text-center font-weight-bold">How we can help your business?</h2>
        <div class="row py-5">
            <!-- col-start -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="business-card">
                    <img src="./assets/media/1-11.png" alt="" class="w-25">
                    <h3>Web Design & Development</h3>
                    <p>
                        Grow your business with custom developed web UI/UX,
                        development & QA
                    </p>

                    <a href="#">Read more</a>
                </div>
            </div>
            <!-- col-end -->

            <!-- col-start -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="business-card">
                    <img src="./assets/media/1-12.png" alt="" class="w-25">
                    <h3>Lead Generation</h3>
                    <p>
                        Generate quality leads, drive traffic, and build brand
                        awareness by L-G campaigns
                    </p>

                    <a href="#">Read more</a>
                </div>
            </div>
            <!-- col-end -->

            <!-- col-start -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="business-card">
                    <img src="./assets/media/1-13.png" alt="" class="w-25">
                    <h3>Shopify Expert</h3>
                    <p>
                        Adziv Digital - Proudly certified Shopify partner
                        agency in GCC/MENA
                    </p>
                    <a href="#">Read more</a>
                </div>
            </div>
            <!-- col-end -->

            <!-- col-start -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="business-card">
                    <img src="./assets/media/1-14.png" alt="" class="w-25">
                    <h3>SEO Services</h3>
                    <p>
                        Get Organic traffic through google SERP
                        by Absolute top 1st position rankings.
                    </p>

                    <a href="#">Read more</a>
                </div>
            </div>
            <!-- col-end -->

            <!-- col-start -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="business-card">
                    <img src="./assets/media/1-12.png" alt="" class="w-25">
                    <h3>E - Commerce</h3>
                    <p>
                        Start selling today! Turn your products
                        into cash through an eCommerce store
                    </p>
                    <a href="#">Read more</a>
                </div>
            </div>
            <!-- col-end -->

            <!-- col-start -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="business-card">
                    <img src="./assets/media/1-15.png" alt="" class="w-25">
                    <h3>Dropshipping</h3>
                    <p>
                        Start a dropshipping business with
                        successful 7Figure niche expert marketers
                    </p>

                    <a href="#">Read more</a>
                </div>
            </div>
            <!-- col-end -->


            <!-- col-start -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="business-card">
                    <img src="./assets/media/1-16.png" alt="" class="w-25">
                    <h3>PPC Management</h3>
                    <p>
                        Increase 10x ROI by google Search, Display,
                        YouTube & Retargeting Ads (PPC)
                    </p>

                    <a href="#">Read more</a>
                </div>
            </div>
            <!-- col-end -->

            <!-- col-start -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="business-card">
                    <img src="./assets/media/1-19.png" alt="" class="w-25">
                    <h3>Web Design & Development</h3>
                    <p>
                        Grow your business with custom developed web UI/UX,
                        development & QA
                    </p>

                    <a href="#">Read more</a>
                </div>
            </div>
            <!-- col-end -->

            <!-- col-start -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="business-card">
                    <img src="./assets/media/1-18.png" alt="" class="w-25">
                    <h3>Creative & Branding</h3>
                    <p>
                        We help businesses grow through strategic
                        branding, designing & print media.
                    </p>

                    <a href="#">Read more</a>
                </div>
            </div>
            <!-- col-end -->
        </div>
    </section>

@endsection

@push('scripts')
@endpush

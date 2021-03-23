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
                    <div class="carousel-item active"  style="height: 450px">
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
                    <div class="carousel-item"  style="height: 450px">
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

                    <div class="carousel-item"  style="height: 450px">
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
@endsection

@push('scripts')
@endpush

@extends('layouts.welcome')
@section('title', 'Bienvenidos')

@section('content')
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" >
        <a class="navbar-brand" href="/">
            <img src="{{asset('img/mascota.png') }}" width="80" height="50" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
            
        <div class="collapse navbar-collapse justify-content-between" id="navbarText">
            <h1></h1>
            <h1 class="text-black">INSTITUTO TECNOLÓGICO DE CANCÚN</h1>
            @if (Route::has('login'))
                <div class="top-right">
                    @auth
                        <a class="btn  btn-primary" href="{{ url('/home') }}">Home</a>
                    @else
                        <a class="btn  button-transparent" href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a class="btn border-dark bg-light  button-transparent" href="{{ route('register') }}">Registro</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </nav>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img class="d-block w-100" src="{{ asset('img/slider.png') }} " alt="First slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('img/slider.png') }}" alt="Second slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('img/slider.png') }}" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
@endsection
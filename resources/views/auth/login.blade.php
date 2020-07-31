@extends('layouts.form')

@section('content')
<!-- Outer Row -->
<div class="row justify-content-center">
    <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center pt-2">
                            <a href="/" class="big text-decoration-none">
                            <i class="fas fa-home"></i> Inicio
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">¡BIENVENIDO!</h1>
                            </div>
                            <form class="user" method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror" id="email" name="email" placeholder="Ingresa tu correo electronico..." value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user @error('password') is-invalid @enderror" id="password" name="password" placeholder="Ingresa tu password..." required autocomplete="current-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox small">
                                        <input type="checkbox" class="custom-control-input" id="customCheck" {{ old('remember') ? 'checked' : '' }}>
                                    
                                        <label class="custom-control-label" for="customCheck">Recuerdame</label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Iniciar Sesión
                                </button>{{-- 
                                <hr>
                                <a href="index.html" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Iniciar Sesión con Google
                                </a>
                                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Iniciar Sesión con Facebook
                                </a> --}}
                            </form>
                            <hr>
                            <div class="text-center">
                                @if (Route::has('password.request'))
                                    <a class="small" href="{{ route('password.request') }}">Olvidaste tu contraseña?</a>
                                @endif
                            </div>
                            <div class="text-center">
                                @if (Route::has('register'))
                                    <a class="small" href="{{ route('register') }}">Crear Cuenta</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
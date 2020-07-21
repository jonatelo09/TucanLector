@extends('layouts.app')
@section('title', 'Crear Categoria')

@section('content')
<!-- Outer Row -->
<div class="row justify-content-center">
    <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">CREAR NUEVA CATEGORIA</h1>
                            </div>
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                                </ul>
                            </div>
                            @endif
                            <form class="user" method="POST" action="{{ route('categories') }}">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <input value="{{old('name_cat')}}" type="text" class="form-control form-control-user @error('name_cat') is-invalid @enderror" id="name_cat" name="name_cat" placeholder="Ingresa el nombre de la Categoria..." required >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <textarea class="form-control form-control-user" placeholder="Ingresa la descripción de la categoria    ..." name="description_cat" id="description_cat" cols="30" rows="10">{{old('description_cat')}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group text-center">
                                    <a href=" {{route('home')}} "  class="btn btn-primary">Cancelar</a>
                                    <button type="submit" class="btn btn-success">Guardar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
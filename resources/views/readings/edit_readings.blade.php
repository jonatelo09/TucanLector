@extends('layouts.app')
@section('title', 'Editar Lectura')

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
                                <h1 class="h4 text-gray-900 mb-4">ACTUALIZAR LECTURA</h1>
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
                            <form class="user" method="POST" action="{{ url('/reading/'.$reading->id.'/update') }}">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input value="{{old('reading',$reading->name_lect)}}" type="text" class="form-control form-control-user @error('reading') is-invalid @enderror" id="reading" name="reading" placeholder="Ingresa el titulo de la Lectura..." required >
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input value="{{old('author',$reading->autor)}}" type="text" class="form-control form-control-user @error('author') is-invalid @enderror" id="author" name="author" placeholder="Ingresa el Autor de la Lectura..." required >
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input value="{{old('category',$reading->category)}}" type="text" class="form-control form-control-user @error('category') is-invalid @enderror" id="category" name="category" placeholder="Ingresa la categoria de la Lectura..." required >
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input value="{{old('points',$reading->points)}}" type="number" min="1" class="form-control form-control-user @error('points') is-invalid @enderror" id="points" name="points" placeholder="Ingresa los puntos de esta Lectura..." required >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control form-control-user" placeholder="Ingresa el contenido de esta Lectura..." name="content" id="content" cols="30" rows="10">{{old('content',$reading->content_lect)}}</textarea>
                                </div>
                                <div class="form-group text-center">
                                    <a href=" {{route('listsReadings')}} "  class="btn btn-primary">Cancelar</a>
                                    <button type="submit" class="btn btn-success">Actualizar</button>
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
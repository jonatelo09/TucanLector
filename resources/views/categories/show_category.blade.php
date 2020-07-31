@extends('layouts.app')
@section('title', 'Detalles de categoria')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="align-items-center text-center">
            <h1 class="m-0 font-weight-bold h1">"{{$categories->name_cat}}" </h1>
        </div>
        <div class="card-body">
            <div class="row">
                <p class="text-justify h5">{{$categories->description_cat}} </p>
            </div>
        </div>
        {{-- <div class="card-footer justify-content-between">
            <div class="row">
                <div class="col-md-4">
                    <label for="">Autor:</label>
                    <p class="text-primary">{{$reading->autor}} </p>
                </div>
                <div class="col-md-4">
                    <label for="">Status:</label>
                    <p class="text-primary">Activo</p>
                </div>
                <div class="col-md-4">
                    <label for="">Puntos:</label>
                    <p class="text-primary">{{$reading->points}} </p>
                </div>  
            </div>
           
        </div> --}}
        <div class="row justify-content-between m-4">
            <a href="" class="btn btn-primary">Regresar</a>
            <a href="{{ url('/categories/'.$categories->id.'/edit') }}" class="btn btn-success">Editar</a>
        </div>
    </div>
</div>
@endsection
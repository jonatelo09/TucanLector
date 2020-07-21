@extends('layouts.app')
@section('title', 'Lista de Categorias')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3 justify-content-between">
        <div class="d-sm-flex align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">@yield('title')</h6>
            <a href=" {{route('categoriesC') }}" class="btn btn-primary text-right"> Crear Nuevo</a>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                      <th>Nombre</th>
                      <th>Descripción</th>
                      <th>Acciones</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                      <th>Nombre</th>
                      <th>Descripción</th>
                      <th>Acciones</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($categories as $category)
                    <tr>
                        <td>{{$category->name_cat}}</td>
                        <td>{{$category->description_cat}} </td>
                        <td>
                            <a href="{{ url('/categories/'.$category->id.'/show') }}" rel="tooltip" title="ver detalles" class="btn btn-sm btn-success btn-block">Ver </a>
                            <a href="{{ url('/categories/'.$category->id.'/edit') }}" rel="tooltip" title="Editar" class="btn btn-sm btn-secondary btn-block">Editar</a>
                            <form action="{{ url('/categories/'.$category->id.'/delete') }}" method="POST" class="mt-2">
                                @csrf
                                <button type="submit" rel="tooltip" title="Eliminar" class="btn btn-sm btn-danger btn-block">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{$categories->links()}}
        </div>
    </div>
</div>
@endsection
@extends('layouts.app')
@section('title', 'Perfil de Usuario')

@section('content')
<div class="card shadow mb-4">
	<div class="card-body">
		<div class="row">
			<div class="col-md-3">
				<img class="img-profile rounded-circle img-fluid" src="https://source.unsplash.com/QAB-WJcbgJk/200x200">
			</div>
			<div class="col-md-4 justify-content-start">
				<p class="text-sm-center text-md-center text-lg-left"><label class="label font-weight-bold">Nombre:</label> {{ Auth::user()->name }}</p>
				<p class="text-sm-center text-md-center text-lg-left"><label class="label font-weight-bold">NoControl:</label> {{ Auth::user()->NoControl }}</p>
				<p class="text-sm-center text-md-center text-lg-left"><label class="label font-weight-bold">Correo:</label> {{ Auth::user()->email }} </p>
				<p class="text-sm-center text-md-center text-lg-left"><label class="label font-weight-bold">Carrera:</label> Ing. en Sistemas Computacionales</p>
			</div>
			<div class="col-md-4">
				<p class="text-sm-center text-md-center text-lg-left"><label class="label font-weight-bold">Apellidos:</label> {{ Auth::user()->lastname }}</p>
				<p class="text-sm-center text-md-center text-lg-left"><label class="label font-weight-bold">Role:</label> {{ Auth::user()->admin }}</p>
				<p class="text-sm-center text-md-center text-lg-left"><label class="label font-weight-bold">Fecha Nac.:</label> {{ Auth::user()->birthday }}</p>
				<p class="text-sm-center text-md-center text-lg-left"><label class="label font-weight-bold">Telefono:</label> {{ Auth::user()->phone }}</p>
			</div>
			<div class="col-md-1 justify-content-between">
				<a href="#" class="btn btn-sm btn-info btn-block">Editar</a>
			</div>
		</div>
        
    </div>
</div>

<div class="row">
	<!-- Earnings (Monthly) Card Example -->
	<div class="col-xl-3 col-md-6 mb-4">
	    <div class="card border-left-success shadow h-100 py-2">
	        <div class="card-body">
	            <div class="row no-gutters align-items-center">
	                <div class="col mr-2">
	                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Alumnos Registrados</div>
	                    <div class="h5 mb-0 font-weight-bold text-gray-800 text-center mt-2"></div>
	                </div>
	                <div class="col-auto">
	                    <i class="fa fa-user fa-2x text-gray-300"></i>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>

	<!-- Earnings (Monthly) Card Example -->
	<div class="col-xl-3 col-md-6 mb-4">
	    <div class="card border-left-success shadow h-100 py-2">
	        <div class="card-body">
	            <div class="row no-gutters align-items-center">
	                <div class="col mr-2">
	                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Alumnos Registrados</div>
	                    <div class="h5 mb-0 font-weight-bold text-gray-800 text-center mt-2"></div>
	                </div>
	                <div class="col-auto">
	                    <i class="fa fa-user fa-2x text-gray-300"></i>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
	<!-- Earnings (Monthly) Card Example -->
	<div class="col-xl-3 col-md-6 mb-4">
	    <div class="card border-left-success shadow h-100 py-2">
	        <div class="card-body">
	            <div class="row no-gutters align-items-center">
	                <div class="col mr-2">
	                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Alumnos Registrados</div>
	                    <div class="h5 mb-0 font-weight-bold text-gray-800 text-center mt-2"></div>
	                </div>
	                <div class="col-auto">
	                    <i class="fa fa-user fa-2x text-gray-300"></i>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
	<!-- Earnings (Monthly) Card Example -->
	<div class="col-xl-3 col-md-6 mb-4">
	    <div class="card border-left-success shadow h-100 py-2">
	        <div class="card-body">
	            <div class="row no-gutters align-items-center">
	                <div class="col mr-2">
	                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Alumnos Registrados</div>
	                    <div class="h5 mb-0 font-weight-bold text-gray-800 text-center mt-2"></div>
	                </div>
	                <div class="col-auto">
	                    <i class="fa fa-user fa-2x text-gray-300"></i>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
</div>


@endsection
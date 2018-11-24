@extends('layouts.app')


@section('title')

	Mi Perfil - Musical Store
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Información de {{ $user->name }}</div>

                <div class="card-body">
                    <div class="container">
					    <div class="row">
					        <div class="col-md-10 col-md-offset-1">
					            <img src="img/upload/avatars/{{ $user->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
					            <div class="col col-md-10">
					            	<a class="btn" style="background-color: #dadada" href="{{ route('user.edit' , $user->id) }}">Editar Información</a>
					            </div>
					        </div>
					    </div>
					</div>
					<br>
					<table class="table">
	                    <thead>
	                        <th>Nombre</th>
	                        
	                            <tr>
	                            	<td>{{ $user->name }}</td>
	                            </tr>
                            <th>Correo</th>
                        	
	                        	<tr>
	                        		<td>{{ $user->email }}</td>
	                        	</tr>
	                        
	                        <th>País</th>
	                        	
	                        	<tr>
	                        		<td>{{ $user->pais }}</td>
	                        	</tr>
	                        	
	                        
	                        	
	                        <th>Ciudad</th>
	                        	
	                        	<tr>
	                        		<td>{{ $user->ciudad }}</td>
	                        	</tr>
	                        	
	                        <th>Domicilio</th>
	                        	
	                        	<tr>
	                        		<td>{{ $user->domicilio }}</td>
	                        	</tr>
	                        	
	                        <th>Numero de teléfono</th>
	                        	
	                        	<tr>
	                        		<td>{{ $user->no_tel }}</td>
	                        	</tr>
	                        	

	                    </thead>
                	</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

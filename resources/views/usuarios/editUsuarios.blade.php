@extends('layouts.app')


@section('title')

	Editar Perfil - Musical Store

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
							            <img src="/img/upload/avatars/{{ $user->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
								            <form enctype="multipart/form-data" action="{{ route ('user.profile.update') }}" method="POST">
								                <label>Update Profile Image</label>
								                <input type="file" name="avatar">
								                <input type="hidden" name="_token" value="{{ csrf_token() }}">
								                <hr style="border: 0">
								                <input type="submit" class="pull-right btn btn-sm btn-primary">
								            </form>		
						            </div>
						            <div class="row">
									  <div class="col-md-12">
									    <div class="tile">
									      @if ($errors->any())
									          <div class="alert alert-danger">
									              <ul>
									                  @foreach ($errors->all() as $error)
									                      <li>{{ $error }}</li>
									                  @endforeach
									              </ul>
									          </div>
									      @endif

									      @if(isset($user))
									        {!! Form::model($user, ['route' => ['user.update', $user->id], 'method' => 'PATCH']) !!}
									        
									      @else
									        {!! Form::open(['route' => 'user.store']) !!}
									        
									      @endif

									        {{-- csrf_field() --}}
									        <div class="form-group">
									          <label for="name">Nombre</label>
									          {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Escriba su nombre']); !!}
									          
									        </div>
									        <div class="form-group">
									          <label for="last_name">Apellido</label>
									          {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
									          <!-- <input name="seccion" class="form-control" type="text"> -->
									        </div>
									        <div class="form-group">
									          <label for="email">Correo</label>
									          {!! Form::text('email', null, ['class' => 'form-control']) !!}
									          <!-- <input name="crn" class="form-control" type="text" placeholder="CRN/NRC"> -->
									          <div class="form-group">
									          <label for="no_tel">Número de teléfono</label>
									          {!! Form::text('no_tel', null, ['class' => 'form-control']) !!}
									          <!-- <input name="salon" class="form-control" type="text"> -->
									        </div>
									        <div class="form-group">
									          <label for="pais">País</label>
									          {!! Form::text('pais', null, ['class' => 'form-control']) !!}
									          <!-- <input name="salon" class="form-control" type="text"> -->
									        </div>
									        
									        <div class="form-group">
									          <label for="ciudad">Ciudad</label>
									          {!! Form::text('ciudad', null, ['class' => 'form-control']) !!}
									          <!-- <input name="salon" class="form-control" type="text"> -->
									        </div>
									        <div class="form-group">
									          <label for="domicilio">Domicilio</label>
									          {!! Form::text('domicilio', null, ['class' => 'form-control']) !!}
									          <!-- <input name="salon" class="form-control" type="text"> -->
									        </div>

									        
									        </div>
									        <div class="tile-footer">
									          <button class="btn btn-primary" type="submit">Aceptar</button>
									        </div>
									      {!! Form::close() !!}
									      <!-- </form> -->
									    </div>
									  </div>
									</div>
						        </div>
						    </div>
						</div>
						<br>
		           </div>
	            </div>
	        </div>
	    </div>
	</div>
@endsection
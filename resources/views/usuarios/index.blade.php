
@extends ('layouts.admin')

@section ('headprincipal','Formulario Kardex')
@section('headmenusidebar','Administradores')

@section ('linkmenu','administradores')
@section ('headmenu','Administradores')

@section ('contenido')




<div class="box box-success">
	<div class="box-body">
		<table id="example1" class="table table-bordered">
		<thead>
		<tr>
			 <th>Nombre</th>
             <th>Apellido</th>
             <th>Email</th>
             <th>Telefono</th>
			 <th>Acciones</th>
		</tr>
		</thead>
		<tbody>
        
			@foreach ($admins as $admin)
			<tr>
				<td>{{$admin->name}}</td>
				<td>{{$admin->lastname}}</td>
				<td>{{$admin->email}}</td>
				<td>{{$admin->telephone}}</td>	
				<td>
				
				@if(Auth::user()->tipo =="Admin")
					<a href="" data-target="#modal-edit-{{$admin->id}}" data-toggle="modal"><button class="btn btn-info">Editar</button></a>
					<a href="" data-target="#modal-delete-{{$admin->id}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
				@else
					-----
				@endif

				</td>
			</tr>
            @include('usuarios.edit')
            @include('usuarios.delete')
			@endforeach
        
		</tbody>
		</table>
	</div>
</div>
{{$admins->render()}}

<div class="modal fade" id="AddModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Agregar Administrador</h4>
			</div>

            {!! Form::open(['route' => 'administradores.store', 'method' => 'POST']) !!}
			<div class="modal-body">


				<div class="box-body">
					{!! Form::label('name','Nombre') !!}
					{!! Form::text('name', null,['class' =>'form-control'])!!}
				</div>

				<div class="box-body">
					{!! Form::label('lastname','Apellido') !!}
					{!! Form::text('lastname', null,['class' =>'form-control'])!!}
				</div>

				<div class="box-body">
					{!! Form::label('name','Email') !!}
					{!! Form::text('email', null,['class' =>'form-control'])!!}
				</div>

				<div class="box-body">
					{!! Form::label('password','Password') !!}
					{!! Form::password('password', null,['class' =>'form-control'])!!}
				</div>

				<div class="box-body">
                    {!! Form::label('type','Tipo') !!}
                    {!! Form::select('type', ['Admin' => 'Admin', 'Usuario' => 'Usuario'], null, ['class' => 'form-control']) !!}
                </div>

				<div class="box-body">
					{!! Form::label('name','Telefono') !!}
					{!! Form::text('telephone', null,['class' =>'form-control'])!!}
				</div>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				{!! Form::submit( 'Agregar', ['class'=>'btn btn-success']) !!}
			</div>
			{!! Form::close() !!}
		</div>
	</div>
</div>


@endsection
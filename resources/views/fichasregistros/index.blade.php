@extends ('layouts.admin')

@section ('headprincipal','Formulario Kardex')
@section('headmenusidebar','Listar Fichas (sucursales)')

@section ('linkmenu','admin')
@section ('headmenu','Ficha de registro')
@section ('headsubmenu','Lista')

@section ('contenido')




<div class="row">
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
	
		@include('fichasregistros.search')
	</div>
</div>

<div class="box box-success">
	<!--<div class="box-header"></div>-->
	<div class="box-body">
		<table id="example1" class="table table-bordered" id="myTable">
		<thead>
		<tr>
			 <th>Form. ID</th>
			 <th>Suc. Nombre</th>
			 <th>Suc. Rut</th>
			 <th>Suc. Razón Social</th>
			 <th>Suc. Comuna</th>
			 <th>Suc. Ciudad</th>
			 <th>Establ. Nombre</th>
			 <th>Establ. Codigo RBD </th>
			 <th>Acciones</th>
		</tr>
		</thead>
		<tbody>
            
			@foreach ($formularios as $formulario)
			<tr>

				<td>{{ $formulario->id }}</td>
				<td>{{ $formulario->nombre_rs }}</td>
				<td>{{ $formulario->rut_rs }}</td>
				<td>{{ $formulario->sucursal_rs }}</td>
				<td>{{ $formulario->comuna_rs }}</td>
				<td>{{ $formulario->ciudad_rs }}</td>
				<td>{{ $formulario->nombre_es }}</td>
				<td>{{ $formulario->codigo_rbd }}</td>
				<td>
				<a class="btn btn-warning" href="{{route('formulario.show', $formulario->id)}}"  role="button"><i class="fa fa-eye"></i></a>
				<a class="btn btn-success" href="{{route('formulario.edit', $formulario->id)}}"  role="button"><i class="fa fa-pencil-square-o"></i></a>
                <a href="" data-target="#modal-delete-{{$formulario->id}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
				</td>
			</tr>
                @include('fichasregistros.delete')
			@endforeach

		</tbody>
		</table>
	</div>
</div>

{{ $formularios->render() }}




@endsection
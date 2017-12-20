@extends ('layouts.admin')

@section ('headprincipal','Formulario Kardex')
@section('headmenusidebar','Reportes')

@section ('linkmenu','reportes_admin')
@section ('headmenu','Reportes Administradores')

@section ('contenido')

<div class="box box-success">
	<!--<div class="box-header"></div>-->
	<div class="box-body">
		<table id="example1" class="table table-bordered">
		<thead>
		<tr>
			 <th>Nombre</th>
             <th>Fecha</th>
		</tr>
		</thead>
		<tbody>
            
			@foreach ($reportes as $reporte)
			<tr>
				<td>{{$reporte->nombre_usuario}}</td>
				<td>{{$reporte->created_at}}</td>	
				<td>
				</td>
			</tr>
			@endforeach
		</tbody>
		</table>
	</div>
</div>

{!! $reportes->links() !!}

@endsection
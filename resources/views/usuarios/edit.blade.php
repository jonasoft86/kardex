
<div class="modal fade modal-slide-in-right" aria-hidden="true"
role="dialog" tabindex="-1" id="modal-edit-{{$admin->id}}">
	
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" 
				aria-label="Close">
                     <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title">Editar Administrador</h4>
			</div>
			<div class="modal-body">
			{!!Form::model($admin,['method'=>'PATCH','route'=>['administradores.update',$admin->id]])!!}

					<div class="box-body">
						{!! Form::label('name','Nombre') !!}
						{!! Form::text('name', $admin->name,['class' =>'form-control'])!!}
					</div>

                    <div class="box-body">
						{!! Form::label('name','Apellido') !!}
						{!! Form::text('lastname', $admin->lastname,['class' =>'form-control'])!!}
					</div>

                    <div class="box-body">
						{!! Form::label('name','Email') !!}
						{!! Form::text('email', $admin->email,['class' =>'form-control'])!!}
					</div>

					<div class="box-body">
						{!! Form::label('password','Password') !!}
						{!! Form::password('password', null,['class' =>'form-control'])!!}
					</div>

                    <div class="box-body">
						{!! Form::label('name','Telefono') !!}
						{!! Form::text('telephone', $admin->telephone,['class' =>'form-control'])!!}
					</div>
                

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				<button type="submit" class="btn btn-primary">Confirmar</button>
			</div>
		</div>
	</div>
	{{Form::Close()}}

</div>
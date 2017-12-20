@extends ('layouts.admin')

@section ('headprincipal','Formulario Kardex')
@section('headmenusidebar','Ficha de registro')

@section ('linkmenu','admin')
@section ('headmenu','Ficha de registro')
@section ('headsubmenu','Ficha Nueva')

@section ('contenido')

{!! Form::open(['route' => 'ficha_registro.store', 'method' => 'POST','files'=>true]) !!}

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
            <div class="panel-body">

            <div class="col-md-3">
                <div class="form-group">
                    {!! Form::label('nombre_rs','Razón Social') !!}
                    <input type="text" name="nombre_rs" class="form-control" placeholder="Nombre" size="70" maxlength="70" v-model="nombre_rs" required></input>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    {!! Form::label('fineslucro_rs','Rut') !!}
                    <input type="text" name="rut_rs" class="form-control" pattern="[0-9]{7,8}-[0-9Kk]{1}" placeholder="12345678-5" title="ej. 12345678-5" v-model="rut_rs" required></input>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-offset-5 col-sm-2 text-center">
                    <button class="btn btn-primary ">Crear Nuevo Registro</button>
                </div>
            </div>

        </div>
    </div>
</div>

{!! Form::close() !!}

@endsection
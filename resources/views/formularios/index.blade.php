@extends ('layouts.admin')

@section ('headprincipal','Formulario Kardex')
@section('headmenusidebar','Ficha N° #'.$registroFormulario->id)


@section ('headmenu','Ficha de registro')

@section ('contenido')

<script src="{{ asset('plugins/vue/vue.js') }}" type="text/javascript"></script>


            @if(Session::has('message'))
            <div class="alert alert-info" role="alert" id="passwordsNoMatchRegister">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            {{Session::get('message')}}
            </div>
            @endif

<div class="panel-group" id="accordion">
    @include('formularios.1establecimiento')
    @include('formularios.2razonsocial')
    @include('formularios.3financiamiento')
    @include('formularios.4sep')
    @include('formularios.5alumnado')
    @include('formularios.6personal')
    @include('formularios.7pruebanacional')
    @include('formularios.8psu')
    @include('formularios.9indicadorespeda')
    @include('formularios.10sitespecial')
    @include('formularios.11tecnicoprofesional')
    @include('formularios.12contingecia')
</div>



<script>
 $('#passwordsNoMatchRegister').show('slow').delay(1000).hide('slow');
</script>

@endsection
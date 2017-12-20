<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">6. Personal</a>
        </h4>
    </div>
    <div id="collapse6" class="panel-collapse collapse">
        <div class="panel-body" id="personal_vue">
          {!! Form::open(['route' => 'formulario.store', 'method' => 'POST','files'=>true]) !!}

          <fieldset id="personal">
            <div class="col-md-3">
                <div class="form-group">
                {!! Form::hidden('id_form', $registroFormulario->id) !!}
                 {!! Form::hidden('update', 'personal') !!}
                    {!! Form::label('','Total Docentes') !!}
                    <input type="text" name="total_docentes" class="form-control" placeholder="Total" v-model="total_docentes" disabled></input>
                </div>
            </div>
            

            <div class="col-md-3">
                <div class="form-group">
                    {!! Form::label('','Nº Laicos/Seglares') !!}
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    {!! Form::label('tdocentes_hombre_pe','Hombres') !!}
                    <input type="text" value="{{ ($personal->tdocentes_hombre_pe == NULL) ? 0:$personal->tdocentes_hombre_pe }}" name="tdocentes_hombre_pe" class="form-control" placeholder="Hombres" pattern="[0-9]+"
                        title="Solo se aceptan numeros" v-model="tdocentes_hombre_pe" >
                    </input>
                </div>
            </div>

              <div class="col-md-2">
                <div class="form-group">
                    {!! Form::label('tdocentes_mujer_pe','Mujeres') !!}
                    <input type="text" value="{{ ($personal->tdocentes_mujer_pe == NULL) ? 0:$personal->tdocentes_mujer_pe }}" name="tdocentes_mujer_pe" class="form-control" placeholder="Mujeres" pattern="[0-9]+"
                        title="Solo se aceptan numeros" v-model="tdocentes_mujer_pe" >
                    </input>
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    <label></label>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    {!! Form::label('','Asistentes Educacion') !!}
                    <input type="text" value="{{ ($personal->total_asistentes == NULL) ? 0:$personal->total_asistentes }}" name="total_asistentes" class="form-control" placeholder="Total" v-model="total_asistentes" disabled></input>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    {!! Form::label('','Nº Laicos/Seglares') !!}
                </div>
            </div>

              <div class="col-md-2">
                <div class="form-group">
                    {!! Form::label('asistentes_hombre_pe','Hombres') !!}
                    <input type="text" value="{{ ($personal->asistentes_hombre_pe == NULL) ? 0:$personal->asistentes_hombre_pe }}"  name="asistentes_hombre_pe" class="form-control" placeholder="Hombres" pattern="[0-9]+"
                        title="Solo se aceptan numeros" v-model="asistentes_hombre_pe" >
                    </input>
                </div>
            </div>

              <div class="col-md-2">
                <div class="form-group">
                    {!! Form::label('asistentes_mujer_pe','Mujeres') !!}
                    <input type="text" value="{{ ($personal->asistentes_mujer_pe == NULL) ? 0:$personal->asistentes_mujer_pe }}" name="asistentes_mujer_pe" class="form-control" placeholder="Mujeres" pattern="[0-9]+"
                        title="Solo se aceptan numeros" v-model="asistentes_mujer_pe" >
                    </input>
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    <label></label>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('','PROMEDIO DE EDAD APROX') !!}
                </div>
            </div>

            <div class="col-md-1">
                <div class="form-group">
                    {!! Form::label('prom1_pe','25-30') !!}
                    {!! Form::text('prom1_pe',($personal->prom1_pe == NULL) ? 0:$personal->prom1_pe,['class' =>'form-control', 'placeholder' =>'','pattern'=>'[0-9]+',
                    'title'=>'Solo se aceptan numeros'])!!}
                </div>
            </div>

            <div class="col-md-1">
                <div class="form-group">
                    {!! Form::label('prom2_pe','36-50') !!}
                    {!! Form::text('prom2_pe',($personal->prom2_pe == NULL) ? 0:$personal->prom2_pe,['class' =>'form-control', 'placeholder' =>'','pattern'=>'[0-9]+',
                    'title'=>'Solo se aceptan numeros'])!!}
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    {!! Form::label('prom3_pe','52 o mas') !!}
                    {!! Form::text('prom3_pe',($personal->prom3_pe == NULL) ? 0:$personal->prom3_pe,['class' =>'form-control', 'placeholder' =>'','pattern'=>'[0-9]+',
                    'title'=>'Solo se aceptan numeros'])!!}
                </div>
            </div>


            <div class="col-md-3">
                <div class="form-group">
                    {!! Form::label('','FORMACION') !!}
                </div>
            </div>

            <div class="col-md-1">
                <div class="form-group">
                    {!! Form::label('formDoctores_pe','Doctores') !!}
                    {!! Form::text('formDoctores_pe',($personal->formDoctores_pe == NULL) ? 0:$personal->formDoctores_pe,['class' =>'form-control', 'placeholder' =>'','pattern'=>'[0-9]+',
                    'title'=>'Solo se aceptan numeros'])!!}
                </div>
            </div>

            <div class="col-md-1">
                <div class="form-group">
                    {!! Form::label('formMagister_pe','Magister') !!}
                    {!! Form::text('formMagister_pe',($personal->formMagister_pe == NULL) ? 0:$personal->formMagister_pe,['class' =>'form-control', 'placeholder' =>'','pattern'=>'[0-9]+',
                    'title'=>'Solo se aceptan numeros'])!!}
                </div>
            </div>

            <div class="col-md-1">
                <div class="form-group">
                    {!! Form::label('formLicenciado_pe','Licenciados') !!}
                    {!! Form::text('formLicenciado_pe',($personal->formLicenciado_pe == NULL) ? 0:$personal->formLicenciado_pe,['class' =>'form-control', 'placeholder' =>'','pattern'=>'[0-9]+',
                    'title'=>'Solo se aceptan numeros'])!!}
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    {!! Form::label('formDtitulo_pe','Docentes c/Titulo') !!}
                    {!! Form::text('formDtitulo_pe',($personal->formDtitulo_pe == NULL) ? 0:$personal->formDtitulo_pe,['class' =>'form-control', 'placeholder' =>'','pattern'=>'[0-9]+',
                    'title'=>'Solo se aceptan numeros'])!!}
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    {!! Form::label('formDAuth_pe','Docentes Aut/Hab') !!}
                    {!! Form::text('formDAuth_pe',($personal->formDAuth_pe == NULL) ? 0:$personal->formDAuth_pe,['class' =>'form-control', 'placeholder' =>'','pattern'=>'[0-9]+',
                    'title'=>'Solo se aceptan numeros'])!!}
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    {!! Form::label('formOros_pe','Otros Profesionales') !!}
                    {!! Form::text('formOros_pe',($personal->formOros_pe == NULL) ? 0:$personal->formOros_pe,['class' =>'form-control', 'placeholder' =>'','pattern'=>'[0-9]+',
                    'title'=>'Solo se aceptan numeros'])!!}
                </div>
            </div>

        </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-toggle="collapse" href="#collapse6">Cerrar</button>
                {!! Form::submit( 'Guardar', ['class'=>'btn btn-success','data-toggle'=>'#collapse6','id'=>'submitButtonId6']) !!}
            </div>

            </fieldset>
          {!! Form::close() !!}
    </div>
</div>

<script>
var vm = new Vue({
    el: '#personal_vue',
    data: {
        resultado1 : 0,
       
    },
    computed: {
        total_docentes: function() {
            return parseInt(this.tdocentes_hombre_pe)+parseInt(this.tdocentes_mujer_pe);
        },
        total_asistentes: function() {
            return parseInt(this.asistentes_hombre_pe)+parseInt(this.asistentes_mujer_pe);
        }
    }
});
</script>

<script>

var readonly = "{{ $readonly }}";

if(readonly==1)
{
    var form = document.getElementById("personal");
    form.disabled = true;
    document.getElementById("submitButtonId6").disabled = true;
}

</script>


<div class="panel panel-default">

    <div class="panel-heading">

        <h4 class="panel-title">

        <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">4. Sep</a>

        </h4>

    </div>

    <div id="collapse4" class="panel-collapse collapse">

        <div class="panel-body">

          {!! Form::open(['route' => 'formulario.store', 'method' => 'POST','files'=>true]) !!}



          <fieldset id="sep">

            <div class="col-md-2">

                <div class="form-group">

                {!! Form::hidden('id_form', $registroFormulario->id) !!}

                {!! Form::hidden('update', 'sep') !!}

                    {!! Form::label('','Inscrito en SEP?') !!}

                    {!! Form::select('inscrito_sep', ['No' => 'No', 'Si' => 'Si'], $sep->inscrito_sep, ['class' => 'form-control']) !!}

                </div>

            </div>



            <div class="col-md-2">

                <div class="form-group">

                    {!! Form::label('','Clasificacion del colegio') !!}

                    {!! Form::select('clasificacion_sep', ['Autonomo' => 'Autonomo', 'Emergente' => 'Emergente', 'En_Recuperacion' => 'En_Recuperacion'],

                     ($sep->clasificacion_sep == NULL) ? NULL:$sep->clasificacion_sep, ['class' => 'form-control']) !!}

                </div>

            </div>



            <div class="col-md-2">

                <div class="form-group">

                    {!! Form::label('','Inscrito en convenio PIE?') !!}

                    {!! Form::select('convenio_pie_sep', ['No' => 'No', 'Si' => 'Si'],$sep->convenio_pie_sep, ['class' => 'form-control']) !!}

                </div>

            </div>



            <div class="col-md-3">

                <div class="form-group">

                    {!! Form::label('','Nº Alumnos Prioritarios') !!}

                    {!! Form::text('alumnos_prioritarios_sep',($sep->alumnos_prioritarios_sep == NULL) ? NULL:$sep->alumnos_prioritarios_sep,['class' =>'form-control', 'placeholder' =>'Nº Alumnos Prioritarios'])!!}

                </div>

            </div>



            <div class="col-md-3">

                <div class="form-group">

                    {!! Form::label('','Nº Alumnos Vulnerables') !!}

                    {!! Form::text('alumnos_vulnerables_sep',($sep->alumnos_vulnerables_sep == NULL) ? NULL:$sep->alumnos_vulnerables_sep,['class' =>'form-control', 'placeholder' =>'Nº Alumnos Vulnerables'])!!}

                </div>

            </div>



        </div>

            <div class="modal-footer">

                <button type="button" class="btn btn-default" data-toggle="collapse" href="#collapse4">Cerrar</button>

                {!! Form::submit( 'Guardar', ['class'=>'btn btn-success','data-toggle'=>'#collapse4','id'=>'submitButtonId4']) !!}

            </div>



          </fieldset>

          {!! Form::close() !!}

    </div>

</div>



<script>



var readonly = "{{ $readonly }}";



if(readonly==1)

{

    var form = document.getElementById("sep");

    form.disabled = true;

    document.getElementById("submitButtonId4").disabled = true;

}



</script>
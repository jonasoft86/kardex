

<div class="panel panel-default">

    <div class="panel-heading">

        <h4 class="panel-title">

        <a data-toggle="collapse" data-parent="#accordion" href="#collapse12">12. Contingencia</a>

        </h4>

    </div>

    <div id="collapse12" class="panel-collapse collapse">

        <div class="panel-body">

          {!! Form::open(['route' => 'formulario.store', 'method' => 'POST','files'=>true]) !!}



          <fieldset id="contingencia">

            <div class="col-md-2">

                <div class="form-group">

                {!! Form::hidden('id_form', $registroFormulario->id) !!}

                {!! Form::hidden('update', 'contingencia') !!}

                    {!! Form::label('','Mult. Inspec. Del Trabajo') !!}

                    {!! Form::select('inspeccion_trabajo_con', ['No' => 'No', 'Si' => 'Si'], $contingencia->inspeccion_trabajo_con, ['class' => 'form-control']) !!}

                </div>

            </div>



            <div class="col-md-2">

                <div class="form-group">

                    {!! Form::label('','Juicios Laborales') !!}

                    {!! Form::select('fineslucro_rs', ['No' => 'No', 'Si' => 'Si'], $contingencia->fineslucro_rs, ['class' => 'form-control']) !!}

                </div>

            </div>



            <div class="col-md-2">

                <div class="form-group">

                    {!! Form::label('','Denuncias SERNAC') !!}

                    {!! Form::select('denuncias_sernac_con', ['No' => 'No', 'Si' => 'Si'],  $contingencia->denuncias_sernac_con, ['class' => 'form-control']) !!}

                </div>

            </div>



            <div class="col-md-2">

                <div class="form-group">

                    {!! Form::label('','Observaciones MINEDUC') !!}

                    {!! Form::select('observaciones_con', ['No' => 'No', 'Si' => 'Si'], $contingencia->observaciones_con, ['class' => 'form-control']) !!}

                </div>

            </div>



            <div class="col-md-2">

                <div class="form-group">

                    {!! Form::label('','Denuncias ante la JUNJI') !!}

                    {!! Form::select('denuncias_junji_con', ['No' => 'No', 'Si' => 'Si'],  $contingencia->denuncias_junji_con, ['class' => 'form-control']) !!}



                </div>

            </div>

            

        </div>

            <div class="modal-footer">

                <button type="button" class="btn btn-default" data-toggle="collapse" href="#collapse12">Cerrar</button>

                {!! Form::submit( 'Guardar', ['class'=>'btn btn-success','data-toggle'=>'#collapse12','id'=>'submitButtonId']) !!}

            </div>



          </fieldset>

          {!! Form::close() !!}

    </div>

</div>



<script>



var readonly = "{{ $readonly }}";



if(readonly==1)

{

    var form = document.getElementById("contingencia");

    form.disabled = true;

    document.getElementById("submitButtonId12").disabled = true;

}



</script>
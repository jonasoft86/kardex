

<div class="panel panel-default">

    <div class="panel-heading">

        <h4 class="panel-title">

        <a data-toggle="collapse" data-parent="#accordion" href="#collapse9">9. Indicadores Pedagogicos</a>

        </h4>

    </div>

    <div id="collapse9" class="panel-collapse collapse">

        <div class="panel-body">

          {!! Form::open(['route' => 'formulario.store', 'method' => 'POST','files'=>true]) !!}





          <fieldset id="indicadores">

            <div class="col-md-3">

                <div class="form-group">

                {!! Form::hidden('id_form', $registroFormulario->id) !!}

                {!! Form::hidden('update', 'ind_pedagogico') !!}

                    {!! Form::label('','% PROMOCION ALUMNOS') !!}

                </div>

            </div>



            <div class="col-md-2">

                <div class="form-group">

              

                    {!! Form::number('promAlumnos_in',($indPedagogicos->promAlumnos_in == NULL) ? 0:$indPedagogicos->promAlumnos_in,['class' =>'form-control', 

                    'min'=>'0' , 'max'=>'100' ,'step'=>'0.01','maxlength' => 2 ])!!}

                </div>

            </div>



            <div class="col-md-3">

                <div class="form-group">

                    {!! Form::label('','% REPETICION ALUMNOS') !!}

                </div>

            </div>



            <div class="col-md-2">

                <div class="form-group">

                    {!! Form::number('repAlumnos_in',($indPedagogicos->repAlumnos_in == NULL) ? 0:$indPedagogicos->repAlumnos_in,['class' =>'form-control',

                    'min'=>'0' , 'max'=>'100' ,'step'=>'0.01','maxlength' => 2 ])!!}

                </div>

            </div>



            <div class="col-md-3">

                <div class="form-group">

                    {!! Form::label('','% DESERCION ALUMNOS') !!}

                </div>

            </div>



            <div class="col-md-2">

                <div class="form-group">

                    {!! Form::number('desercionAlumnos_in',($indPedagogicos->desercionAlumnos_in == NULL) ? 0:$indPedagogicos->desercionAlumnos_in,['class' =>'form-control',

                    'min'=>'0' , 'max'=>'100' ,'step'=>'0.01','maxlength' => 2 ])!!}

                </div>

            </div>



        </div>

        <div class="modal-footer">

                <button type="button" class="btn btn-default" data-toggle="collapse" href="#collapse9">Cerrar</button>

                {!! Form::submit( 'Guardar', ['class'=>'btn btn-success','data-toggle'=>'#collapse9','id'=>'submitButtonId9']) !!}

        </div>



        </fieldset>

        {!! Form::close() !!}

    </div>

</div>



<script>



var readonly = "{{ $readonly }}";



if(readonly==1)

{

    var form = document.getElementById("indicadores");

    form.disabled = true;

    document.getElementById("submitButtonId9").disabled = true;

}



</script>


<div class="panel panel-default">

    <div class="panel-heading">

        <h4 class="panel-title">

        <a data-toggle="collapse" data-parent="#accordion" href="#collapse10">10. Situaciones Especiales</a>

        </h4>

    </div>

    <div id="collapse10" class="panel-collapse collapse">

        <div class="panel-body">

          {!! Form::open(['route' => 'formulario.store', 'method' => 'POST','files'=>true]) !!}



        <fieldset id="si_especial">

            <div class="col-md-6">

                <div class="form-group">

                {!! Form::hidden('id_form', $registroFormulario->id) !!}

                 {!! Form::hidden('update', 'si_especial') !!}

                    {!! Form::label('proyectos_sitE','Proyectos de Integracion') !!}

                    {!! Form::select('proyectos_sitE', ['No' => 'No', 'Si' => 'Si'], $siEspecial->proyectos_sitE, ['class' => 'form-control']) !!}

                </div>

            </div>



            <div class="col-md-6">

                <div class="form-group">

                    {!! Form::label('alumnos_sitE','Alumnos Integrados') !!}

                    {!! Form::text('alumnos_sitE',($siEspecial->alumnos_sitE == NULL) ? NULL:$siEspecial->alumnos_sitE,['class' =>'form-control', 'placeholder' =>'Alumnos Integrados',

                    'title'=>'Solo se aceptan numeros'])!!}

                </div>

            </div>



            <div class="col-md-12">

                <div class="form-group">

                    {!! Form::label('caracteristica_sitE','Caracteristicas Alumnos Integrados') !!}

                    {!! Form::text('caracteristica_sitE',($siEspecial->caracteristica_sitE == NULL) ? NULL:$siEspecial->caracteristica_sitE,['class' =>'form-control', 'placeholder' =>'','size'=>'70','maxlength'=>'200'])!!}

                </div>

            </div>

            

        </div>

            <div class="modal-footer">

                <button type="button" class="btn btn-default" data-toggle="collapse" href="#collapse10">Cerrar</button>

                {!! Form::submit( 'Guardar', ['class'=>'btn btn-success','data-toggle'=>'#collapse10','id'=>'submitButtonId10']) !!}

            </div>

        

          </fieldset>

          {!! Form::close() !!}

    </div>

</div>



<script>



var readonly = "{{ $readonly }}";



if(readonly==1)

{

    var form = document.getElementById("si_especial");

    form.disabled = true;

    document.getElementById("submitButtonId10").disabled = true;

}



</script>
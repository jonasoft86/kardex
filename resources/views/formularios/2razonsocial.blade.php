


<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">2. Razon Social</a>
        </h4>
    </div>
    <div id="collapse2" class="panel-collapse collapse in">
        <div class="panel-body">
          {!! Form::open(['route' => 'formulario.store', 'method' => 'POST','files'=>true]) !!}

          <fieldset id="razonsocial">

            <div class="col-md-3">
                <div class="form-group">
                {!! Form::label('nombre_rs','Razón Social') !!}
                {!! Form::hidden('id_form', $registroFormulario->id) !!}
                {!! Form::hidden('update', 'razon') !!}

                <input value="{{ $razon->nombre_rs }}" type="text" name="nombre_rs" class="form-control" placeholder="Nombre" size="70" maxlength="70" v-model="nombre_rs"></input>

                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    {!! Form::label('tipo_rs','Tipo Razón Social') !!}

                     @if($razon->tipo_rs == NULL)
                        {!! Form::select('tipo_rs', ['dato1' => 'No Definido', 'dato2' => 'Sociedad','dato3' => 'Fundacion','dato4' => 'Corporacion', 'dato5' => 'Congregacion'], Null, ['class' => 'form-control']) !!}
                     @else
                          {!! Form::select('tipo_rs', ['dato1' => 'No Definido', 'dato2' => 'Sociedad','dato3' => 'Fundacion','dato4' => 'Corporacion', 'dato5' => 'Congregacion'], $razon->tipo_rs, ['class' => 'form-control']) !!}
                     @endif

                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    {!! Form::label('fineslucro_rs','Fines de Lucro') !!}

                    @if($razon->fineslucro_rs == NULL)
                        {!! Form::select('fineslucro_rs', ['si' => 'Si', 'no' => 'No'], null, ['class' => 'form-control']) !!}
                    @else
                        {!! Form::select('fineslucro_rs', ['si' => 'Si', 'no' => 'No'], $razon->fineslucro_rs, ['class' => 'form-control']) !!}
                    @endif

                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    {!! Form::label('fineslucro_rs','Rut') !!}

                    <input value="{{ $razon->rut_rs }}" type="text" name="rut_rs" class="form-control"  v-model="rut_rs" readonly></input>

                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    {!! Form::label('sucursal_rs','Sucursal') !!}

                    @if($razon->sucursal_rs == NULL)
                        <input type="text" name="sucursal_rs" class="form-control" placeholder="Sucursal" size="70" maxlength="70" v-model="sucursal_rs"></input>
                    @else
                        <input type="text" value="{{ $razon->sucursal_rs }}"  name="sucursal_rs" class="form-control"  size="70" maxlength="70" v-model="sucursal_rs"></input>
                    @endif

                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    {!! Form::label('direccion_rs','Direccion') !!}

                    @if($razon->direccion_rs == NULL)
                        {!! Form::text('direccion_rs',null,['class' =>'form-control', 'placeholder' =>'Direccion','size'=>'70','maxlength'=>'70'])!!}
                    @else
                         {!! Form::text('direccion_rs',$razon->direccion_rs,['class' =>'form-control', 'placeholder' =>'Direccion','size'=>'70','maxlength'=>'70'])!!}
                    @endif
                    
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    {!! Form::label('comuna_rs','Comuna') !!}

                    @if($razon->comuna_rs == NULL)
                        {!! Form::text('comuna_rs',null,['class' =>'form-control', 'placeholder' =>'Comuna','size'=>'70','maxlength'=>'70'])!!}
                    @else
                        {!! Form::text('comuna_rs',$razon->comuna_rs,['class' =>'form-control', 'placeholder' =>'Comuna','size'=>'70','maxlength'=>'70'])!!}
                    @endif

                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    {!! Form::label('ciudad_rs','Ciudad') !!}

                    @if($razon->ciudad_rs == NULL)
                        {!! Form::text('ciudad_rs',null,['class' =>'form-control', 'placeholder' =>'Ciudad','size'=>'70','maxlength'=>'70'])!!}
                    @else
                        {!! Form::text('ciudad_rs',$razon->ciudad_rs,['class' =>'form-control', 'placeholder' =>'Ciudad','size'=>'70','maxlength'=>'70'])!!}
                    @endif

                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    {!! Form::label('region_rs','Region') !!}

                    @if($razon->region_rs == NULL)
                        {!! Form::text('region_rs',null,['class' =>'form-control', 'placeholder' =>'Region','size'=>'70','maxlength'=>'70'])!!}
                    @else
                        {!! Form::text('region_rs',$razon->region_rs,['class' =>'form-control', 'placeholder' =>'Region','size'=>'70','maxlength'=>'70'])!!}
                    @endif

                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    {!! Form::label('fono_rs','Fono') !!}

                    @if($razon->fono_rs == NULL)
                        {!! Form::text('fono_rs',null,['class' =>'form-control', 'placeholder' =>'Fono'])!!}
                    @else
                         {!! Form::text('fono_rs',$razon->fono_rs ,['class' =>'form-control', 'placeholder' =>'Fono'])!!}
                    @endif

                </div>
            </div>

            <div class="col-md-11">
                <div class="form-group">
                    {!! Form::label('otic_rs','Otic') !!}
                    
                    @if($razon->otic_rs == NULL)
                        {!! Form::text('otic_rs',null,['class' =>'form-control', 'placeholder' =>'Otic','size'=>'70','maxlength'=>'70'])!!}
                    @else
                        {!! Form::text('otic_rs',$razon->otic_rs,['class' =>'form-control', 'placeholder' =>'Otic','size'=>'70','maxlength'=>'70'])!!}
                    @endif

                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    {!! Form::label('otro1_rs','Otro1') !!}

                    @if($razon->otro1_rs == NULL)
                        {!! Form::text('otro1_rs',null,['class' =>'form-control', 'placeholder' =>'Otro1','size'=>'70','maxlength'=>'70'])!!}
                    @else
                        {!! Form::text('otro1_rs',$razon->otro1_rs,['class' =>'form-control', 'placeholder' =>'Otro1','size'=>'70','maxlength'=>'70'])!!}
                    @endif

                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    {!! Form::label('otro2_rs','Otro2') !!}

                    @if($razon->otro2_rs == NULL)
                        {!! Form::text('otro2_rs',null,['class' =>'form-control', 'placeholder' =>'Otro2','size'=>'70','maxlength'=>'70'])!!}
                    @else
                        {!! Form::text('otro2_rs',$razon->otro2_rs,['class' =>'form-control', 'placeholder' =>'Otro2','size'=>'70','maxlength'=>'70'])!!}
                    @endif

                </div>
            </div>       
    

        </div>
            <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-toggle="collapse" href="#collapse2">Cerrar</button>
                        {!! Form::submit( 'Guardar', ['class'=>'btn btn-success','data-toggle'=>'#collapse2','id'=>'submitButtonId2']) !!}
            </div>
        </fieldset>
          {!! Form::close() !!}
    </div>
</div>

<script>

var readonly = "{{ $readonly }}";

if(readonly==1)
{
    var form = document.getElementById("razonsocial");
    form.disabled = true;
    document.getElementById("submitButtonId2").disabled = true;
}

</script>


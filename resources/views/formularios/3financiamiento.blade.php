

<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">3. Financiamiento</a>
        </h4>
    </div>
    <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body">
          {!! Form::open(['route' => 'formulario.store', 'method' => 'POST','files'=>true]) !!}

            <fieldset id="financiamiento">

            <div class="col-md-3">
                <div class="form-group">
                    <label class="checkbox-inline" for="checkboxes-0">
                    {!! Form::hidden('id_form', $registroFormulario->id) !!}
                    {!! Form::hidden('update', 'financiamiento') !!}

                     @if($financiamiento->subvencionado_fin == NULL || $financiamiento->subvencionado_fin == false)
                        {!! Form::checkbox('subvencionado_fin', '1', false) !!}SUBVENCIONADO
                    @else
                        {!! Form::checkbox('subvencionado_fin', '1', true) !!}SUBVENCIONADO
                    @endif

                    </label>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    {!! Form::label('montoanual_fin','Monto Anual Recibido') !!}

                    @if($financiamiento->montoanual_fin == NULL)
                        {!! Form::number('montoanual_fin',0,['class' =>'form-control', 'placeholder' =>'Monto Anual Recibido','pattern'=>'[0-9]+',
                        'title'=>'Solo se aceptan numeros'])!!}
                    @else
                        {!! Form::number('montoanual_fin',$financiamiento->montoanual_fin,['class' =>'form-control', 'placeholder' =>'Monto Anual Recibido','pattern'=>'[0-9]+',
                        'title'=>'Solo se aceptan numeros'])!!}
                    @endif

                </div>
            </div>


            <div class="col-md-6">
                <div class="form-group">
                    <label class="checkbox-inline" for="checkboxes-0">

                     @if($financiamiento->gratuidad_fin == NULL || $financiamiento->gratuidad_fin == false)
                        {!! Form::checkbox('gratuidad_fin', '1', false) !!}100% Gratuito
                     @else
                        {!! Form::checkbox('gratuidad_fin', '1', true) !!}100% Gratuito
                     @endif

                    </label>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label class="checkbox-inline" for="checkboxes-0">

                    @if($financiamiento->gratuidadEscolar_fin == NULL || $financiamiento->gratuidadEscolar_fin == false)
                        {!! Form::checkbox('gratuidadEscolar_fin', '1', false) !!}Gratuito + Escolaridad Voluntaria
                    @else
                        {!! Form::checkbox('gratuidadEscolar_fin', '1', true) !!}Gratuito + Escolaridad Voluntarias
                    @endif

                    </label>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label class="checkbox-inline" for="checkboxes-0">

                     @if($financiamiento->fincompartido_fin == NULL || $financiamiento->fincompartido_fin == false)
                        {!! Form::checkbox('fincompartido_fin', '1', false) !!}FiNANCIAMIENTO COMPARTIDO
                     @else
                        {!! Form::checkbox('fincompartido_fin', '1', true) !!}FiNANCIAMIENTO COMPARTIDO
                     @endif

                    </label>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    {!! Form::label('ing_anual_fin','Ingreso Anual Proyectado') !!}

                    @if($financiamiento->ing_anual_fin == NULL)
                        {!! Form::text('ing_anual_fin',0,['class' =>'form-control', 'placeholder' =>'Ingreso Anual Proyectado','pattern'=>'[0-9]+',
                        'title'=>'Solo se aceptan numeros'])!!}
                    @else
                        {!! Form::text('ing_anual_fin',$financiamiento->ing_anual_fin,['class' =>'form-control', 'placeholder' =>'Ingreso Anual Proyectado','pattern'=>'[0-9]+',
                        'title'=>'Solo se aceptan numeros'])!!}
                    @endif

                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    {!! Form::label('nbecas_fin','Nº Becas/Ing Proyec') !!}

                    @if($financiamiento->nbecas_fin == NULL)
                        {!! Form::text('nbecas_fin',0,['class' =>'form-control', 'placeholder' =>'Nº Becas/Ing Proyec','pattern'=>'[0-9]+',
                        'title'=>'Solo se aceptan numeros'])!!}
                    @else
                        {!! Form::text('nbecas_fin',$financiamiento->nbecas_fin,['class' =>'form-control', 'placeholder' =>'Nº Becas/Ing Proyec','pattern'=>'[0-9]+',
                        'title'=>'Solo se aceptan numeros'])!!}
                    @endif

                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    {!! Form::label('escolaridadm_fin','Escolaridad Mensual') !!}

                    @if($financiamiento->escolaridadm_fin == NULL)
                        {!! Form::text('escolaridadm_fin',0,['class' =>'form-control', 'placeholder' =>'Escolaridad Mensual','pattern'=>'[0-9]+',
                        'title'=>'Solo se aceptan numeros'])!!}
                    @else
                        {!! Form::text('escolaridadm_fin',$financiamiento->escolaridadm_fin,['class' =>'form-control', 'placeholder' =>'Escolaridad Mensual','pattern'=>'[0-9]+',
                        'title'=>'Solo se aceptan numeros'])!!}
                    @endif

                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    {!! Form::label('nbecastotales_fin','Nº Becas Totales') !!}

                    @if($financiamiento->nbecastotales_fin == NULL)
                        {!! Form::text('nbecastotales_fin',0,['class' =>'form-control', 'placeholder' =>'Nº Becas Totales','pattern'=>'[0-9]+',
                        'title'=>'Solo se aceptan numeros'])!!}
                    @else
                        {!! Form::text('nbecastotales_fin',$financiamiento->nbecastotales_fin,['class' =>'form-control', 'placeholder' =>'Nº Becas Totales','pattern'=>'[0-9]+',
                        'title'=>'Solo se aceptan numeros'])!!}
                    @endif

                </div>
            </div>


            <div class="col-md-3">
                <div class="form-group">
                    <label class="checkbox-inline" for="checkboxes-0">

                    @if($financiamiento->pagado_fin == NULL || $financiamiento->pagado_fin == false)
                        {!! Form::checkbox('pagado_fin', '1', 0) !!}PAGADO
                    @else
                        {!! Form::checkbox('pagado_fin', '1', true) !!}PAGADO
                    @endif

                    </label>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    {!! Form::label('vmatriculasPagado_fin','Valor Matricula') !!}

                    @if($financiamiento->nbecastotales_fin == NULL)
                        {!! Form::text('vmatriculasPagado_fin',0,['class' =>'form-control', 'placeholder' =>'Valor Matricula','pattern'=>'[0-9]+',
                        'title'=>'Solo se aceptan numeros'])!!}
                    @else
                        {!! Form::text('vmatriculasPagado_fin',$financiamiento->nbecastotales_fin,['class' =>'form-control', 'placeholder' =>'Valor Matricula','pattern'=>'[0-9]+',
                        'title'=>'Solo se aceptan numeros'])!!}
                    @endif

                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    {!! Form::label('nbecasPagado_fin','Nº Becas/Ing Proyec') !!}

                    @if($financiamiento->nbecasPagado_fin == NULL)
                        {!! Form::text('nbecasPagado_fin',0,['class' =>'form-control', 'placeholder' =>'Nº Becas/Ing Proyec','pattern'=>'[0-9]+',
                        'title'=>'Solo se aceptan numeros'])!!}
                    @else
                        {!! Form::text('nbecasPagado_fin',$financiamiento->nbecasPagado_fin ,['class' =>'form-control', 'placeholder' =>'Nº Becas/Ing Proyec','pattern'=>'[0-9]+',
                        'title'=>'Solo se aceptan numeros'])!!}
                    @endif

                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    {!! Form::label('escolaridadPagado_fin','Escolaridad Mensual') !!}
                    {!! Form::text('escolaridadPagado_fin',($financiamiento->escolaridadPagado_fin == NULL) ? 0:$financiamiento->escolaridadPagado_fin,['class' =>'form-control', 'placeholder' =>'Escolaridad Mensual','pattern'=>'[0-9]+',
                    'title'=>'Solo se aceptan numeros'])!!}
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    {!! Form::label('nbecastotalesPagado_fin','Nº Becas Totales') !!}
                    {!! Form::text('nbecastotalesPagado_fin',($financiamiento->nbecastotalesPagado_fin == NULL) ? 0:$financiamiento->nbecastotalesPagado_fin,['class' =>'form-control', 'placeholder' =>'Nº Becas Totales','pattern'=>'[0-9]+',
                    'title'=>'Solo se aceptan numeros'])!!}
                </div>
            </div>

             <div class="col-md-3">
                <div class="form-group">
                    <label class="checkbox-inline" for="checkboxes-0">
                
                    @if($financiamiento->corporatizado_fin == NULL || $financiamiento->corporatizado_fin == false)
                        {!! Form::checkbox('corporatizado_fin', '1', false) !!}CORPORATIZADO/ADM DELEGADA
                    @else
                        {!! Form::checkbox('corporatizado_fin', '1', true) !!}CORPORATIZADO/ADM DELEGADA
                    @endif 

                    </label>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    {!! Form::label('monto_corp_fin','Ult. Monto Recibido') !!}
                    {!! Form::text('monto_corp_fin',($financiamiento->monto_corp_fin == NULL) ? 0:$financiamiento->monto_corp_fin,['class' =>'form-control', 'placeholder' =>'Ult. Monto Recibido','pattern'=>'[0-9]+',
                    'title'=>'Solo se aceptan numeros'])!!}
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    {!! Form::label('ingresoanual_corp_fin','Ing. Anual Proyectado') !!}
                    {!! Form::text('ingresoanual_corp_fin',($financiamiento->ingresoanual_corp_fin == NULL) ? 0:$financiamiento->ingresoanual_corp_fin,['class' =>'form-control', 'placeholder' =>'Ingreso Anual Proyectado','pattern'=>'[0-9]+',
                    'title'=>'Solo se aceptan numeros'])!!}
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    {!! Form::label('aportecalidad_corp_fin','Aporte Calidad Educ') !!}
                    {!! Form::text('aportecalidad_corp_fin',($financiamiento->aportecalidad_corp_fin == NULL) ? 0:$financiamiento->aportecalidad_corp_fin,['class' =>'form-control', 'placeholder' =>'Aporte Calidad Educ','pattern'=>'[0-9]+',
                    'title'=>'Solo se aceptan numeros'])!!}
                </div>
            </div>

            <!--
            <div class="col-md-3">
                <div class="form-group">
                    {!! Form::label('','SUBVENCION ESPECIAL PREFERENCIAL(SEP)') !!}
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    {!! Form::label('inscripcionSep_fin','Inscrito en la SEP') !!}
                    {!! Form::select('inscripcionSep_fin', ['no' => 'NO', 'si' => 'SI'], null, ['class' => 'form-control']) !!}
                </div>
            </div>
            -->

            <div class="col-md-3">
                <div class="form-group">
                    {!! Form::label('alumnosub_fin','Alumnos Prioritarios') !!}
                    {!! Form::text('alumnosub_fin',($financiamiento->alumnosub_fin == NULL) ? 0:$financiamiento->alumnosub_fin,['class' =>'form-control', 'placeholder' =>'Alumnos Prioritarios','pattern'=>'[0-9]+',
                    'title'=>'Solo se aceptan numeros'])!!}
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    {!! Form::label('alumnosvulnerables_fin','Alumnos Vulnerables') !!}
                    {!! Form::text('alumnosvulnerables_fin',($financiamiento->alumnosvulnerables_fin == NULL) ? 0:$financiamiento->alumnosvulnerables_fin,['class' =>'form-control', 'placeholder' =>'Alumnos Vulnerables','pattern'=>'[0-9]+',
                    'title'=>'Solo se aceptan numeros'])!!}
                </div>
            </div>


        </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-toggle="collapse" href="#collapse2">Cerrar</button>
                {!! Form::submit( 'Guardar', ['class'=>'btn btn-success','data-toggle'=>'#collapse2','id'=>'submitButtonId3']) !!}
            </div>
            </fieldset>
          {!! Form::close() !!}
    </div>
</div>

<script>

var readonly = "{{ $readonly }}";

if(readonly==1)
{
    var form = document.getElementById("financiamiento");
    form.disabled = true;
    document.getElementById("submitButtonId3").disabled = true;
}

</script>
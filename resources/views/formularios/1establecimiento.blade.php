 
 
<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">1. Datos Establecimiento</a>
        </h4>
    </div>
    <div id="collapse1" class="panel-collapse collapse">
        <div class="panel-body" id="">
         {!! Form::open(['route' => 'formulario.store', 'method' => 'POST','files'=>true]) !!}

          <fieldset id="establecimiento">
            
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('nombre_es','Nombre') !!}
                    {!! Form::hidden('id_form', $registroFormulario->id) !!}
                    {!! Form::hidden('update', 'establecimiento') !!}
                    @if($establecimiento->nombre_es == NULL)
                        {!! Form::text('nombre_es',null,['class' =>'form-control', 'placeholder' =>'Nombre' ,'size'=>'70','maxlength'=>'70'] )!!}
                    @else
                        {!! Form::text('nombre_es',$establecimiento->nombre_es,['class' =>'form-control', 'placeholder' =>'Nombre' ,'size'=>'70','maxlength'=>'70'] )!!}
                    @endif

                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    {!! Form::label('codigo_rbd1','R.B.D') !!}

                    @if($establecimiento->codigo_rbd == NULL)
                        {!! Form::text('codigo_rbd',null,['class' =>'form-control', 'placeholder' =>'R.B.D1','title'=>'Solo se aceptan numeros'])!!}
                    @else
                        {!! Form::text('codigo_rbd',$establecimiento->codigo_rbd,['class' =>'form-control', 'placeholder' =>'R.B.D1','title'=>'Solo se aceptan numeros'])!!}
                    @endif

                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    {!! Form::label('codigo_rbd2','Codigo Verificador') !!}

                    @if($establecimiento->codigo_rbd2 == NULL)
                        {!! Form::text('codigo_rbd2',null,['class' =>'form-control', 'placeholder' =>'Codigo Verificador','title'=>'Solo se aceptan numeros'])!!}
                    @else
                         {!! Form::text('codigo_rbd2',$establecimiento->codigo_rbd2,['class' =>'form-control', 'placeholder' =>'Codigo Verificador','title'=>'Solo se aceptan numeros'])!!}
                    @endif

                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    {!! Form::label('denominacion_es','Denominación') !!}

                    @if($establecimiento->denominacion_es == NULL)
                        {!! Form::text('denominacion_es',null,['class' =>'form-control', 'placeholder' =>'Denominación' ,'size'=>'70','maxlength'=>'70'] )!!}
                    @else
                        {!! Form::text('denominacion_es',$establecimiento->denominacion_es,['class' =>'form-control', 'placeholder' =>'Denominación' ,'size'=>'70','maxlength'=>'70'] )!!}
                    @endif
                    
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    {!! Form::label('entorno_es','Entorno') !!}
                @if($establecimiento->entorno_es == NULL)
                    {!! Form::select('entorno_es', ['dato1' => 'No definido', 'dato2' => 'Rurar','dato3' => 'Urbano'], null, ['class' => 'form-control']) !!}
                @else
                     {!! Form::select('entorno_es', ['dato1' => 'No definido', 'dato2' => 'Rurar','dato3' => 'Urbano'], $establecimiento->entorno_es, ['class' => 'form-control']) !!}
                @endif

                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    {!! Form::label('gruposec_es','Grupo S.Ec') !!}
                    @if($establecimiento->gruposec_es == NULL)
                        {!! Form::select('gruposec_es', ['dato1' => 'A', 'dato2' => 'B','dato3' => 'C','dato4' => 'D','dato5' => 'E'], null, ['class' => 'form-control']) !!}
                    @else
                        {!! Form::select('gruposec_es', ['dato1' => 'A', 'dato2' => 'B','dato3' => 'C','dato4' => 'D','dato5' => 'E'], $establecimiento->entorno_es, ['class' => 'form-control']) !!}
                    @endif
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                 {!! Form::label('alumnosgse_es','Alumnos GSE') !!}
                @if($establecimiento->alumnosgse_es == NULL)
                    {!! Form::select('alumnosgse_es', ['dato1' => 'No Definido', 'dato2' => 'ABC1','dato3' => 'C2','dato4' => 'C3','dato5' => 'D','dato6' => 'E'], null, ['class' => 'form-control']) !!}
                @else
                    {!! Form::select('alumnosgse_es', ['dato1' => 'No Definido', 'dato2' => 'ABC1','dato3' => 'C2','dato4' => 'C3','dato5' => 'D','dato6' => 'E'], $establecimiento->alumnosgse_es, ['class' => 'form-control']) !!}
                @endif

                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('direccion_es','Direccion') !!}

                     @if($establecimiento->direccion_es == NULL)
                        {!! Form::text('direccion_es',null,['class' =>'form-control', 'placeholder' =>'Direccion','size'=>'70','maxlength'=>'70'])!!}
                     @else
                        {!! Form::text('direccion_es',$establecimiento->direccion_es,['class' =>'form-control', 'placeholder' =>'Direccion','size'=>'70','maxlength'=>'70'])!!}
                     @endif

                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                
                    {!! Form::label('comuna_es','Comuna') !!}

                    @if($establecimiento->comuna_es == NULL)
                        {!! Form::text('comuna_es',null,['class' =>'form-control', 'placeholder' =>'Comuna','size'=>'70','maxlength'=>'70'])!!}
                    @else
                        {!! Form::text('comuna_es',$establecimiento->comuna_es,['class' =>'form-control', 'placeholder' =>'Comuna','size'=>'70','maxlength'=>'70'])!!}
                    @endif

                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    {!! Form::label('ciudad_es','Ciudad') !!}

                    @if($establecimiento->ciudad_es == NULL)
                        {!! Form::text('ciudad_es',null,['class' =>'form-control', 'placeholder' =>'Ciudad','size'=>'70','maxlength'=>'70'])!!}
                    @else
                        {!! Form::text('ciudad_es',$establecimiento->ciudad_es,['class' =>'form-control', 'placeholder' =>'Ciudad','size'=>'70','maxlength'=>'70'])!!}
                    @endif

                </div>
            </div>

            <div class="col-md-1">
                <div class="form-group">
                    {!! Form::label('region_es','Region') !!}

                    @if($establecimiento->region_es == NULL)
                        {!! Form::text('region_es',null,['class' =>'form-control', 'placeholder' =>'Region','size'=>'70','maxlength'=>'70'])!!}
                    @else
                         {!! Form::text('region_es',$establecimiento->region_es,['class' =>'form-control', 'placeholder' =>'Region','size'=>'70','maxlength'=>'70'])!!}
                    @endif

                </div>
            </div>

            <div class="col-md-1">
                <div class="form-group">
                    {!! Form::label('ag_reg','Ag Reg') !!}

                    @if($establecimiento->ag_reg == NULL)
                        {!! Form::text('ag_reg',null,['class' =>'form-control', 'placeholder' =>'Ag Reg','size'=>'70','maxlength'=>'70'])!!}
                    @else
                        {!! Form::text('ag_reg',$establecimiento->ag_reg,['class' =>'form-control', 'placeholder' =>'Ag Reg','size'=>'70','maxlength'=>'70'])!!}
                    @endif

                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    {!! Form::label('codpostal_es','Codigo Postal') !!}

                    @if($establecimiento->codpostal_es == NULL)
                        {!! Form::text('codpostal_es',null,['class' =>'form-control', 'placeholder' =>'Codigo Postal'])!!}
                    @else
                         {!! Form::text('codpostal_es',$establecimiento->codpostal_es,['class' =>'form-control', 'placeholder' =>'Codigo Postal'])!!}
                    @endif

                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    
                    {!! Form::label('casilla_es','Casilla') !!}

                    @if($establecimiento->casilla_es == NULL)
                        {!! Form::text('casilla_es',null,['class' =>'form-control', 'placeholder' =>'Casilla'])!!}
                    @else
                        {!! Form::text('casilla_es',$establecimiento->casilla_es,['class' =>'form-control', 'placeholder' =>'Casilla'])!!}
                    @endif
                    
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    {!! Form::label('correo_es','Correo') !!}

                     @if($establecimiento->correo_es == NULL)
                        {!! Form::text('correo_es',null,['class' =>'form-control', 'placeholder' =>'Correo'])!!}
                     @else
                        {!! Form::text('correo_es',$establecimiento->correo_es,['class' =>'form-control', 'placeholder' =>'Correo'])!!}
                     @endif

                </div>
            </div>


            <div class="col-md-2">
                <div class="form-group">
                    {!! Form::label('fono1_es','Fono1') !!}

                     @if($establecimiento->fono1_es == NULL)
                        {!! Form::text('fono1_es',null,['class' =>'form-control', 'placeholder' =>'Fono1'])!!}
                     @else
                        {!! Form::text('fono1_es',$establecimiento->fono1_es,['class' =>'form-control', 'placeholder' =>'Fono1'])!!}
                     @endif

                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    {!! Form::label('fono2_es','Fono2') !!}

                    @if($establecimiento->fono2_es == NULL)
                        {!! Form::text('fono2_es',null,['class' =>'form-control', 'placeholder' =>'Fono2'])!!}
                    @else
                        {!! Form::text('fono2_es',$establecimiento->fono2_es,['class' =>'form-control', 'placeholder' =>'Fono2'])!!}
                    @endif

                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    {!! Form::label('fax_es','Celular') !!}

                    @if($establecimiento->fax_es == NULL)
                        {!! Form::text('fax_es',null,['class' =>'form-control', 'placeholder' =>'Celular'])!!}
                    @else
                        {!! Form::text('fax_es',$establecimiento->fax_es,['class' =>'form-control', 'placeholder' =>'Celular'])!!}
                    @endif

                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    {!! Form::label('email1_es','Email1') !!}

                    @if($establecimiento->email1_es == NULL)
                        {!! Form::text('email1_es',null,['class' =>'form-control', 'placeholder' =>'Email1'])!!}
                    @else
                        {!! Form::text('email1_es',$establecimiento->email1_es,['class' =>'form-control', 'placeholder' =>'Email1'])!!}
                    @endif

                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    {!! Form::label('email2_es','Email2') !!}

                    @if($establecimiento->email2_es == NULL)
                        {!! Form::text('email2_es',null,['class' =>'form-control', 'placeholder' =>'Email2'])!!}
                    @else
                         {!! Form::text('email2_es',$establecimiento->email2_es,['class' =>'form-control', 'placeholder' =>'Email2'])!!}
                    @endif
                    
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    {!! Form::label('email3_es','Email3') !!}

                    @if($establecimiento->email3_es == NULL)
                        {!! Form::text('email3_es',null,['class' =>'form-control', 'placeholder' =>'Email3'])!!}
                    @else
                        {!! Form::text('email3_es',$establecimiento->email3_es,['class' =>'form-control', 'placeholder' =>'Email3'])!!}
                    @endif

                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    {!! Form::label('pweb_es','Pagina Web') !!}

                    @if($establecimiento->pweb_es == NULL)
                        {!! Form::text('pweb_es',null,['type'=>'url','class' =>'form-control', 'placeholder' =>'https://www.nombresitio.com'])!!}
                    @else
                         {!! Form::text('pweb_es',$establecimiento->pweb_es,['type'=>'url','class' =>'form-control', 'placeholder' =>'https://www.nombresitio.com'])!!}
                    @endif

                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                
                    {!! Form::label('planes_es','Planes') !!}

                    @if($establecimiento->planes_es == NULL)
                        {!! Form::select('planes_es', ['dato1' => 'Si', 'dato2' => 'No'], null, ['class' => 'form-control']) !!}
                    @else
                        {!! Form::select('planes_es', ['dato1' => 'Si', 'dato2' => 'No'], $establecimiento->planes_es, ['class' => 'form-control']) !!}
                    @endif

                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    {!! Form::label('director_es','Director') !!}

                    @if($establecimiento->director_es == NULL)
                        {!! Form::select('director_es', ['sr' => 'SR.', 'sra' => 'SRA.','HNA' => 'HNA', 'Padre' => 'Padre','Madre' => 'Madre','Sor' => 'Sor'], null, ['class' => 'form-control']) !!}
                    @else
                        {!! Form::select('director_es', ['sr' => 'SR.', 'sra' => 'SRA.','HNA' => 'HNA', 'Padre' => 'Padre','Madre' => 'Madre','Sor' => 'Sor'], $establecimiento->director_es, ['class' => 'form-control']) !!}
                    @endif

                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    {!! Form::label('ndirector_es','Nombre') !!}

                    @if($establecimiento->ndirector_es == NULL)
                        {!! Form::text('ndirector_es',null,['class' =>'form-control', 'placeholder' =>'Nombre','size'=>'70','maxlength'=>'70'])!!}
                    @else
                         {!! Form::text('ndirector_es',$establecimiento->ndirector_es,['class' =>'form-control', 'placeholder' =>'Nombre','size'=>'70','maxlength'=>'70'])!!}
                    @endif

                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    {!! Form::label('rut_es','Rut') !!}

                    @if($establecimiento->ndirector_es == NULL)
                        <input type="text" name="rut_es" class="form-control" placeholder="12345678-5" title="ej. 12345678-5"></input>
                    @else
                         <input type="text" name="rut_es" value="{{ $establecimiento->ndirector_es }}" class="form-control" placeholder="12345678-5" title="ej. 12345678-5"></input>
                    @endif

                </div>
            </div>

            <div class="col-md-1">
                <div class="form-group">
                    {!! Form::label('tipo1_es','Tipo1') !!}

                    @if($establecimiento->ndirector_es == NULL)
                        {!! Form::select('tipo1_es', ['dato1' => 'Laico', 'dato2' => 'Seglar'], null, ['class' => 'form-control']) !!}
                    @else
                        {!! Form::select('tipo1_es', ['dato1' => 'Laico', 'dato2' => 'Seglar'], $establecimiento->ndirector_es, ['class' => 'form-control']) !!}
                    @endif

                </div>
            </div>

            <div class="col-md-1">
                <div class="form-group">
                    {!! Form::label('tipo2_es','Tipo2') !!}

                    @if($establecimiento->tipo2_es == NULL)
                        {!! Form::select('tipo2_es', ['dato1' => 'Religioso', 'dato2' => 'Sacerdore'], null, ['class' => 'form-control']) !!}
                    @else
                        {!! Form::select('tipo2_es', ['dato1' => 'Religioso', 'dato2' => 'Sacerdore'], $establecimiento->tipo2_es, ['class' => 'form-control']) !!}
                    @endif

                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    {!! Form::label('representante_es','Representante') !!}

                    @if($establecimiento->representante_es == NULL)
                        {!! Form::select('representante_es', ['sr' => 'SR.', 'sres' => 'SRES.','sra' => 'SRA.','hermana' => 'Hermana', 'Hermano' => 'Hermano', 'Padre' => 'Padre','Madre' => 'Madre','Sor' => 'Sor'], null, ['class' => 'form-control']) !!}
                    @else
                        {!! Form::select('representante_es', ['sr' => 'SR.', 'sres' => 'SRES.','sra' => 'SRA.','hermana' => 'Hermana', 'Hermano' => 'Hermano', 'Padre' => 'Padre','Madre' => 'Madre','Sor' => 'Sor'], $establecimiento->representante_es, ['class' => 'form-control']) !!}
                    @endif

                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    {!! Form::label('nlegal_es','Nombre') !!}

                    @if($establecimiento->nlegal_es == NULL)
                        {!! Form::text('nlegal_es',null,['class' =>'form-control', 'placeholder' =>'Nombre','size'=>'70','maxlength'=>'70'])!!}
                    @else
                        {!! Form::text('nlegal_es',$establecimiento->nlegal_es,['class' =>'form-control', 'placeholder' =>'Nombre','size'=>'70','maxlength'=>'70'])!!}
                    @endif

                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('rutlegal_es','Rut') !!}

                     @if($establecimiento->rutlegal_es == NULL)
                        <input type="text" name="rutlegal_es" class="form-control"  placeholder="12345678-5" title="ej. 12345678-5"></input>
                     @else
                        <input type="text" name="rutlegal_es" class="form-control"  value="{{ $establecimiento->rutlegal_es }}" title="ej. 12345678-5"></input>
                     @endif

                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    {!! Form::label('sostenedor_es','Sostenedor') !!}

                    @if($establecimiento->sostenedor_es == NULL)
                        {!! Form::select('sostenedor_es', ['sre' => 'Sre.','hermano' => 'Hermano.','sr' => 'SR.', 'sra' => 'SRA.','HNA' => 'HNA', 'Padre' => 'Padre','Madre' => 'Madre','Sor' => 'Sor'], null, ['class' => 'form-control']) !!}
                    @else
                        {!! Form::select('sostenedor_es', ['sre' => 'Sre.','hermano' => 'Hermano.','sr' => 'SR.', 'sra' => 'SRA.','HNA' => 'HNA', 'Padre' => 'Padre','Madre' => 'Madre','Sor' => 'Sor'], $establecimiento->sostenedor_es , ['class' => 'form-control']) !!}
                    @endif

                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    {!! Form::label('nsostenedor_es','Nombre') !!}

                    @if($establecimiento->nsostenedor_es == NULL)
                        {!! Form::text('nsostenedor_es',null,['class' =>'form-control', 'placeholder' =>'Nombre','size'=>'70','maxlength'=>'70'])!!}
                    @else
                        {!! Form::text('nsostenedor_es',$establecimiento->nsostenedor_es,['class' =>'form-control', 'placeholder' =>'Nombre','size'=>'70','maxlength'=>'70'])!!}
                    @endif

                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('rutsostenedor_es','Rut') !!}

                    @if($establecimiento->rutsostenedor_es == NULL)
                        <input type="text" name="rutsostenedor_es" class="form-control" placeholder="12345678-5" title="ej. 12345678-5"></input>
                    @else
                        <input type="text" name="rutsostenedor_es" class="form-control" value="{{ $establecimiento->rutsostenedor_es }}" ></input>
                    @endif

                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    {!! Form::label('ccatolico_es','Colegio Catolico') !!}

                    @if($establecimiento->ccatolico_es == NULL)
                        {!! Form::select('ccatolico_es', ['dato1' => 'A1 Dependiente', 'dato2' => 'A2 Particular'], null, ['class' => 'form-control']) !!}
                    @else
                        {!! Form::select('ccatolico_es', ['dato1' => 'A1 Dependiente', 'dato2' => 'A2 Particular'], $establecimiento->ccatolico_es, ['class' => 'form-control']) !!}
                    @endif

                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    {!! Form::label('claico_es','Colegio Laico') !!}

                     @if($establecimiento->claico_es == NULL)
                        {!! Form::text('claico_es',null,['class' =>'form-control', 'placeholder' =>'Tipo','size'=>'70','maxlength'=>'70'])!!}
                     @else
                        {!! Form::text('claico_es',$establecimiento->claico_es,['class' =>'form-control', 'placeholder' =>'Tipo','size'=>'70','maxlength'=>'70'])!!}
                     @endif

                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    {!! Form::label('confesion_es','Otra Confesion') !!}

                    @if($establecimiento->confesion_es == NULL)
                        {!! Form::text('confesion_es',null,['class' =>'form-control', 'placeholder' =>'Confesion religiosa','size'=>'70','maxlength'=>'70'])!!}
                    @else
                         {!! Form::text('confesion_es',$establecimiento->confesion_es,['class' =>'form-control', 'placeholder' =>'Confesion religiosa','size'=>'70','maxlength'=>'70'])!!}
                    @endif

                </div>
            </div>
 
            <div class="col-md-3">
                <div class="form-group">
                    {!! Form::label('fundacionfecha_es','Fecha Fundacion') !!}

                    @if($establecimiento->fundacionfecha_es == NULL)
                        {!! Form::date('fundacionfecha_es',null,['class' =>'form-control'])!!}
                    @else
                        {!! Form::date('fundacionfecha_es',$establecimiento->fundacionfecha_es,['class' =>'form-control'])!!}
                    @endif
                
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    {!! Form::label('ndrecreto_es','Nº Decreto') !!}

                    @if($establecimiento->ndrecreto_es == NULL)
                        {!! Form::text('ndrecreto_es',null,['class' =>'form-control'])!!}
                    @else
                         {!! Form::text('ndrecreto_es',$establecimiento->ndrecreto_es,['class' =>'form-control'])!!}
                    @endif 

                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    {!! Form::label('Resolución','Resolución') !!}

                    @if($establecimiento->resolucion_es == NULL)
                        {!! Form::date('resolucion_es',null,['class' =>'form-control'])!!}
                    @else
                        {!! Form::date('resolucion_es',$establecimiento->resolucion_es,['class' =>'form-control'])!!}
                    @endif
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    {!! Form::label('dmineduc_es','Dependencia Mineduc') !!}

                    @if($establecimiento->dmineduc_es == NULL)
                        {!! Form::text('dmineduc_es',null,['class' =>'form-control', 'placeholder' =>'Depen. Mineduc' ,'size'=>'70','maxlength'=>'70'] )!!}
                    @else
                         {!! Form::text('dmineduc_es',$establecimiento->dmineduc_es,['class' =>'form-control', 'placeholder' =>'Depen. Mineduc' ,'size'=>'70','maxlength'=>'70'] )!!}
                    @endif

                </div>
            </div>

            <div class="col-md-11">
                <fieldset class="scheduler-border">
                <legend class="scheduler-border">Otros</legend> 
                <!-- Multiple Radios (inline) -->
                    <label class="col-md-2 control-label" for="checkboxes">Tipo de Educacion</label>
                    <label class="checkbox-inline" for="checkboxes-0">


                    @if($establecimiento->prebasic == NULL || $establecimiento->prebasic == false)
                        {!! Form::checkbox('prebasic', '1', false) !!}Pre basica 
                    @else
                        {!! Form::checkbox('prebasic', '1', true) !!}Pre basica 
                    @endif

                    </label>

                    <label class="checkbox-inline" for="checkboxes-1">
                
                     @if($establecimiento->generalbasic == NULL || $establecimiento->generalbasic == false)
                        {!! Form::checkbox('generalbasic', '2', false) !!}General Basica
                     @else
                        {!! Form::checkbox('generalbasic', '2', true) !!}General Basica
                     @endif
                    
                    </label>

                    <label class="checkbox-inline" for="checkboxes-2">

                    @if($establecimiento->especial == NULL || $establecimiento->especial == false)
                        {!! Form::checkbox('especial', '3', false) !!}Especial
                    @else
                        {!! Form::checkbox('especial', '3', true) !!}Especial
                    @endif

                    </label>

                    <label class="checkbox-inline" for="checkboxes-3">

                    @if($establecimiento->humanista_cientifica == NULL || $establecimiento->humanista_cientifica == false)
                        {!! Form::checkbox('humanista_cientifica', '4', false) !!}Humanista/Cientifica
                    @else
                        {!! Form::checkbox('humanista_cientifica', '4', true) !!}Humanista/Cientifica
                    @endif

                    </label>

                    <label class="checkbox-inline" for="checkboxes-4">

                    @if($establecimiento->tecprofesional == NULL || $establecimiento->tecprofesional == false)
                        {!! Form::checkbox('tecprofesional', '5', false) !!}Tecnico/Profesional
                    @else
                        {!! Form::checkbox('tecprofesional', '5', true) !!}Tecnico/Profesional
                    @endif

                    </label>

                    <label class="checkbox-inline" for="checkboxes-5">

                     @if($establecimiento->jinfantiles == NULL || $establecimiento->jinfantiles == false)
                        {!! Form::checkbox('jinfantiles', '6', false) !!}Jardines Infantiles
                     @else
                         {!! Form::checkbox('jinfantiles', '6', true) !!}Jardines Infantiles
                     @endif

                    </label>

                    <label class="checkbox-inline" for="checkboxes-6">

                    @if($establecimiento->otro == NULL || $establecimiento->otro == false)
                        {!! Form::checkbox('otro', '7', false) !!}Otro
                    @else
                        {!! Form::checkbox('otro', '7', true) !!}Otro
                    @endif

                    </label>
                </fieldset>           
            </div>

            <div class="col-md-11">
                <fieldset class="scheduler-border">

                <!-- Multiple Radios (inline) -->
                    <label class="col-md-2 control-label" for="checkboxes">Estado</label>
                    <label class="checkbox-inline" for="checkboxes-0">

                    @if($establecimiento->estado == 1)
                        <label class="radio-inline"><input type="radio" name="estadoCheck" value="1" checked>No Afiliado</label>
                    @else
                        <label class="radio-inline"><input type="radio" name="estadoCheck" value="1" >No Afiliado</label>
                    @endif

                    </label>

                    <label class="checkbox-inline" for="checkboxes-1">

                    @if($establecimiento->estado == 2)
                        <label class="radio-inline"><input type="radio" name="estadoCheck" value="2" checked>Postulante</label>
                        {!! Form::text('estado1Text',$establecimiento->estado_text,['class' =>'form-control', 'placeholder' =>'postulante'])!!}
                    @else
                        <label class="radio-inline"><input type="radio" name="estadoCheck" value="2">Postulante</label>
                        {!! Form::text('estado1Text',null,['class' =>'form-control', 'placeholder' =>'postulante'])!!}
                    @endif

                   
                    </label>

                    <label class="checkbox-inline" for="checkboxes-2">

                    @if($establecimiento->estado == 3)
                        <label class="radio-inline"><input type="radio" name="estadoCheck" value="3" checked>Afiliado</label>
                        {!! Form::text('estado2Text',$establecimiento->estado_text,['class' =>'form-control', 'placeholder' =>'afiliado'])!!}
                    @else
                        <label class="radio-inline"><input type="radio" name="estadoCheck" value="3">Afiliado</label>
                        {!! Form::text('estado2Text',null,['class' =>'form-control', 'placeholder' =>'afiliado'])!!}
                    @endif

                    </label>

                    <label class="checkbox-inline" for="checkboxes-3">

                    @if($establecimiento->estado == 4)
                        <label class="radio-inline"><input type="radio" name="estadoCheck" value="4" checked>Desafiliado</label>
                        {!! Form::text('estado3Text',$establecimiento->estado_text,['class' =>'form-control', 'placeholder' =>'desafiliado'])!!}
                    @else
                        <label class="radio-inline"><input type="radio" name="estadoCheck" value="4">Desafiliado</label>
                        {!! Form::text('estado3Text',null,['class' =>'form-control', 'placeholder' =>'desafiliado'])!!}
                    @endif

                    </label>
                </fieldset>           
            </div>
         </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-toggle="collapse" href="#collapse1">Cerrar</button>
                {!! Form::submit( 'Guardar', ['class'=>'btn btn-success','id'=>'submitButtonId1']) !!}
            </div>
         </fieldset>
         {!! Form::close() !!}
    </div>
</div>


<script>

var readonly = "{{ $readonly }}";

if(readonly==1)
{
    var form = document.getElementById("establecimiento");
    form.disabled = true;
    document.getElementById("submitButtonId1").disabled = true;
}

</script>
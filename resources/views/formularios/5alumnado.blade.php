
<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">5. Alumnado</a>
        </h4>
    </div>
    <div id="collapse5" class="panel-collapse collapse ">
        <div class="panel-body" id="main">
          {!! Form::open(['route' => 'formulario.store', 'method' => 'POST','files'=>true]) !!}


          <fieldset id="alumnado">

            <div class="col-md-2">
                <div class="form-group">
                {!! Form::hidden('id_form', $registroFormulario->id) !!}
                {!! Form::hidden('update', 'alumnado') !!}
                    {!! Form::label('','NIVEL') !!}
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    {!! Form::label('','Nº DE CURSOS') !!}
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('','Nº DE ALUMNOS') !!}
                    <br/>
                    {!! Form::label('','HOMBRES  /') !!}
                    {!! Form::label('','  MUJERES') !!}
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    {!! Form::label('','TOTAL') !!}
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    <label></label>
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    {!! Form::label('','PRE-BASICA') !!}
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    <input type="text"  value="{{ ($alumnado->ncursos_pre_al == NULL) ? 0:$alumnado->ncursos_pre_al }}" name="ncursos_pre_al" class="form-control" placeholder="Nº Cursos" pattern="[0-9]+"
                        title="Solo se aceptan numeros" v-model="ncursos_pre_al" >
                    </input>
                </div>
            </div>
            
            <div class="col-md-3">
                <div class="form-group">
                    <input type="text"  value="{{ ($alumnado->nalumnos_hombre_pre_al == NULL) ? 0:$alumnado->nalumnos_hombre_pre_al }}" name="nalumnos_hombre_pre_al" class="form-control" placeholder="Nº Hombres" pattern="[0-9]+"
                        title="Solo se aceptan numeros" v-model="nalumnos_hombre_pre_al" >
                    </input>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <input type="text"  value="{{ ($alumnado->nalumnos_mujer_pre_al == NULL) ? 0:$alumnado->nalumnos_mujer_pre_al }}" name="nalumnos_mujer_pre_al" class="form-control" placeholder="Nº Mujeres" pattern="[0-9]+"
                        title="Solo se aceptan numeros" v-model="nalumnos_mujer_pre_al" >
                    </input>
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    <input type="text" name="resultado1" class="form-control" placeholder="Total" v-model="resultado1" disabled></input>
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    {!! Form::label('','PRIMERO BASICO') !!}
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    <input type="text"  value="{{ ($alumnado->ncursos_primero_al == NULL) ? 0:$alumnado->ncursos_primero_al }}" name="ncursos_primero_al" class="form-control" placeholder="Nº Cursos" pattern="[0-9]+"
                        title="Solo se aceptan numeros" v-model="ncursos_primero_al" >
                    </input>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">         
                    <input type="text"  value="{{ ($alumnado->nalumnos_hombre_primero_al == NULL) ? 0:$alumnado->nalumnos_hombre_primero_al }}" name="nalumnos_hombre_primero_al" class="form-control" placeholder="Nº Hombres" pattern="[0-9]+"
                        title="Solo se aceptan numeros" v-model="nalumnos_hombre_primero_al" >
                    </input>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <input type="text"  value="{{ ($alumnado->nalumnos_mujer_primero_al == NULL) ? 0:$alumnado->nalumnos_mujer_primero_al }}" name="nalumnos_mujer_primero_al" class="form-control" placeholder="Nº Mujeres" pattern="[0-9]+"
                        title="Solo se aceptan numeros" v-model="nalumnos_mujer_primero_al" >
                    </input>
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    <input type="text" name="resultado2" class="form-control" placeholder="Total" v-model="resultado2" disabled></input>
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    {!! Form::label('','SEGUNDO BASICO') !!}
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    <input type="text"  value="{{ ($alumnado->ncursos_segundo_al == NULL) ? 0:$alumnado->ncursos_segundo_al }}" name="ncursos_segundo_al" class="form-control" placeholder="Nº Cursos" pattern="[0-9]+"
                        title="Solo se aceptan numeros" v-model="ncursos_segundo_al" >
                    </input>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <input type="text"  value="{{ ($alumnado->nalumnos_hombre_segundo_al == NULL) ? 0:$alumnado->nalumnos_hombre_segundo_al }}" name="nalumnos_hombre_segundo_al" class="form-control" placeholder="Nº Hombres" pattern="[0-9]+"
                        title="Solo se aceptan numeros" v-model="nalumnos_hombre_segundo_al" >
                    </input>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <input type="text"  value="{{ ($alumnado->nalumnos_mujer_segundo_al == NULL) ? 0:$alumnado->nalumnos_mujer_segundo_al }}" name="nalumnos_mujer_segundo_al" class="form-control" placeholder="Nº Mujeres" pattern="[0-9]+"
                        title="Solo se aceptan numeros" v-model="nalumnos_mujer_segundo_al" >
                    </input>
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                     <input type="text"   name="resultado3" class="form-control" placeholder="Total" v-model="resultado3" disabled></input>
                </div>
            </div>


            <div class="col-md-2">
                <div class="form-group">
                    {!! Form::label('','TERCERO BASICO') !!}
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    <input type="text"  value="{{ ($alumnado->ncursos_tercero_al == NULL) ? 0:$alumnado->ncursos_tercero_al }}" name="ncursos_tercero_al" class="form-control" placeholder="Nº Cursos" pattern="[0-9]+"
                        title="Solo se aceptan numeros" v-model="ncursos_tercero_al" >
                    </input>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <input type="text"  value="{{ ($alumnado->nalumnos_hombre_tercero_al == NULL) ? 0:$alumnado->nalumnos_hombre_tercero_al }}" name="nalumnos_hombre_tercero_al" class="form-control" placeholder="Nº Hombres" pattern="[0-9]+"
                        title="Solo se aceptan numeros" v-model="nalumnos_hombre_tercero_al" >
                    </input>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <input type="text"  value="{{ ($alumnado->nalumnos_mujer_tercero_al == NULL) ? 0:$alumnado->nalumnos_mujer_tercero_al }}" name="nalumnos_mujer_tercero_al" class="form-control" placeholder="Nº Mujeres" pattern="[0-9]+"
                        title="Solo se aceptan numeros" v-model="nalumnos_mujer_tercero_al" >
                    </input>
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                     <input type="text" name="resultado4" class="form-control" placeholder="Total" v-model="resultado4" disabled></input>
                </div>
            </div>


            <div class="col-md-2">
                <div class="form-group">
                    {!! Form::label('','CUARTO BASICO') !!}
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    <input type="text"  value="{{ ($alumnado->ncursos_cuarto_al == NULL) ? 0:$alumnado->ncursos_cuarto_al }}" name="ncursos_cuarto_al" class="form-control" placeholder="Nº Cursos" pattern="[0-9]+"
                        title="Solo se aceptan numeros" v-model="ncursos_cuarto_al" >
                    </input>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <input type="text"  value="{{ ($alumnado->nalumnos_hombre_cuarto_al == NULL) ? 0:$alumnado->nalumnos_hombre_cuarto_al }}" name="nalumnos_hombre_cuarto_al" class="form-control" placeholder="Nº Hombres" pattern="[0-9]+"
                        title="Solo se aceptan numeros" v-model="nalumnos_hombre_cuarto_al" >
                    </input>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <input type="text"  value="{{ ($alumnado->nalumnos_mujer_cuarto_al == NULL) ? 0:$alumnado->nalumnos_mujer_cuarto_al }}" name="nalumnos_mujer_cuarto_al" class="form-control" placeholder="Nº Mujeres" pattern="[0-9]+"
                        title="Solo se aceptan numeros" v-model="nalumnos_mujer_cuarto_al" >
                    </input>
                </div>
            </div>


            <div class="col-md-2">
                <div class="form-group">
                     <input type="text"  name="resultado5" class="form-control" placeholder="Total" v-model="resultado5" disabled></input>
                </div>
            </div>


            <div class="col-md-2">
                <div class="form-group">
                    {!! Form::label('','QUINTO BASICO') !!}
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    <input type="text"  value="{{ ($alumnado->ncursos_quinto_al == NULL) ? 0:$alumnado->ncursos_quinto_al }}" name="ncursos_quinto_al" class="form-control" placeholder="Nº Cursos" pattern="[0-9]+"
                        title="Solo se aceptan numeros" v-model="ncursos_quinto_al" >
                    </input>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <input type="text"  value="{{ ($alumnado->nalumnos_hombre_quinto_al == NULL) ? 0:$alumnado->nalumnos_hombre_quinto_al }}" name="nalumnos_hombre_quinto_al" class="form-control" placeholder="Nº Hombres" pattern="[0-9]+"
                        title="Solo se aceptan numeros" v-model="nalumnos_hombre_quinto_al" >
                    </input>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <input type="text"  value="{{ ($alumnado->nalumnos_mujer_quinto_al == NULL) ? 0:$alumnado->nalumnos_mujer_quinto_al }}" name="nalumnos_mujer_quinto_al" class="form-control" placeholder="Nº Mujeres" pattern="[0-9]+"
                        title="Solo se aceptan numeros" v-model="nalumnos_mujer_quinto_al" >
                    </input>
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                     <input type="text" name="resultado6" class="form-control" placeholder="Total" v-model="resultado6" disabled></input>
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    {!! Form::label('','SEXTO BASICO') !!}
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    <input type="text"  value="{{ ($alumnado->ncursos_sexto_al == NULL) ? 0:$alumnado->ncursos_sexto_al }}" name="ncursos_sexto_al" class="form-control" placeholder="Nº Cursos" pattern="[0-9]+"
                        title="Solo se aceptan numeros" v-model="ncursos_sexto_al" >
                    </input>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <input type="text"  value="{{ ($alumnado->nalumnos_hombre_sexto_al == NULL) ? 0:$alumnado->nalumnos_hombre_sexto_al }}" name="nalumnos_hombre_sexto_al" class="form-control" placeholder="Nº Hombres" pattern="[0-9]+"
                        title="Solo se aceptan numeros" v-model="nalumnos_hombre_sexto_al" >
                    </input>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <input type="text"  value="{{ ($alumnado->nalumnos_mujer_sexto_al == NULL) ? 0:$alumnado->nalumnos_mujer_sexto_al }}" name="nalumnos_mujer_sexto_al" class="form-control" placeholder="Nº Mujeres" pattern="[0-9]+"
                        title="Solo se aceptan numeros" v-model="nalumnos_mujer_sexto_al" >
                    </input>
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                     <input type="text" name="resultado7" class="form-control" placeholder="Total" v-model="resultado7" disabled></input>
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    {!! Form::label('','SEPTIMO BASICO') !!}
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    <input type="text"  value="{{ ($alumnado->ncursos_septimo_al == NULL) ? 0:$alumnado->ncursos_septimo_al }}" name="ncursos_septimo_al" class="form-control" placeholder="Nº Cursos" pattern="[0-9]+"
                        title="Solo se aceptan numeros" v-model="ncursos_septimo_al" >
                    </input>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <input type="text"  value="{{ ($alumnado->nalumnos_hombre_septimo_al == NULL) ? 0:$alumnado->nalumnos_hombre_septimo_al }}" name="nalumnos_hombre_septimo_al" class="form-control" placeholder="Nº Hombres" pattern="[0-9]+"
                        title="Solo se aceptan numeros" v-model="nalumnos_hombre_septimo_al" >
                    </input>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <input type="text"  value="{{ ($alumnado->nalumnos_mujer_septimo_al == NULL) ? 0:$alumnado->nalumnos_mujer_septimo_al }}" name="nalumnos_mujer_septimo_al" class="form-control" placeholder="Nº Mujeres" pattern="[0-9]+"
                        title="Solo se aceptan numeros" v-model="nalumnos_mujer_septimo_al" >
                    </input>
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                     <input type="text" name="resultado8" class="form-control" placeholder="Total" v-model="resultado8" disabled></input>
                </div>
            </div>


            <div class="col-md-2">
                <div class="form-group">
                    {!! Form::label('','OCTAVO BASICO') !!}
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    <input type="text"  value="{{ ($alumnado->ncursos_octavo_al == NULL) ? 0:$alumnado->ncursos_octavo_al }}" name="ncursos_octavo_al" class="form-control" placeholder="Nº Cursos" pattern="[0-9]+"
                        title="Solo se aceptan numeros" v-model="ncursos_octavo_al" >
                    </input>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <input type="text"  value="{{ ($alumnado->nalumnos_hombre_octavo_al == NULL) ? 0:$alumnado->nalumnos_hombre_octavo_al }}" name="nalumnos_hombre_octavo_al" class="form-control" placeholder="Nº Hombres" pattern="[0-9]+"
                        title="Solo se aceptan numeros" v-model="nalumnos_hombre_octavo_al" >
                    </input>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <input type="text"  value="{{ ($alumnado->nalumnos_mujer_octavo_al == NULL) ? 0:$alumnado->nalumnos_mujer_octavo_al }}" name="nalumnos_mujer_octavo_al" class="form-control" placeholder="Nº Mujeres" pattern="[0-9]+"
                        title="Solo se aceptan numeros" v-model="nalumnos_mujer_octavo_al" >
                    </input>
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                     <input type="text" name="resultado9" class="form-control" placeholder="Total" v-model="resultado9" disabled></input>
                </div>
            </div>


            <div class="col-md-2">
                <div class="form-group">
                    {!! Form::label('','PRIMERO MEDIO') !!}
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    <input type="text"  value="{{ ($alumnado->ncursos_primerome_al == NULL) ? 0:$alumnado->ncursos_primerome_al }}" name="ncursos_primerome_al" class="form-control" placeholder="Nº Cursos" pattern="[0-9]+"
                        title="Solo se aceptan numeros" v-model="ncursos_primerome_al" >
                    </input>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <input type="text"  value="{{ ($alumnado->nalumnos_hombre_primerome_al == NULL) ? 0:$alumnado->nalumnos_hombre_primerome_al }}" name="nalumnos_hombre_primerome_al" class="form-control" placeholder="Nº Hombres" pattern="[0-9]+"
                        title="Solo se aceptan numeros" v-model="nalumnos_hombre_primerome_al" >
                    </input>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <input type="text"  value="{{ ($alumnado->nalumnos_mujer_primerome_al == NULL) ? 0:$alumnado->nalumnos_mujer_primerome_al }}" name="nalumnos_mujer_primerome_al" class="form-control" placeholder="Nº Mujeres" pattern="[0-9]+"
                        title="Solo se aceptan numeros" v-model="nalumnos_mujer_primerome_al" >
                    </input>
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                     <input type="text" name="resultado10" class="form-control" placeholder="Total" v-model="resultado10" disabled></input>
                </div>
            </div>


            <div class="col-md-2">
                <div class="form-group">
                    {!! Form::label('','SEGUNDO MEDIO') !!}
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    <input type="text"  value="{{ ($alumnado->ncursos_segundome_al == NULL) ? 0:$alumnado->ncursos_segundome_al }}" name="ncursos_segundome_al" class="form-control" placeholder="Nº Cursos" pattern="[0-9]+"
                        title="Solo se aceptan numeros" v-model="ncursos_segundome_al" >
                    </input>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <input type="text"  value="{{ ($alumnado->nalumnos_hombre_segundome_al == NULL) ? 0:$alumnado->nalumnos_hombre_segundome_al }}" name="nalumnos_hombre_segundome_al" class="form-control" placeholder="Nº Hombres" pattern="[0-9]+"
                        title="Solo se aceptan numeros" v-model="nalumnos_hombre_segundome_al" >
                    </input>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <input type="text"  value="{{ ($alumnado->nalumnos_mujer_segundome_al == NULL) ? 0:$alumnado->nalumnos_mujer_segundome_al }}" name="nalumnos_mujer_segundome_al" class="form-control" placeholder="Nº Mujeres" pattern="[0-9]+"
                        title="Solo se aceptan numeros" v-model="nalumnos_mujer_segundome_al" >
                    </input>
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                     <input type="text" name="resultado11" class="form-control" placeholder="Total" v-model="resultado11" disabled></input>
                </div>
            </div>


            <div class="col-md-2">
                <div class="form-group">
                    {!! Form::label('','TERCERO MEDIO') !!}
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    <input type="text"  value="{{ ($alumnado->ncursos_tercerome_al == NULL) ? 0:$alumnado->ncursos_tercerome_al }}" name="ncursos_tercerome_al" class="form-control" placeholder="Nº Cursos" pattern="[0-9]+"
                        title="Solo se aceptan numeros" v-model="ncursos_tercerome_al" >
                    </input>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <input type="text"  value="{{ ($alumnado->nalumnos_hombre_tercerome_al == NULL) ? 0:$alumnado->nalumnos_hombre_tercerome_al }}" name="nalumnos_hombre_tercerome_al" class="form-control" placeholder="Nº Hombres" pattern="[0-9]+"
                        title="Solo se aceptan numeros" v-model="nalumnos_hombre_tercerome_al" >
                    </input>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <input type="text"  value="{{ ($alumnado->nalumnos_mujer_tercerome_al == NULL) ? 0:$alumnado->nalumnos_mujer_tercerome_al }}" name="nalumnos_mujer_tercerome_al" class="form-control" placeholder="Nº Mujeres" pattern="[0-9]+"
                        title="Solo se aceptan numeros" v-model="nalumnos_mujer_tercerome_al" >
                    </input>
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                     <input type="text" name="resultado12" class="form-control" placeholder="Total" v-model="resultado12" disabled></input>
                </div>
            </div>


            <div class="col-md-2">
                <div class="form-group">
                    {!! Form::label('','CUARTO MEDIO') !!}
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    <input type="text"  value="{{ ($alumnado->ncursos_cuartome_al == NULL) ? 0:$alumnado->ncursos_cuartome_al }}" name="ncursos_cuartome_al" class="form-control" placeholder="Nº Cursos" pattern="[0-9]+"
                        title="Solo se aceptan numeros" v-model="ncursos_cuartome_al" >
                    </input>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <input type="text"  value="{{ ($alumnado->nalumnos_hombre_cuartome_al == NULL) ? 0:$alumnado->nalumnos_hombre_cuartome_al }}" name="nalumnos_hombre_cuartome_al" class="form-control" placeholder="Nº Hombres" pattern="[0-9]+"
                        title="Solo se aceptan numeros" v-model="nalumnos_hombre_cuartome_al" >
                    </input>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <input type="text"  value="{{ ($alumnado->nalumnos_mujer_cuartome_al == NULL) ? 0:$alumnado->nalumnos_mujer_cuartome_al }}" name="nalumnos_mujer_cuartome_al" class="form-control" placeholder="Nº Mujeres" pattern="[0-9]+"
                        title="Solo se aceptan numeros" v-model="nalumnos_mujer_cuartome_al" >
                    </input>
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                     <input type="text" name="resultado13" class="form-control" placeholder="Total" v-model="resultado13" disabled></input>
                </div>
            </div>


            <div class="col-md-2">
                <div class="form-group">
                    {!! Form::label('','TOTALES') !!}
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    <input type="text" name="cursos_totales" class="form-control" placeholder="Totales" v-model="cursos_totales" disabled></input>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <input type="text" name="hombres_totales" class="form-control" placeholder="Totales" v-model="hombres_totales" disabled></input>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <input type="text" name="mujeres_totales" class="form-control" placeholder="Totales" v-model="mujeres_totales" disabled></input>
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                     <input type="text" name="resultado_totales" class="form-control" placeholder="Totales" v-model="resultado_totales" disabled></input>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="form-group">
                    {!! Form::label('','NUMERO DE ALUMNOS DE ENSEÑANZA MEDIA CON FORMACION... (SI APLICA)') !!}
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    {!! Form::label('','CIENTIFICO HUMANISTA') !!}
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <input type="text"  value="{{ ($alumnado->nalumnos_cientihumanista_al == NULL) ? 0:$alumnado->nalumnos_cientihumanista_al }}" name="nalumnos_cientihumanista_al" class="form-control" pattern="[0-9]+"
                        title="Solo se aceptan numeros" v-model="nalumnos_cientihumanista_al" >
                    </input>
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    {!! Form::label('','TECNICO PROFESIONAL') !!}
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <input type="text"  value="{{ ($alumnado->nalumnos_tecprofesional_al == NULL) ? 0:$alumnado->nalumnos_tecprofesional_al }}" name="nalumnos_tecprofesional_al" class="form-control" pattern="[0-9]+"
                        title="Solo se aceptan numeros" v-model="nalumnos_tecprofesional_al" >
                    </input>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label></label>
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    {!! Form::label('nalumnos_polivarente_al','POLIVARENTE') !!}
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <input type="text"  value="{{ ($alumnado->nalumnos_polivarente_al == NULL) ? 0:$alumnado->nalumnos_polivarente_al }}" name="nalumnos_polivarente_al" class="form-control" pattern="[0-9]+"
                        title="Solo se aceptan numeros" v-model="nalumnos_polivarente_al" >
                    </input>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label></label>
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    {!! Form::label('','TOTAL') !!}
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" name="total_otros" class="form-control" placeholder="Totales" v-model="total_otros" disabled></input>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('','NUMERO DE ALUMNAS EMBARAZADAS... (SI APLICA)') !!}
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    {!! Form::text('nalumnos_emabarazadas_al',($alumnado->nalumnos_emabarazadas_al == NULL) ? 0:$alumnado->nalumnos_emabarazadas_al ,['class' =>'form-control',
                    'title'=>'Solo se aceptan numeros'])!!}
                </div>
            </div>

            <div class="col-md-11">
                <div class="form-group">
                    {!! Form::label('','JARDINES INFANTILES') !!}
                </div>
            </div>

              <div class="col-md-2">
                <div class="form-group">
                    {!! Form::label('','NIVEL') !!}
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('','Nº DE ALUMNOS') !!}
                    <br/>
                    {!! Form::label('','HOMBRES  /') !!}
                    {!! Form::label('','  MUJERES') !!}
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    {!! Form::label('','TOTAL') !!}
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label></label>
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    {!! Form::label('','SALA CUNA') !!}
                </div>
            </div>

           <div class="col-md-2">
                <div class="form-group">
                    <input type="text"  value="{{ ($alumnado->nalumnos_hombre_salcuna_al == NULL) ? 0:$alumnado->nalumnos_hombre_salcuna_al }}" name="nalumnos_hombre_salcuna_al" class="form-control" placeholder="Nº Hombres" pattern="[0-9]+"
                        title="Solo se aceptan numeros" v-model="nalumnos_hombre_salcuna_al" >
                    </input>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <input type="text"  value="{{ ($alumnado->nalumnos_mujer_salcuna_al == NULL) ? 0:$alumnado->nalumnos_mujer_salcuna_al }}" name="nalumnos_mujer_salcuna_al" class="form-control" placeholder="Nº Mujeres" pattern="[0-9]+"
                        title="Solo se aceptan numeros" v-model="nalumnos_mujer_salcuna_al" >
                    </input>
                </div>
            </div>

            <div class="col-md-5">
                <div class="form-group">
                    <input type="text" name="resultado20" class="form-control" placeholder="Total" v-model="resultado20" disabled></input>
                </div>
            </div>

    
            <div class="col-md-2">
                <div class="form-group">
                    {!! Form::label('','NIVEL MEDIO') !!}
                </div>
            </div>

           <div class="col-md-2">
                <div class="form-group">
                    <input type="text"  value="{{ ($alumnado->nalumnos_hombre_nmedio_al == NULL) ? 0:$alumnado->nalumnos_hombre_nmedio_al }}" name="nalumnos_hombre_nmedio_al" class="form-control" placeholder="Nº Hombres" pattern="[0-9]+"
                        title="Solo se aceptan numeros" v-model="nalumnos_hombre_nmedio_al" >
                    </input>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <input type="text"  value="{{ ($alumnado->nalumnos_mujer_nmedio_al == NULL) ? 0:$alumnado->nalumnos_mujer_nmedio_al }}" name="nalumnos_mujer_nmedio_al" class="form-control" placeholder="Nº Mujeres" pattern="[0-9]+"
                        title="Solo se aceptan numeros" v-model="nalumnos_mujer_nmedio_al" >
                    </input>
                </div>
            </div>

            <div class="col-md-5">
                <div class="form-group">
                    <input type="text" name="resultado21" class="form-control" placeholder="Total" v-model="resultado21" disabled></input>
                </div>
            </div>
            
            <div class="col-md-2">
                <div class="form-group">
                    {!! Form::label('','NIVEL MEDIO MAYOR') !!}
                </div>
            </div>

           <div class="col-md-2">
                <div class="form-group">
                    <input type="text"  value="{{ ($alumnado->nalumnos_hombre_nmediom_al == NULL) ? 0:$alumnado->nalumnos_hombre_nmediom_al }}" name="nalumnos_hombre_nmediom_al" class="form-control" placeholder="Nº Hombres" pattern="[0-9]+"
                        title="Solo se aceptan numeros" v-model="nalumnos_hombre_nmediom_al" >
                    </input>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <input type="text"  value="{{ ($alumnado->nalumnos_mujer_nmediom_al == NULL) ? 0:$alumnado->nalumnos_mujer_nmediom_al }}" name="nalumnos_mujer_nmediom_al" class="form-control" placeholder="Nº Mujeres" pattern="[0-9]+"
                        title="Solo se aceptan numeros" v-model="nalumnos_mujer_nmediom_al" >
                    </input>
                </div>
            </div>

            <div class="col-md-5">
                <div class="form-group">
                    <input type="text" name="resultado22" class="form-control" placeholder="Total" v-model="resultado22" disabled></input>
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    {!! Form::label('','TRANSICION I') !!}
                </div>
            </div>

           <div class="col-md-2">
                <div class="form-group">
                    <input type="text"  value="{{ ($alumnado->nalumnos_hombre_trans1_al == NULL) ? 0:$alumnado->nalumnos_hombre_trans1_al }}" name="nalumnos_hombre_trans1_al" class="form-control" placeholder="Nº Hombres" pattern="[0-9]+"
                        title="Solo se aceptan numeros" v-model="nalumnos_hombre_trans1_al" >
                    </input>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <input type="text"  value="{{ ($alumnado->nalumnos_mujer_trans1_al == NULL) ? 0:$alumnado->nalumnos_mujer_trans1_al }}" name="nalumnos_mujer_trans1_al" class="form-control" placeholder="Nº Mujeres" pattern="[0-9]+"
                        title="Solo se aceptan numeros" v-model="nalumnos_mujer_trans1_al" >
                    </input>
                </div>
            </div>

            <div class="col-md-5">
                <div class="form-group">
                    <input type="text" name="resultado23" class="form-control" placeholder="Total" v-model="resultado23" disabled></input>
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    {!! Form::label('','TRANSICION II') !!}
                </div>
            </div>

           <div class="col-md-2">
                <div class="form-group">
                    <input type="text"  value="{{ ($alumnado->nalumnos_hombre_trans2_al == NULL) ? 0:$alumnado->nalumnos_hombre_trans2_al }}"  name="nalumnos_hombre_trans2_al" class="form-control" placeholder="Nº Hombres" pattern="[0-9]+"
                        title="Solo se aceptan numeros" v-model="nalumnos_hombre_trans2_al" >
                    </input>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <input type="text"  value="{{ ($alumnado->nalumnos_mujer_trans2_al == NULL) ? 0:$alumnado->nalumnos_mujer_trans2_al }}" name="nalumnos_mujer_trans2_al" class="form-control" placeholder="Nº Mujeres" pattern="[0-9]+"
                        title="Solo se aceptan numeros" v-model="nalumnos_mujer_trans2_al" >
                    </input>
                </div>
            </div>

            <div class="col-md-5">
                <div class="form-group">
                    <input type="text" name="resultado24" class="form-control" placeholder="Total" v-model="resultado24" disabled></input>
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    {!! Form::label('','TOTALES') !!}
                </div>
            </div>

           <div class="col-md-2">
                <div class="form-group">
                    <input type="text" name="total_hombres2" class="form-control" placeholder="Totales" v-model="total_hombres2" disabled></input>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <input type="text" name="total_hombres2" class="form-control" placeholder="Totales" v-model="total_mujeres2" disabled></input>
                </div>
            </div>

            <div class="col-md-5">
                <div class="form-group">
                    <input type="text" name="total_hombres2" class="form-control" placeholder="Totales" v-model="total_resultado2" disabled></input>

                </div>
            </div>

        </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-toggle="collapse" href="#collapse5">Cerrar</button>
                {!! Form::submit( 'Guardar', ['class'=>'btn btn-success','data-toggle'=>'#collapse5','id'=>'submitButtonId5']) !!}
            </div>

            </fieldset>
          {!! Form::close() !!}
    </div>
</div>


<script>
var vm = new Vue({
    el: '#main',
    data: {
        resultado1 : 0,
       
    },
    computed: {
        resultado1: function() {
            return parseInt(this.nalumnos_hombre_pre_al)+parseInt(this.nalumnos_mujer_pre_al) ;
        },
        resultado2: function() {
            return parseInt(this.nalumnos_hombre_primero_al)+parseInt(this.nalumnos_mujer_primero_al) ;
        },
        resultado3: function() {
            return parseInt(this.nalumnos_hombre_segundo_al)+parseInt(this.nalumnos_mujer_segundo_al) ;
        },
        resultado4: function() {
            return parseInt(this.nalumnos_hombre_tercero_al)+parseInt(this.nalumnos_mujer_tercero_al) ;
        },
        resultado5: function() {
            return parseInt(this.nalumnos_hombre_cuarto_al)+parseInt(this.nalumnos_mujer_cuarto_al) ;
        },
        resultado6: function() {
            return parseInt(this.nalumnos_hombre_quinto_al)+parseInt(this.nalumnos_mujer_quinto_al) ;
        },
        resultado7: function() {
            return parseInt(this.nalumnos_hombre_sexto_al)+parseInt(this.nalumnos_mujer_sexto_al) ;
        },
        resultado8: function() {
            return parseInt(this.nalumnos_hombre_septimo_al)+parseInt(this.nalumnos_mujer_septimo_al) ;
        },
        resultado9: function() {
            return parseInt(this.nalumnos_hombre_octavo_al)+parseInt(this.nalumnos_mujer_octavo_al) ;
        },
        resultado10: function() {
            return parseInt(this.nalumnos_hombre_primerome_al)+parseInt(this.nalumnos_mujer_primerome_al) ;
        },
        resultado11: function() {
            return parseInt(this.nalumnos_hombre_segundome_al)+parseInt(this.nalumnos_mujer_segundome_al) ;
        },
        resultado12: function() {
            return parseInt(this.nalumnos_hombre_tercerome_al)+parseInt(this.nalumnos_mujer_tercerome_al) ;
        },
        resultado13: function() {
            return parseInt(this.nalumnos_hombre_cuartome_al)+parseInt(this.nalumnos_mujer_cuartome_al) ;
        },
        cursos_totales: function() {
            return parseInt(this.ncursos_pre_al)+parseInt(this.ncursos_primero_al)+parseInt(this.ncursos_segundo_al)+parseInt(this.ncursos_tercero_al)+
            parseInt(this.ncursos_cuarto_al)+parseInt(this.ncursos_quinto_al)+parseInt(this.ncursos_sexto_al)+parseInt(this.ncursos_septimo_al)+
            parseInt(this.ncursos_octavo_al)+parseInt(this.ncursos_primerome_al)+parseInt(this.ncursos_segundome_al)+parseInt(this.ncursos_tercerome_al)+
            parseInt(this.ncursos_cuartome_al);
        },
        hombres_totales: function() {
            return parseInt(this.nalumnos_hombre_pre_al)+parseInt(this.nalumnos_hombre_primero_al)+parseInt(this.nalumnos_hombre_segundo_al)+parseInt(this.nalumnos_hombre_tercero_al)+
            parseInt(this.nalumnos_hombre_cuarto_al)+parseInt(this.nalumnos_hombre_quinto_al)+parseInt(this.nalumnos_hombre_sexto_al)+parseInt(this.nalumnos_hombre_septimo_al)+
            parseInt(this.nalumnos_hombre_octavo_al)+parseInt(this.nalumnos_hombre_primerome_al)+parseInt(this.nalumnos_hombre_segundome_al)+parseInt(this.nalumnos_hombre_tercerome_al)+
            parseInt(this.nalumnos_hombre_cuartome_al);
        },
        mujeres_totales: function() {
            return parseInt(this.nalumnos_mujer_pre_al)+parseInt(this.nalumnos_mujer_primero_al)+parseInt(this.nalumnos_mujer_segundo_al)+parseInt(this.nalumnos_mujer_tercero_al)+
            parseInt(this.nalumnos_mujer_cuarto_al)+parseInt(this.nalumnos_mujer_quinto_al)+parseInt(this.nalumnos_mujer_sexto_al)+parseInt(this.nalumnos_mujer_septimo_al)+
            parseInt(this.nalumnos_mujer_octavo_al)+parseInt(this.nalumnos_mujer_primerome_al)+parseInt(this.nalumnos_mujer_segundome_al)+parseInt(this.nalumnos_mujer_tercerome_al)+
            parseInt(this.nalumnos_mujer_cuartome_al);
        },
        resultado_totales: function() {
            return parseInt(this.resultado1)+parseInt(this.resultado2)+parseInt(this.resultado3)+
            parseInt(this.resultado4)+parseInt(this.resultado5)+parseInt(this.resultado6)+parseInt(this.resultado7)+
            parseInt(this.resultado8)+parseInt(this.resultado9)+parseInt(this.resultado10)+parseInt(this.resultado11)+
            parseInt(this.resultado12)+parseInt(this.resultado13);
        },
        total_otros: function() {
            return parseInt(this.nalumnos_cientihumanista_al)+parseInt(this.nalumnos_tecprofesional_al)+parseInt(this.nalumnos_polivarente_al);
        },
        resultado20: function() {
            return parseInt(this.nalumnos_hombre_salcuna_al)+parseInt(this.nalumnos_mujer_salcuna_al) ;
        },
        resultado21: function() {
            return parseInt(this.nalumnos_hombre_nmedio_al)+parseInt(this.nalumnos_mujer_nmedio_al) ;
        },
        resultado22: function() {
            return parseInt(this.nalumnos_hombre_nmediom_al)+parseInt(this.nalumnos_mujer_nmediom_al) ;
        },
        resultado23: function() {
            return parseInt(this.nalumnos_hombre_trans1_al)+parseInt(this.nalumnos_mujer_trans1_al) ;
        },
        resultado24: function() {
            return parseInt(this.nalumnos_hombre_trans2_al)+parseInt(this.nalumnos_mujer_trans2_al) ;
        },
        total_hombres2: function() {
            return parseInt(this.nalumnos_hombre_salcuna_al)+parseInt(this.nalumnos_hombre_nmedio_al)+parseInt(this.nalumnos_hombre_nmediom_al)+
            parseInt(this.nalumnos_hombre_trans1_al)+parseInt(this.nalumnos_hombre_trans2_al);
        },
        total_mujeres2: function() {
            return parseInt(this.nalumnos_mujer_salcuna_al)+parseInt(this.nalumnos_mujer_nmedio_al)+parseInt(this.nalumnos_mujer_nmediom_al)+
            parseInt(this.nalumnos_mujer_trans1_al)+parseInt(this.nalumnos_mujer_trans2_al);
        },
        total_resultado2: function() {
            return parseInt(this.resultado20)+parseInt(this.resultado21)+parseInt(this.resultado22)+
            parseInt(this.resultado23)+parseInt(this.resultado24);
        }
    }
});
</script>


<script>

var readonly = "{{ $readonly }}";

if(readonly==1)
{
    var form = document.getElementById("alumnado");
    form.disabled = true;
    document.getElementById("submitButtonId5").disabled = true;
}

</script>
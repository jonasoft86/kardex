
<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse7">7. Resultados Prueba Nacional</a>
        </h4>
    </div>
    <div id="collapse7" class="panel-collapse collapse">
        <div class="panel-body" >
          {!! Form::open(['route' => 'formulario.store', 'method' => 'POST','files'=>true]) !!}

        <fieldset id="resultados_nacional">
            {!! Form::hidden('id_form', $registroFormulario->id) !!}
           {!! Form::hidden('update', 'resultados_nacional') !!}
         <div id="appResultados">
            <div v-for="row in rows">

                <div class="col-md-12">
                    <div class="form-group">
                        <label></label>
                    </div>
                </div>

                <div class="well">
                    <div class="row">

                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Año</label>
                                    <input type="text" name="año_pnacional[]" v-model="row.year" />
                            </div>
                        </div>
                    </div>
                </div>

             <div class="well">

                <div class="col-md-12">
                    <div class="form-group">
                        <label></label>
                    </div>
                </div>        

                    <div class="col-md-12">
                        <div class="form-group">
                            <label>SINCE 4to. BASICO</label>
                        </div>
                    </div>

                    <div class="row">

                                <div class="col-md-2">
                                    <div class="form-group">
                                         <label>Nº Als.</label>
                                        <input type="text" name="nalumnos_4to_pnacional[]" v-model="row.nalumnos4to" />
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Lenguaje</label>
                                        <input type="number" min="1" max="700" step="1" style="width: 120px;" name="len_4to_pnacional[]" v-model="row.lenguaje4to" />
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Mat.</label>
                                        <input type="number" min="1" max="700" step="1" style="width: 120px;" name="mat_4to_pnacional[]" v-model="row.matematica4to" />
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Comp.</label>
                                        <input type="number" min="1" max="700" step="1" style="width: 120px;" name="comp_4to_pnacional[]" v-model="row.comp4to" />
                                    </div>
                                </div>
                    </div>
                </div>


                <div class="col-md-12">
                    <div class="form-group">
                        <label></label>
                    </div>
                </div>

                <div class="well">

                    <div class="col-md-12">
                        <div class="form-group">
                            <label>SINCE 8vo. BASICO</label>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Nº Als.</label>
                                    <input type="text" name="nalumnos_8vo_pnacional[]" v-model="row.nalumnos8vo" />
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="form-group">
                                    <label>Lenguaje</label>
                                <input type="number" min="1" max="700" step="1" style="width: 120px;" name="leng_8vo_pnacional[]" v-model="row.lenguaje8vo" />
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Mat.</label>
                                <input type="number" min="1" max="700" step="1" style="width: 120px;" name="mat_8vo_pnacional[]" v-model="row.matematica8vo" />
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="form-group">
                                <label>E.C Soc.</label>
                                <input type="number" min="1" max="700" step="1" style="width: 120px;" name="sociales_8vo_pnacional[]" v-model="row.ecsoc8vo" />
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="form-group">
                                <label>E.C. Nat.</label>
                                <input type="number" min="1" max="700" step="1" style="width: 120px;" name="cnaturales_8vo_pnacional[]" v-model="row.ecnat8vo" />
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label></label>
                    </div>
                </div>

                 <div class="well">

                    <div class="col-md-12">
                        <div class="form-group">
                            <label>SINCE 2do. MEDIO</label>
                        </div>
                    </div>

                     <div class="row">

                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Nº Als.</label>
                                    <input type="text" name="nalumnos_2dom_pnacional[]" v-model="row.nalumnos2dom" />
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="form-group">
                                    <label>Lenguaje</label>
                                <input type="number" min="1" max="700" step="1" style="width: 120px;" name="len_2dom_pnacional[]" v-model="row.lenguaje2dom" />
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Mat.</label>
                                <input type="number" min="1" max="700" step="1" style="width: 120px;" name="mat_2dom_pnacional[]" v-model="row.matematica2dom" />
                            </div>
                        </div>
                    </div>
                </div>

           
                    <div class="well">
                        <div class="col-md-2">
                            <div class="form-group">
                                <button class="btn btn-danger" @click="removeRow(row)">Eliminar</button></td>
                                
                            </div>
                        </div>
                        </br></br>
                    </div>


                    <div class="col-md-12">
                        <div class="form-group">
                            <label></label>
                        </div>
                    </div>
          
                </div>
                    <hr width="100%" size="12" align="center">  
                    <div>
                        <button type="button" class="btn btn-primary btn-add" @click="addRow">Agregar</button>
                    </div>

                </div>
                
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-toggle="collapse" href="#collapse7">Cerrar</button>
                {!! Form::submit( 'Guardar', ['class'=>'btn btn-success','data-toggle'=>'#collapse7','id'=>'submitButtonId7']) !!}
            </div>
            </fieldset>
          {!! Form::close() !!}
    </div>
</div>

<script type="text/javascript">

var app  = new Vue({
  el: "#appResultados",
  data: {
    rows: [
     @for ($i = 0; $i < count($resultadosNacional); $i++)
        {year: {{ $nacional[$i]->año_pnacional }}, nalumnos4to: {{ $nacional[$i]->nalumnos_4to_pnacional }}, lenguaje4to: {{ $nacional[$i]->len_4to_pnacional }}, 
        matematica4to: {{ $nacional[$i]->mat_4to_pnacional }}, comp4to: {{ $nacional[$i]->comp_4to_pnacional }}, nalumnos8vo: {{ $nacional[$i]->nalumnos_8vo_pnacional }}, 
        lenguaje8vo: {{ $nacional[$i]->leng_8vo_pnacional }}, matematica8vo: {{ $nacional[$i]->mat_8vo_pnacional }},ecsoc8vo: {{ $nacional[$i]->sociales_8vo_pnacional }},
        ecnat8vo: {{ $nacional[$i]->cnaturales_8vo_pnacional }},nalumnos2dom: {{ $nacional[$i]->nalumnos_2dom_pnacional }}, 
        lenguaje2dom: {{ $nacional[$i]->len_2dom_pnacional }}, matematica2dom: {{ $nacional[$i]->mat_2dom_pnacional }},},
      @endfor
    ]
  },
  methods:{
    addRow: function(){
      this.rows.push({name:"",job:""});
    },
    removeRow: function(row){
      //console.log(row);
      this.rows.$remove(row);
    }
  }
});
</script>

<script>

var readonly = "{{ $readonly }}";

if(readonly==1)
{
    var form = document.getElementById("resultados_nacional");
    form.disabled = true;
    document.getElementById("submitButtonId7").disabled = true;
}

</script>
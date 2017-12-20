
<div class="panel panel-default">
    <div class="panel-heading">
    <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse8">8. Resultados PSU</a>
    </h4>
    </div>

    <div id="collapse8" class="panel-collapse collapse">
   
    {!! Form::open(['route' => 'formulario.store', 'method' => 'POST','class'=>'entry form-inline']) !!}

 

    <div class="container" id="appResultadosPSU">
        <div class="row">
            <div class="col-md-24">
                <div class="panel panel-default">
                    <div class="panel-body">
                    
                    <fieldset id="resultados_psu">

                    {!! Form::hidden('id_form', $registroFormulario->id) !!}
                     {!! Form::hidden('update', 'resultados_psu') !!}
                    <div v-for="row in rows">
                        <div class="col-md-12">
                            <div class="form-group">
                                {!! Form::label('','RESULTADOS PSU') !!}
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="form-group">
                                {!! Form::label('','Año') !!}
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="form-group">
                                {!! Form::label('','Leng. y Com.') !!}
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="form-group">
                                {!! Form::label('','Matematicas') !!}
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="form-group">
                                {!! Form::label('','Historia y Cs. Nat') !!}
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('','Ciencias') !!}
                            </div>
                        </div>

                        

                        <div class="field_wrapper">
                            <div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input type="number" min="2004" max="2100" step="1" style="width: 100px;" name="año_psu[]" v-model="row.yearPsu"/>
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">   
                                        <input type="number" min="150" max="850" step="1" style="width: 100px;" name="psu_lenguaje[]" v-model="row.psuLenguaje"/>
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">   
                                        <input type="number" min="150" max="850" step="1" style="width: 100px;" name="psu_matematica[]" v-model="row.psuMatematica"/>
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">   
                                        <input type="number" min="150" max="850" step="1" style="width: 100px;" name="psu_historia[]" v-model="row.psuHistoria" />
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">   
                                        <input type="number" min="150" max="850" step="1" style="width: 100px;" name="psu_ciencia[]" v-model="row.psuCiencia" />

                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <button class="btn btn-danger" @click="removeRow(row)">Eliminar</button></td>
                                    </div>
                                </div>

                            </div>
                        </div>
                     
                        </div> 
                        <div>
                            <button type="button" class="btn btn-primary btn-add" @click="addRow">Agregar</button>
                        </div>

                        </fieldset>
                    </div>
            <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-toggle="collapse" href="#collapse8">Cerrar</button>
                    {!! Form::submit( 'Guardar', ['class'=>'btn btn-success','data-toggle'=>'#collapse8','id'=>'submitButtonId8']) !!}
            </div>
           
            {!! Form::close() !!}
        </div> 
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">

var app  = new Vue({
  el: "#appResultadosPSU",
  data: {
    rows: [

      @for ($i = 0; $i < count($resultadosPsu); $i++)
        {yearPsu: {{ $psu[$i]->año_psu }}, psuLenguaje: {{ $psu[$i]->psu_lenguaje }}, 
        psuMatematica: {{ $psu[$i]->psu_matematica }}, psuHistoria: {{ $psu[$i]->psu_historia }}, psuCiencia: {{ $psu[$i]->psu_ciencia }}},
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
    var form = document.getElementById("resultados_psu");
    form.disabled = true;
    document.getElementById("submitButtonId8").disabled = true;
}

</script>
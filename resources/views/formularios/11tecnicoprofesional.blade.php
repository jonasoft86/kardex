

<div class="panel panel-default">

    <div class="panel-heading">

        <h4 class="panel-title">

        <a data-toggle="collapse" data-parent="#accordion" href="#collapse11">11. Especialidades Tecnico Profesional</a>

        </h4>

    </div>

    <div id="collapse11" class="panel-collapse collapse">

        <div class="panel-body">

          {!! Form::open(['route' => 'formulario.store', 'method' => 'POST','files'=>true]) !!}



        <fieldset id="tecnico_profesional">

        {!! Form::hidden('id_form', $registroFormulario->id) !!}

         {!! Form::hidden('update', 'tecnico_profesional') !!}

          <div class="well" id="app">

          <table class="table">

            <thead>

              <tr>

                <td><strong>Nombre Especialidad</strong></td>

                <td><strong>Acreditada</strong></td>

                <td><strong>Vigencia</strong></td>

                <td><strong>Nº Titulados Ult. Año</strong></td>

                <td><strong>Nº Empresas Practica Prof.</strong></td>

                <td><strong>Consejo Asesor Empresarial?</strong></td>

                <td><strong>Observacion</strong></td>

                <td></td>

              </tr>

            </thead>

            <tbody>

              <tr v-for="row in rows">

                <td><input name="nombre_espTec[]" type="text"  maxlength="70" v-model="row.nombre_espTec"></td>

                <td>
                    <select name="acreditada_espTec[]" class="form-control" v-model="row.acreditada">
                      <option value="Si">Si</option>
                      <option value="No">No</option>
                    </select>
                </td>

                <td>

                  <input name="vigencia_inicio_espTec[]" type="text" placeholder="Año inicio" v-model="row.vigencia1">

                  <input name="vigencia_fin_espTec[]" type="text" placeholder="Año fin" v-model="row.vigencia2" >

                </td>

                <td><input name="ntitulados_espTec[]" type="text" v-model="row.ntitulados" ></td>

                <td><input name="nempresas_espTec[]" type="text" v-model="row.nempresas"></td>

                <td>
                    <select name="consejoem_espTec[]" class="form-control" v-model="row.consejo">
                      <option value="Si">Si</option>
                      <option value="No">No</option>
                    </select>
                </td>

                <td><textarea name="observacion_espTec[]" class="form-control" rows="3"  cols="100"  v-model="row.observacion" maxlength="500"></textarea></td>



                <td><button class="btn btn-danger" @click="removeRow(row)">Eliminar</button></td>

              </tr>

            </tbody>

            

          </table>

          <div>

          

            <div>

                <button type="button" class="btn btn-primary btn-add" @click="addRow">Agregar</button>

            </div>

          </div>

         

        </div>

         </fieldset>

            <div class="modal-footer">

                <button type="button" class="btn btn-default" data-toggle="collapse" href="#collapse11">Cerrar</button>

                {!! Form::submit( 'Guardar', ['class'=>'btn btn-success','data-toggle'=>'#collapse11','id'=>'submitButtonId11']) !!}

            </div>

           

          {!! Form::close() !!}

    </div>

</div>



<script type="text/javascript">

var app  = new Vue({

  el: "#app",

  data: {

    rows: [



      @for ($i = 0; $i < count($resultadosTecProfesional); $i++)

        {nombre_espTec: '{{ $tecnico[$i]->nombre_espTec }}'  , acreditada: '{{ $tecnico[$i]->acreditada_espTec }}', 

        vigencia1: {{ $tecnico[$i]->vigencia_inicio_espTec }}, vigencia2: {{ $tecnico[$i]->vigencia_fin_espTec }} ,

        ntitulados: {{ $tecnico[$i]->ntitulados_espTec }} , nempresas: {{ $tecnico[$i]->nempresas_espTec }} ,

        consejo: '{{ $tecnico[$i]->consejoem_espTec }}' ,observacion: '{{ $tecnico[$i]->observacion_espTec }}' },

      @endfor



    ]

  },

  methods:{

    addRow: function(){

      this.rows.push({name: "", checked: false, vigencia1: null , vigencia2: null , ntitulados: null, nempresas: null});

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

    var form = document.getElementById("tecnico_profesional");

    form.disabled = true;

    document.getElementById("submitButtonId11").disabled = true;

}



</script>
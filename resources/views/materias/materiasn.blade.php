@extends('layout.master')
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
@section('titulo','Materias')
@section('contenido')
<div id="materias" class="container">
  <!-- titulo --> 
     
         
        <h1 class="alert alert-info"><center>Modificar Materias</center></h1>
      

    <!-- boton agregar -->
      <button class="btn btn-warning" v-on:click="showModal()">Agregar Materias</button>
      <br>
      <!-- formulario del buscador -->
      <!--br>
        <input type="text" placeholder="ESCRIBA EL NOMBRE DEl LIBRO" class="form-control" v-model="buscar">
      <br-->

<!--Aqui realizamos las busquedas-->

      <div class="row" >
        <div class="col-x1-12">
          <form action="{{route('materiasn.index')}}" method="get">
            <div class="form-row">
              <div class="col-sm-4 my-1">
                <input type="text" class="form-control" name="texto" value="{{$materia}}">
              </div>
              <div class="col-auto my-1">
                <input type="submit" class="btn btn-primary" values="Buscar">
              </div>
            </div>
          </form>
        </div> 
       
      </div>
<!--Aqui termina donde realizamos las busquedas-->


      <div class="row" v-if="editando==true" >
        <div class="col-6">
          <form>
            <div class="form-row">
              <!--div class="col-5">
                <input type="text" placeholder="id materia" class="form-control" v-model="id_materia" >
              </div-->
              <div class="col-5">
                <input type="text" placeholder="nombre de materia" class="form-control" v-model="nom_materia" >
              </div>
              <br>
              <div class="col-5">
                <input type="text" placeholder="estado del libro" class="form-control" v-model="activo" >
              </div>
              <br>

            </div>
            <br>
          </form> 
          <br>
          <br>
        </div>
        <div class="row">
              <div class="col">
                <button class="btn btn-success" v-on:click="updatematerias(id_materia)">GUARDAR</button>
              </div>
              <div class="col">
                <button class="btn btn-warning" v-on:click="editando=false">CANCELAR</button>
              </div>

        </div>
      </div>
      <div class=" card-body table-responsive  col-sm-12" style="height: 300px;">
          <table class="table table-hover table-striped text-center  text-nowrap">
            <thead>
              <th>id materia</th>
              <th>Nombre de materia</th>
              <th>Activo</th>
              

            </thead>
           
            <tbody>
            <tr v-for="mat in materia">
                <td>@{{mat.id_materia}}</td>
                <td>@{{mat.nom_materia}}</td>
                <td>@{{mat.activo}}</td>
                <td>
                  <span class="btn btn-outline-primary" v-on:click="showmateria(mat.id_materia)"><i class="fa fa-edit"></i></span>
                  <span class="btn btn-outline-danger"v-on:click="eliminarmateria(mat.id_materia)"><i class="fas fa-trash"></i></span>
                </td>
              </tr>
            </tbody>
          </table>
      </div>
      <!-- modal -->
      <div class="modal" tabindex="-1" role="dialog" id="add_materia">
       <div class="modal-dialog" role="document">
      <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Ingrese Datos del libro</h4>
          <button type="button" class="close" data-dismiss="modal" aria.label="close"><span
                                        aria-hidden="true">x</span></button>
        </div>
      <div class="modal-body">
      <div class="row">
        <input type="text" name="" placeholder="id_materia" class="form-control" v-model="id_materia" >
        <input type="text" name="" placeholder="nom_materia" class="form-control" v-model="nom_materia">
        <input type="text" name="" placeholder="activo" class="form-control" v-model="activo">
      </div>


      </div>
      <div class="modal-footer">

          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" v-on:click="agregarMateria()">Guardar</button>
      </div>
      </div><!-- /.modal-content -->
       </div><!-- /.modal-dialog -->
    </div>
</div>
@endsection
@push('scripts')

<script src="js/vue-resource.js"></script>
<script src="js/materias/materias.js"></script>

@endpush
<input type="hidden" name="route" value="{{url('/')}}">
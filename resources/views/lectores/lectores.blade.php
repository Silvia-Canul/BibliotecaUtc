@extends('layout.master')
@section('contenido')

<div class="container">
  <div class="row">
    <div class="col-sm-12 text-center">
      <br>
      <h2>Lectores</h2>

</div>  
  </div>
<br>
  <div id="lectores">
<div class="col-lg-12 ">
  <div class="card border-dark "  >
    <div class="card-body ">
      <h5 class="card-title ">Lista de lectores</h5>


    <span class="btn btn-outline-primary float-right " data-toggle="modal" v-on:click="showModal()"><i class="fa fa-plus"></i></span>
    <br><br>

    <div class=" card-body table-responsive  col-sm-12" style="height: 300px;">
      <table class="table table-hover table-striped text-center  text-nowrap">
        <thead class="thead-dark">
             <th scope="col">#</th>
              <th scope="col">Nombre</th>
        <th scope="col">Apellido paterno</th>
        <th scope="col">Apellido materno</th>
        <th scope="col">Correo</th>
        <th scope="col">Grupo</th>
        <th scope="col">Cuatrimestre</th>
        <th scope="col">Activo</th>
        <th scope="col">Tipo de lector</th>
        
        <th scope="col">Opciones</th> 

        </thead>
        <tbody>
          <tr v-for="(lectores,index) in lectores">
              <td>@{{index+1}}</td>
          
          <td>@{{lectores.nombre}}</td>
          <td>@{{lectores.apellido_p}}</td>
          <td>@{{lectores.apellido_m}}</td>
          <td>@{{lectores.correo}}</td>
          <td>@{{lectores.grupo}}</td>
          <td>@{{lectores.cuatrimestre}}</td>
          <td>@{{lectores.activo}}</td>
          <td>@{{lectores.tipos.tipo}}</td>
          

              <td>
                <span class="btn btn-outline-primary" @click="editarL(lectores.id_lector)"><i class="fa fa-edit"></i></span>

                <span class="btn btn-outline-danger" @click="eliminarL(lectores.id_lector)"><i class="fas fa-trash"></i></span>
              </td>
          </tr>
        </tbody>
      </table>
 <!-- Button trigger modal -->
    

<!-- Modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="add_lectores">
  <div class="modal-dialog modal-lg " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" v-if="editar">Editando</h4>
        <h4 class="modal-title" v-if="!editar">Guardar Nuevo</h4>
       
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" v-on:click="Salir()">
          <span aria-hidden="true">&times;</span>
        </button>

      </div>
      <!-- Elementos del body -->
 
 <div class="modal-body">
              <div class="row">
                <div class="col-sm-4">
                  <label>Nombre</label>
                  <input type="text" name="" placeholder="Ingrese su nombre" class="form-control" v-model="nombre">
                  <label>Apellido Paterno</label>
                  <input type="text" name="" placeholder="Ingrese su apellido" class="form-control" v-model="apellido_p">
                  <label>Apellido Materno</label>
                  <input type="text" name="" placeholder="Ingrese su apellido" class="form-control" v-model="apellido_m">
                  <label>Correo</label>
                 <input type="text" name="" placeholder="Ingrese su correo" class="form-control" v-model="correo">
                 <label>Grupo</label>
                 <input type="text" name="" placeholder="Ingrese su grupo" class="form-control" v-model="grupo">
                
                  
                  <!-- <select class="form-control" v-model="id_tipo">
                    <option disabled value="">Elija un rol</option>
                    <option v-for="rol in roles" v-bind:value="rol.id_tipo">@{{ rol.tipo_usuario }}</option>
                  </select> -->
                </div>
              <div class="col-sm-2">
                <div class="form-group">

              </div>
                
              </div>

                <div class="col-sm-4">
                  <div class="form-group">
                    
                     
                 <label>Cuatrimestre</label>
                 <input type="text" name="" placeholder="Ingrese cuatrimestre" class="form-control" v-model="cuatrimestre">
                 <center><label>Activar</label></center>
                  <input type="checkbox" placeholder="activo" v-model="activo" class="form-control">
                  <br>
                 

                 <label>Tipo de usuario</label>
         <select class="form-control" v-model="id_tipo">
            <option disabled label="Seleccione un tipo de usuario"></option>
            <option v-for="lectores in tipos" v-bind:value="lectores.id_tipo">@{{lectores.tipo}}</option>
        </select>
                


                  </div>  
                </div>
              </div>  
              
              <br>
          </div>



      <div class="modal-footer">
            <button type="submit" class="btn btn-primary" v-on:click="actualizarL" v-if="editar">Actualizar</button>

            <button type="submit" class="btn btn-outline-success" v-on:click="agregarL" v-if="!editar">Guardar</button>
          
          <button type="submit" class="btn btn-warning" @click="Salir()">Cancelar</button>
      </div>
     
    </div>
  </div>
</div>
</div>
      </div>
      </div>


      
    </div>
  </div>
</div>



@endsection

@push('scripts')
<script src="js/lector/lector.js"></script>
  
  <!-- <script src="{{ ('js/contenedor/contenedor.js') }}"></script> -->

@endpush
<input type="hidden" name="route" value="{{url('/')}}">
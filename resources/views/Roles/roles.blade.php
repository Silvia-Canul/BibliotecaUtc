@extends('layout.master')
@section('contenido')

<div class="container">
  <div class="row">
    <div class="col-sm-12 text-center">
      <br>
      <h2>Roles</h2>
      

        </div>  
  </div>
       <br>
  <div id="roles">
    <div class="col-lg-12 ">
      <div class="card border-dark "  >
        <div class="card-body ">
          <h5 class="card-title ">Lista de roles</h5>


        <span class="btn btn-outline-primary float-right " data-toggle="modal" v-on:click="showModal()"><i class="fa fa-plus"></i></span>
        <br><br>

          <div class=" card-body table-responsive  col-sm-12" style="height: 300px;">
      <table class="table table-hover table-striped text-center  text-nowrap">
        <thead class="thead-dark">
         
         <th scope="col">#</th>
         <th scope="col">Denominación</th>
         <th scope="col">Permisos</th>
         <th scope="col">Activo</th>
         <th scope="col">Opciones</th> 

        </thead>
        <tbody>
          <tr v-for="(roles,index) in roles">

           <td>@{{index+1}}</td>
           <td>@{{roles.denominacion}}</td>
           <td>@{{roles.permisos}}</td>
           <td>@{{roles.activo}}</td>
          

              <td>
                <span class="btn btn-outline-primary" @click="editarR(roles.id_rol)"><i class="fa fa-edit"></i></span>

                <span class="btn btn-outline-danger" @click="eliminarR(roles.id_rol)"><i class="fas fa-trash"></i></span>
              </td>
          </tr>
        </tbody>
      </table>
 <!-- Button trigger modal -->
    

<!-- Modal -->
  <div class="modal fade" tabindex="-1" role="dialog" id="add_roles">
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
                    <label>Denominación</label>
                    <input type="text" name="" placeholder="Denominacion" class="form-control" v-model="denominacion">
                    <label>Permisos</label>
                    <input type="text" name="" placeholder="Permisos" class="form-control" v-model="permisos">
                    <center><label>Activar</label></center>
                    <input type="checkbox" placeholder="activo" v-model="activo" class="form-control">

                </div>


              </div>  
              
              <br>
          </div>



              <div class="modal-footer">
                  <button type="submit" class="btn btn-primary" v-on:click="actualizarR" v-if="editar">Actualizar</button>

                  <button type="submit" class="btn btn-outline-success" v-on:click="agregarR" v-if="!editar">Guardar</button>
          
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
<script src="js/rol/rol.js"></script>
  
  <!-- <script src="{{ ('js/contenedor/contenedor.js') }}"></script> -->

@endpush
<input type="hidden" name="route" value="{{url('/')}}">
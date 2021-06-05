@extends('layout.master')
@section('contenido')

<div class="container">
  <div class="row">
    <div class="col-sm-12 text-center">
      <br>
      <h2>Contenedores</h2>
    </div>  
  </div>
<br>
  <div id="contenedores">
<div class="col-lg-12 ">
  <div class="card border-dark "  >
    <div class="card-body ">
      <h5 class="card-title ">Lista de contenedores</h5>


    <span class="btn btn-info float-right " data-toggle="modal" v-on:click="showModal()"><i class="fa fa-plus"></i></span>
    <br><br>

    <div class=" card-body table-responsive  col-sm-12" style="height: 300px;">
      <table class="table table-hover table-striped text-center  text-nowrap">
        <thead class="thead-dark">
             <th scope="col">#</th>
              <th scope="col">Nombre</th>
              <th scope="col">Descripción</th>
              
              <th scope="col">Opciones</th>         
        </thead>
        <tbody>
          <tr v-for="(contenedores,index) in contenedores">
              <td>@{{index+1}}</td>
              <td>@{{contenedores.nom_contenedor}}</td>
              <td>@{{contenedores.descripcion}}</td>

              <td>
                <span class="btn btn-sm btn-primary" @click="editarCon(contenedores.id_contenedor)"><i class="fa fa-edit"></i></span>

                <span class="btn btn-sm btn-danger" @click="eliminarCon(contenedores.id_contenedor)"><i class="fas fa-trash"></i></span>
              </td>
          </tr>
        </tbody>
      </table>
 <!-- Button trigger modal -->
    

<!-- Modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="add_contenedores">
  <div class="modal-dialog modal-dialog-centered" role="document">
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
        <label>Nombre del contenedor</label>
        <input type="text" placeholder="Nombre" v-model="nom_contenedor" class="form-control">
        <br>
        <label>Agregar una descripción</label>
        <input type="text" placeholder="Descripción" v-model="descripcion" class="form-control">
        <br>
      </div>
      <!-- Fin del body -->

      <div class="modal-footer">
            <button type="submit" class="btn btn-primary" v-on:click="actualizarCon()" v-if="editar">Actualizar</button>

            <button type="submit" class="btn btn-primary" v-on:click="agregarCon()" v-if="!editar">Guardar</button>
          
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
<script src="js/contenedor/contenedor.js"></script>
  
  <!-- <script src="{{ ('js/contenedor/contenedor.js') }}"></script> -->

@endpush
<input type="hidden" name="route" value="{{url('/')}}">
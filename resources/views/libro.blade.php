 @extends('layout.master')
@section('contenido')

<div class="container">
  <div class="row">
    <div class="col-sm-12 text-center">
      <br>
      <h2>Libros</h2>
      

        </div>  
  </div>
       <br>
  <div id="libros">
    <div class="col-lg-12 ">
      <div class="card border-dark "  >
        <div class="card-body ">
          <h5 class="card-title ">Lista de libros</h5>


          <button type="button" class="btn btn-outline-primary float-right" data-toggle="modal" data-target=".bd-example-modal-xl"v-on:click="showModal()"><i class="fa fa-plus"></i></button>
        
        <br><br>
     

          <div class=" card-body table-responsive  col-sm-12" style="height: 300px;">
      <table class="table table-hover table-striped text-center  text-nowrap">
        <thead class="thead-dark">
         
        <th scope="col">#</th> 
        <th scope="col">ISBN</th>
        <th scope="col">Título</th>
         <th scope="col">Autor</th>
         <th scope="col">Editorial</th>
         <th scope="col">Edición</th>
         <th scope="col">Carrera</th>
         <th scope="col">Páginas</th>
         <th scope="col">Dewey</th>
         <th scope="col">Reseña</th>
         <th scope="col">Ubicación</th>
         <th scope="col">Estado</th>
         <th scope="col">Foto</th>
         <th scope="col">Creación</th>
         <th scope="col">Actualizar</th>
         <th scope="col">Activo</th>
         
         <th scope="col">Opciones</th> 

        </thead>
        <tbody>
          <tr v-for="(libros,index) in libros">

          <td>@{{index+1}}</td>
          <td>@{{libros.ISBN}}</td>
          <td>@{{libros.titulo}}</td>
           <td>@{{libros.id_autor}}</td>
           <td>@{{libros.id_editorial}}</td>
           <td>@{{libros.edicion}}</td>
           <td>@{{libros.id_carrera}}</td>
           <td>@{{libros.paginas}}</td>
           <td>@{{libros.id_clasifidewey}}</td>
           <td>@{{libros.resenia}}</td>
           <td>@{{libros.ubicacion}}</td>
           <td>@{{libros.describe_estado}}</td>
           <td>@{{libros.foto}}</td>
           <td>@{{libros.created_at}}</td>
           <td>@{{libros.updated_at}}</td>
           <td>@{{libros.activo}}</td>
           
              <td>
                <span class="btn btn-outline-primary" @click="editarL(libros.id_libro)"><i class="fa fa-edit"></i></span>

                <span class="btn btn-outline-danger" @click="eliminarL(libros.id_libro)"><i class="fas fa-trash"></i></span>
              </td>
          </tr>
        </tbody>
      </table>
 <!-- Button trigger modal -->
    

<!-- Modal -->
  <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true" id="add_lib">
  <div class="modal-dialog modal-xl modal-dialog-scrollable " role="document">
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

                    <label>ISBN</label>
                    <input type="text" name="" placeholder="Agregar ISBN" class="form-control" v-model="ISBN">

                    <label>Título</label>
                    <input type="text" name="" placeholder="Agregue un título" class="form-control" v-model="titulo">

                    <label>Autor</label>
                    <input type="text" name="" placeholder="Agregue un autor" class="form-control" v-model="id_autor">

                    <label>Editorial</label>
                    <input type="text" name="" placeholder="Agregue una editorial" class="form-control" v-model="id_editorial">

                    <label>Edición</label>
                    <input type="text" name="" placeholder="Agregar edición" class="form-control" v-model="edicion">

                    

                    <label>Carrera</label>
                    <input type="text" name="" placeholder="Escoja una carrera" class="form-control" v-model="id_carrera">

                    
                  
                  </div>

                <div class="col-sm-4">
                <div class="form-group">
                  <label>Páginas</label>
                    <input type="text" name="" placeholder="Agregar páginas del libro" class="form-control" v-model="paginas">

                    <label>Dewey</label>
                    <input type="text" name="" placeholder="Agregar Dewey" class="form-control" v-model="id_clasifidewey">

                    <label>Reseña</label>
                    <textarea type="text" name="" placeholder="Descripción del libro" class="form-control" v-model="resenia" rows="3"></textarea>

                    <label>Ubicación</label>
                    <input type="text" name="" placeholder="Ubicación del libro" class="form-control" v-model="ubicacion">

                    <label>Estado del libro</label>
                   <textarea type="text" name="" placeholder="Descripción del estado del libro" class="form-control" v-model="describe_estado" rows="3"></textarea>

                    <label>Foto</label>
                    <input type="file" placeholder="Agregar foto" class="form-control" v-model="foto">

                    </div> 
                  </div>

              <div class="col-sm-4">
                  <div class="form-group">
                    
              <label>Creación</label>
               <input type="date" name="" placeholder="Fecha de creacion" class="form-control" v-model="created_at" rows="3"></input>

                    <label>Actualización</label>
                    <input type="date" name="" placeholder="Actualización" class="form-control" v-model="updated_at">

                    <center><label>Activar</label></center>
                    <input type="checkbox" placeholder="activo" v-model="activo" class="form-control">



                   

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
<script src="js/libro.js"></script>
  
  <!-- <script src="{{ ('js/contenedor/contenedor.js') }}"></script> -->

@endpush
<input type="hidden" name="route" value="{{url('/')}}"> 
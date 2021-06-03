@extends('layout.master')
@section('titulo','Libros')
@section('contenido')
<div id="libros" class="container">
  <!-- titulo -->
      <div >
        <h1 class="alert alert-info"><center>Control de biblioteca</center></h1>
      </div>
    <!-- boton agregar -->
      <button class="btn btn-warning" v-on:click="showModal()">Agregar libro</button>
      <br>
      <!-- formulario del buscador -->
      <br>
        <input type="text" placeholder="ESCRIBA EL NOMBRE DEl LIBRO" class="form-control" v-model="buscar">
      <br>
      <div class="row" v-if="editando==true" >
        <div class="col-6">
          <form>
            <div class="form-row">
              <div class="col-5">
                <input type="text" placeholder="id libro" class="form-control" v-model="id_libro" >
              </div>
              <div class="col-5">
                <input type="text" placeholder="codigo del libro" class="form-control" v-model="codigo" >
              </div>
              <br>
                <div class="col-5">
                  <input type="text" placeholder="ISBN" class="form-control" v-model="ISBN" >
                </div>
              <br>
                <div class="col-5">
                  <input type="text" placeholder="Titulo del libro" class="form-control" v-model="titulo" >
                </div>
              <br>
              <div class="col-5">
                <input type="text" placeholder="autor del libro" class="form-control" v-model="autor" >
              </div>
              <br>
              <div class="col-5">
                <input type="text" placeholder="edicion del libro" class="form-control" v-model="edicion" >
              </div>
              <br>
              <div class="col-5">
                <input type="text" placeholder="editorial del libro" class="form-control" v-model="editorial" >
              </div>
              <div class="col-5">
                <input type="text" placeholder="numero de paginas del libro" class="form-control" v-model="paginas" >
              </div>
              <br>
              <div class="col-5">
                <input type="text" placeholder="idioma del libro" class="form-control" v-model="idioma" >
              </div>
              <br>
              <div class="col-5">
                <input type="text" placeholder="descripcion del libro" class="form-control" v-model="descripcion" >
              </div>
              <br>
              <div class="col-5">
                <input type="text" placeholder="ubicacion del libro" class="form-control" v-model="ubicacion" >
              </div>
              <br>
              <div class="col-5">
                <input type="text" placeholder="foto del libro" class="form-control" v-model="foto" >
              </div>
              <br>
              <div class="col-5">
                <input type="text" placeholder="estado del libro" class="form-control" v-model="activo" >
              </div>
              <br>

              <div class="col-5">
                <input type="text" placeholder="created del libro" class="form-control" v-model="created_at" >
              </div>
              <br>
              <div class="col-5">
                <input type="text" placeholder="update del libro" class="form-control" v-model="updated_at" >
              </div>
              <br>
              <!-- <div class="col-5">
                <input type="text" placeholder="id de la carrera del usuario" class="form-control" v-model="id_carrera" >
              </div>
              <br>
              <div class="col-5">
                <input type="text" placeholder="id materia del usuario" class="form-control" v-model="id_materia" >
              </div> -->
            </div>
            <br>
          </form> 
          <br>
          <br>
        </div>
        <div class="row">
              <div class="col">
                <button class="btn btn-success" v-on:click="updateLibros(id_libro)">GUARDAR</button>
              </div>
              <div class="col">
                <button class="btn btn-warning" v-on:click="editando=false">CANCELAR</button>
              </div>

        </div>
      </div>
      <div class=" card-body table-responsive  col-sm-12" style="height: 300px;">
          <table class="table table-hover table-striped text-center  text-nowrap">
            <thead>
              <th>id libro</th>
              <th>titulo</th>
              <th>codigo</th>
              <th>ISBN</th>
              <th>autor</th>
              <th>edicion</th>
              <th>editorial</th>
              <th>paginas</th>
              <th>idioma</th>
              <th>ejemplares</th>
              <th>descripcion</th>
              <th>ubicacion</th>
              <th>foto</th>
              <th>activo</th>
              <th>created_at</th>
              <th>update_at</th>
              <!-- <th>id_carrera</th>
              <th>id_materia</th> -->
              

            </thead>
           
            <tbody>
              <tr v-for="lib in filtroLibros">
                <td>@{{lib.id_libro}}</td>
                <td>@{{lib.titulo}}</td>
                <td>@{{lib.codigo}}</td>
                <td>@{{lib.ISBN}}</td>
                <td>@{{lib.autor}}</td>
                <td>@{{lib.edicion}}</td>
                <td>@{{lib.editorial}}</td>
                <td>@{{lib.paginas}}</td>
                <td>@{{lib.idioma}}</td>
                <td>@{{lib.ejemplares}}</td>
                <td>@{{lib.descripcion}}</td>
                <td>@{{lib.ubicacion}}</td>
                <td>@{{lib.foto}}</td>
                <td>@{{lib.activo}}</td>
                <td>@{{lib.created_at}}</td>
                <td>@{{lib.update_at}}</td>
                <!-- <td>@{{lib.id_carrera}}</td>
                <td>@{{lib.id_materia}}</td> -->
                <td>
                  <span class="btn btn-outline-primary" v-on:click="showLibros(lib.id_libro)"><i class="fa fa-edit"></i></span>
                  <span class="btn btn-outline-danger"v-on:click="eliminarLibro(lib.id_libro)"><i class="fas fa-trash"></i></span>
                </td>
              </tr>
            </tbody>
          </table>
      </div>
      <!-- modal -->
      <div class="modal" tabindex="-1" role="dialog" id="add_libros">
       <div class="modal-dialog" role="document">
      <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Ingrese Datos del libro</h4>
          <button type="button" class="close" data-dismiss="modal" aria.label="close"><span
                                        aria-hidden="true">x</span></button>
        </div>
      <div class="modal-body">
      <div class="row">
        <input type="text" name="" placeholder="id_libro" class="form-control" v-model="id_libro" >
        <input type="text" name="" placeholder="codigo" class="form-control" v-model="codigo">
        <input type="text" name="" placeholder="ISBN" class="form-control" v-model="ISBN">
        <input type="text" name="" placeholder="titulo" class="form-control" v-model="titulo">
        <input type="text" name="" placeholder="autor" class="form-control" v-model="autor">
        <input type="text" name="" placeholder="edicion" class="form-control" v-model="edicion">
        <input type="text" name="" placeholder="editorial" class="form-control" v-model="editorial">
        <input type="text" name="" placeholder="paginas" class="form-control" v-model="paginas">
        <input type="text" name="" placeholder="idioma" class="form-control" v-model="idioma">
        <input type="text" name="" placeholder="ejemplares" class="form-control" v-model="ejemplares">
        <input type="text" name="" placeholder="descripcion" class="form-control" v-model="descripcion">
        <input type="text" name="" placeholder="ubicacion" class="form-control" v-model="ubicacion">
        <input type="text" name="" placeholder="foto" class="form-control" v-model="foto">
        <input type="text" name="" placeholder="activo" class="form-control" v-model="activo">
        <input type="date" name="" placeholder="created_at" class="form-control" v-model="created_at">
        <input type="date" name="" placeholder="updated_at" class="form-control" v-model="updated_at">
        <!-- <input type="text" name="" placeholder="id_carrera" class="form-control" v-model="id_carrera">
        <input type="text" name="" placeholder="id_materia" class="form-control" v-model="id_materia"> -->
      </div>


      </div>
      <div class="modal-footer">

          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" v-on:click="agregarLibro()">Guardar</button>
      </div>
      </div><!-- /.modal-content -->
       </div><!-- /.modal-dialog -->
    </div>
</div>
@endsection
@push('scripts')

<script src="js/vue-resource.js"></script>
<script src="js/libros/libros.js"></script>

@endpush
<input type="hidden" name="route" value="{{url('/')}}">
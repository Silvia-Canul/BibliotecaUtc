
<?php $__env->startSection('contenido'); ?>




<div class="container">
  <div class="row">
    <div class="col-sm-12 text-center">
      <br>
      <h2>Usuarios</h2>
      

</div>  
  </div>
<br>
  <div id="usuarios">
<div class="col-lg-12 ">
  <div class="card border-dark "  >
    <div class="card-body ">
      <h5 class="card-title ">Lista de usuarios</h5>
<h4>HOLA</h4>

    <span class="btn btn-outline-primary float-right " data-toggle="modal" v-on:click="showModal()"><i class="fa fa-plus"></i></span>
    <br><br>

    <div class=" card-body table-responsive  col-sm-12" style="height: 300px;">
      <table class="table table-hover table-striped text-center  text-nowrap">
        <thead class="thead-dark">
             <th scope="col">#</th>
              <th scope="col">Nombre</th>
        <th scope="col">Apellido paterno</th>
        <th scope="col">Apellido materno</th>
        <th scope="col">Curp</th>
        <th scope="col">Dirección</th>
        <th scope="col">Correo</th>
        <th scope="col">Telefono</th>
        <th scope="col">Usuario</th>
        <th scope="col">Password</th>
        <th scope="col">Activo</th>
        <th scope="col">Roles</th>

        <th scope="col">Opciones</th> 

        </thead>
        <tbody>
          <tr v-for="(usuario,index) in usuarios">
              <td>{{index+1}}</td>
          
          <td>{{usuario.nombres}}</td>
          <td>{{usuario.apellido_p}}</td>
          <td>{{usuario.apellido_m}}</td>
          <td>{{usuario.curp}}</td>
          <td>{{usuario.direccion}}</td>
          <td>{{usuario.correo}}</td>
          <td>{{usuario.telefono}}</td>
          <td>{{usuario.usser}}</td>
          <td>{{usuario.password}}</td>
          <td>{{usuario.activo}}</td>
          <td>{{usuario.denominacion.denominacion}}</td>
          

              <td>
                <span class="btn btn-outline-primary" @click="editarU(usuario.id_usuario)"><i class="fa fa-edit"></i></span>

                <span class="btn btn-outline-danger" @click="eliminarU(usuario.id_usuario)"><i class="fas fa-trash"></i></span>
              </td>
          </tr>
        </tbody>
      </table>
 <!-- Button trigger modal -->
    

<!-- Modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="add_usuarios">
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
                  <input type="text" name="" placeholder="Ingrese su nombre" class="form-control" v-model="nombres">
                  <label>Apellido Paterno</label>
                  <input type="text" name="" placeholder="Ingrese su apellido paterno" class="form-control" v-model="apellido_p">
                  <label>Apellido Materno</label>
                  <input type="text" name="" placeholder="Ingrese su apellido materno" class="form-control" v-model="apellido_m">
                  <label>Curp</label>
                 <input type="text" name="" placeholder="Ingrese su curp" class="form-control" v-model="curp">
                 <label>Dirección</label>
                 <input type="text" name="" placeholder="Ingrese su direccion" class="form-control" v-model="direccion">
                 <label>Correo</label>
                 <input type="text" name="" placeholder="Ingrese su correo" class="form-control" v-model="correo">
                
                  
                </div>
              <div class="col-sm-2">
                <div class="form-group">

              </div>
                
              </div>

                <div class="col-sm-4">
                  <div class="form-group">
                    
                     
                 <label>Telefono</label>
                 <input type="text" name="" placeholder="Ingrese su telefono" class="form-control" v-model="telefono">
                 <label>Usuario</label>
                 <input type="text" name="" placeholder="Ingrese su usuario" class="form-control" v-model="usser">
                 <label>Contraseña</label>
                 <input type="text" name="" placeholder="Ingrese su contraseña" class="form-control" v-model="password">
                 <center><label>Activar</label></center>
                  <input type="checkbox" placeholder="activo" v-model="activo" class="form-control">
                  <br>
                 <label>Roles</label>
         <select class="form-control" v-model="id_rol">
            <option disabled label="Seleccione un rol"></option>
            <option v-for="usuarios in roles" v-bind:value="usuarios.id_rol">{{usuarios.denominacion}}</option>
        </select>

                  </div>  
                </div>
              </div>  
              
              <br>
          </div>



      <div class="modal-footer">
            <button type="submit" class="btn btn-primary" v-on:click="actualizarU" v-if="editar">Actualizar</button>

            <button type="submit" class="btn btn-outline-success" v-on:click="agregarU" v-if="!editar">Guardar</button>
          
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



<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script src="js/usuario/usuario.js"></script>
  
  <!-- <script src="<?php echo e(('js/contenedor/contenedor.js')); ?>"></script> -->

<?php $__env->stopPush(); ?>
<input type="hidden" name="route" value="<?php echo e(url('/')); ?>">
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\BibliotecaUtc\resources\views/usuarios/usuarios.blade.php ENDPATH**/ ?>

<?php $__env->startSection('contenido'); ?>

<div class="container">
  <div class="row">
    <div class="col-sm-12 text-center">
      <br>
      <h2>Tipos de usuario</h2>
      

        </div>  
  </div>
       <br>
  <div id="tipos">
    <div class="col-lg-12 ">
      <div class="card border-dark "  >
        <div class="card-body ">
          <h5 class="card-title ">Lista de Tipos de usuario</h5>


        <span class="btn btn-outline-primary float-right " data-toggle="modal" v-on:click="showModal()"><i class="fa fa-plus"></i></span>
        <br><br>

          <div class=" card-body table-responsive  col-sm-12" style="height: 300px;">
      <table class="table table-hover table-striped text-center  text-nowrap">
        <thead class="thead-dark">
         
         <th scope="col">#</th>
         <th scope="col">Tipo</th>
         <th scope="col">Activo</th>
         <th scope="col">Opciones</th> 

        </thead>
        <tbody>
          <tr v-for="(tipos,index) in tipos">

           <td>{{index+1}}</td>
           <td>{{tipos.tipo}}</td>
           <td>{{tipos.activo}}</td>
          

              <td>
                <span class="btn btn-outline-primary" @click="editarT(tipos.id_tipo)"><i class="fa fa-edit"></i></span>

                <span class="btn btn-outline-danger" @click="eliminarT(tipos.id_tipo)"><i class="fas fa-trash"></i></span>
              </td>
          </tr>
        </tbody>
      </table>
 <!-- Button trigger modal -->
    

<!-- Modal -->
  <div class="modal fade" tabindex="-1" role="dialog" id="add_tipos">
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
                    <label>Tipo de usuario</label>
                    <input type="text" name="" placeholder="Ingrese tipo de usuarios" class="form-control" v-model="tipo">

                    <center><label>Activar</label></center>
                    <input type="checkbox" placeholder="activo" v-model="activo" class="form-control">

                </div>


              </div>  
              
              <br>
          </div>



              <div class="modal-footer">
                  <button type="submit" class="btn btn-primary" v-on:click="actualizarT" v-if="editar">Actualizar</button>

                  <button type="submit" class="btn btn-outline-success" v-on:click="agregarT" v-if="!editar">Guardar</button>
          
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
<script src="js/tipo/tipo.js"></script>
  
  <!-- <script src="<?php echo e(('js/contenedor/contenedor.js')); ?>"></script> -->

<?php $__env->stopPush(); ?>
<input type="hidden" name="route" value="<?php echo e(url('/')); ?>">
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\BibliotecaUtc\resources\views/tipos/tipos.blade.php ENDPATH**/ ?>
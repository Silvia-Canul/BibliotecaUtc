
<?php $__env->startSection('contenido'); ?>
<div class="container">
  <div class="row">

{{nom}}
</div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script src="js/usua/usua.js"></script>
  
  <!-- <script src="<?php echo e(('js/contenedor/contenedor.js')); ?>"></script> -->

<?php $__env->stopPush(); ?>
<input type="hidden" name="route" value="<?php echo e(url('/')); ?>">
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\BibliotecaUtc\resources\views/usuarioo/usuarioo.blade.php ENDPATH**/ ?>
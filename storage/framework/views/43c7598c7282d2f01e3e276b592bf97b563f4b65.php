<?php $__env->startSection('content'); ?>

<div class="panel panel-default">
  <div class="panel-heading">Estados</div>
  <div class="panel-body">

<?php echo Form::open(array('route' => ['admin.ciudades.update', $ciudad->_id], 'method' => 'POST' , 'class' => 'form-horizontal')); ?>


    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="name">Nombre:</label>  
      <div class="col-md-5">
      <input id="name" name="name" type="text" placeholder="" class="form-control input-md" value="<?php echo e($ciudad->name); ?>">
        
      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="state">Estado:</label>  
      <div class="col-md-5">
      <input id="state" name="state" type="text" placeholder="" class="form-control input-md" value="<?php echo e($ciudad->state); ?>">
        
      </div>
    </div>

    <?php echo e(Form::submit('Editar', ['class' => 'btn btn-success'])); ?>

    <a href="<?php echo e(route('admin.ciudades')); ?>" class="btn btn-primary">Regresar</a>

<?php echo Form::close(); ?>


  </div>
</div>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    ##parent-placeholder-16728d18790deb58b3b8c1df74f06e536b532695##
    <?php echo e(Html::script(mix('assets/admin/js/dashboard.js'))); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
    ##parent-placeholder-bf62280f159b1468fff0c96540f3989d41279669##
    <?php echo e(Html::style(mix('assets/admin/css/dashboard.css'))); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
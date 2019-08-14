<?php $__env->startSection('content'); ?>


<div class="panel panel-default">
  <div class="panel-heading">Ciudades</div>
  <div class="panel-body">

<?php echo Form::open(array('route' => 'admin.ciudades.store', 'method' => 'POST' , 'class' => 'form-horizontal')); ?>


    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="name">Nombre:</label>  
      <div class="col-md-5">
      <input id="name" name="name" type="text" placeholder="" class="form-control input-md">
        
      </div>
    </div>

    <!-- Text input-->
    <!--<div class="form-group">
      <label class="col-md-4 control-label" for="code">Estado:</label>  
      <div class="col-md-5">
      <input id="estado" name="estado" type="text" placeholder="" class="form-control input-md">
        
      </div>
    </div>
    -->

    <!-- Select Basic -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="selectbasic">Estado:</label>
      <div class="col-md-5">
        <select id="state" name="state" class="form-control">
          <?php $__currentLoopData = $estados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $estado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option value="<?php echo e($estado->_id); ?>"><?php echo e($estado->name); ?></option>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
      </div>
    </div>

    <?php echo e(Form::submit('Registrar', ['class' => 'btn btn-success'])); ?>

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
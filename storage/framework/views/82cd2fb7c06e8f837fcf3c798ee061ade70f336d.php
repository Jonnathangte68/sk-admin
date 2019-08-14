<?php $__env->startSection('content'); ?>


<div class="panel panel-default">
  <div class="panel-heading">Sub - Categorias</div>
  <div class="panel-body">

<?php echo Form::open(array('route' => 'admin.subcategorias.store', 'method' => 'POST' , 'class' => 'form-horizontal')); ?>


    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="name">Nombre:</label>  
      <div class="col-md-5">
      <input id="name" name="name" type="text" placeholder="" class="form-control input-md">
        
      </div>
    </div>

    <!-- Textarea -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="description">Descripcion:</label>
      <div class="col-md-4">                     
        <textarea class="form-control" id="description" name="description"></textarea>
      </div>
    </div>

    <!-- Select Basic -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="status">Estado:</label>
      <div class="col-md-5">
        <select id="status" name="status" class="form-control">
          <option value="0">Activo</option>
          <option value="1">Inactivo</option>
        </select>
      </div>
    </div>

    <!-- Text input-->
    <!--<div class="form-group">
      <label class="col-md-4 control-label" for="category">Categoria:</label>  
      <div class="col-md-5">
      <input id="category" name="category" type="text" placeholder="" class="form-control input-md">
        
      </div>
    </div>
    -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="status">Categoria:</label>
      <div class="col-md-5">
        <select id="category" name="category" class="form-control">
          <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($categoria->_id); ?>"><?php echo e($categoria->name); ?></option>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
      </div>
    </div>

    <?php echo e(Form::submit('Registrar', ['class' => 'btn btn-success'])); ?>

    <a href="<?php echo e(route('admin.subcategorias')); ?>" class="btn btn-primary">Regresar</a>

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
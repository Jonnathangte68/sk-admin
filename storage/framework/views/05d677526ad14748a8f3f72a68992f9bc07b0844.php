<?php $__env->startSection('content'); ?>

  <?php echo e(Form::open(['url' => '/admin/empresa-registrar','files' => true, 'class' => 'form-horizontal'])); ?>


<div style="width: 100%;height: 35px;background-color: blue;margin-bottom:5%;">
  <h3 style="color: white;">Información de la Empresa</h3>
</div>


  <div class="row" style="margin-bottom:2%;">
      <div class="col-md-5"><label for="name">Nombre de la Empresa:</label></div>
      <div class="col-md-7"><input id="name" name="name" type="text" placeholder="" class="form-control input-md"></div>
  </div>

    <div class="row" style="margin-bottom:2%;">
      <div class="col-md-5"><label for="moto">Moto:</label></div>
      <div class="col-md-7"><input id="moto" name="moto" type="text" placeholder="" class="form-control input-md"></div>
  </div>

    <div class="row" style="margin-bottom:2%;">
      <div class="col-md-5"><label for="sub_moto">Sub Moto:</label></div>
      <div class="col-md-7"><input id="sub_moto" name="sub_moto" type="text" placeholder="" class="form-control input-md"></div>
  </div>

    <div class="row" style="margin-bottom:2%;">
      <div class="col-md-5"><label for="email">Email:</label></div>
      <div class="col-md-7"><input id="email" name="email" type="text" placeholder="" class="form-control input-md"></div>
  </div>

      <div class="row" style="margin-bottom:2%;">
      <div class="col-md-5"><label for="phone">Phone:</label></div>
      <div class="col-md-7"><input id="phone" name="phone" type="text" placeholder="" class="form-control input-md"></div>
  </div>

      <div class="row" style="margin-bottom:2%;">
      <div class="col-md-5"><label for="address_detail">Direccion Detallada:</label></div>
      <div class="col-md-7"><textarea id="address_detail" name="address_detail" style="width: 100%;"></textarea></div>
  </div>

      <div class="row" style="margin-bottom:2%;">
      <div class="col-md-5"><label for="country">Pa&iacute;s:</label></div>
      <div class="col-md-7"><input id="country" name="country" type="text" placeholder="" class="form-control input-md"></div>
  </div>

      <div class="row" style="margin-bottom:2%;">
      <div class="col-md-5"><label for="state">Estado:</label></div>
      <div class="col-md-7"><input id="state" name="state" type="text" placeholder="" class="form-control input-md"></div>
  </div>

      <div class="row" style="margin-bottom:2%;">
      <div class="col-md-5"><label for="city">Ciudad:</label></div>
      <div class="col-md-7"><input id="city" name="city" type="text" placeholder="" class="form-control input-md"></div>
  </div>

        <div class="row" style="margin-bottom:2%;">
      <div class="col-md-5"><label for="zip_code">Codigo Zip:</label></div>
      <div class="col-md-7"><input id="zip_code" name="zip_code" type="text" placeholder="" class="form-control input-md"></div>
  </div>

      <div class="row" style="margin-bottom:2%;">
      <div class="col-md-5"><label for="logo_url">Logo:</label></div>
      <div class="col-md-7"><input id="logo_url" name="logo_url" class="input-file" type="file"></div>
  </div>

          <div class="row" style="margin-bottom:2%;">
      <div class="col-md-5"><label for="favicon">Favicon:</label></div>
      <div class="col-md-7"><input id="favicon" name="favicon" class="input-file" type="file"></div>
  </div>

          <div class="row" style="margin-bottom:2%;">
      <div class="col-md-5"><label for="logo_url">Imagen Principal:</label></div>
      <div class="col-md-7"><input id="img_principal" name="img_principal" class="input-file" type="file"></div>
  </div>

          <div class="row" style="margin-bottom:2%;">
      <div class="col-md-5"><label for="cabecera_title">Titulo Cabecera:</label></div>
      <div class="col-md-7"><input id="cabecera_title" name="cabecera_title" type="text" placeholder="" class="form-control input-md"></div>
  </div>

          <div class="row" style="margin-bottom:2%;">
      <div class="col-md-5"><label for="keywords">Palabras Claves:</label></div>
      <div class="col-md-7" id="multikeywordskk"><input id="keywords" name="keywords[]"/><i class="fas fa-minus-circle fa-1x" style="margin-left:1%;margin-right:1%;color:red;"></i><i class="fas fa-plus-circle fa-1x" style="color:green;"></i></div>
  </div>

  <br><br><br> 
<div style="text-align: center;">
    <a href="<?php echo e(url()->previous()); ?>" class="btn btn-submit">Regresar</a>
    <button type="submit" class="btn btn-primary">Registrar</button>
</div>



  <?php echo e(Form::close()); ?>



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
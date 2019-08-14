<?php $__env->startSection('content'); ?>

<div class="alert alert-success" style="display: none;">
  <strong>Success!</strong> Enterprise was updated successfully!.
</div>

<div class="alert alert-danger" style="display: none;">
  <strong>Error!</strong> Something bad happen please contact your administrator.
</div>

  <?php echo e(Form::open(['url' => '/admin/empresa-registrar','files' => true, 'class' => 'form-horizontal'])); ?>

<div style="width: 100%;background-color: blue;margin-bottom:5%;padding: 3%;">
  <h3 style="color: white;text-align: center;">INFORMACION GENERAL DE LA EMPRESA</h3>
</div>


  <div class="row" style="margin-bottom:2%;">
      <div class="col-md-5"><label for="name">Nombre de la Empresa:</label></div>
      <div class="col-md-7"><input id="name" name="name" type="text" placeholder="" class="form-control input-md" <?php if(!is_null($e) && property_exists($e, 'name')): ?> value="<?php echo e($e->name); ?>" <?php endif; ?>></div>
  </div>

    <div class="row" style="margin-bottom:2%;">
      <div class="col-md-5"><label for="moto">Moto:</label></div>
      <div class="col-md-7"><input id="moto" name="moto" type="text" placeholder="" class="form-control input-md" <?php if(!is_null($e) && property_exists($e, 'moto')): ?> value="<?php echo e($e->moto); ?>" <?php endif; ?>></div>
  </div>

    <div class="row" style="margin-bottom:2%;">
      <div class="col-md-5"><label for="sub_moto">Sub Moto:</label></div>
      <div class="col-md-7"><input id="sub_moto" name="sub_moto" type="text" placeholder="" class="form-control input-md" <?php if(!is_null($e) && property_exists($e, 'sub_moto')): ?> value="<?php echo e($e->sub_moto); ?>" <?php endif; ?>></div>
  </div>

    <div class="row" style="margin-bottom:2%;">
      <div class="col-md-5"><label for="email">Email:</label></div>
      <div class="col-md-7"><input id="email" name="email" type="text" placeholder="" class="form-control input-md" <?php if(!is_null($e) && property_exists($e, 'email')): ?> value="<?php echo e($e->email); ?>" <?php endif; ?>></div>
  </div>

      <div class="row" style="margin-bottom:2%;">
      <div class="col-md-5"><label for="phone">Phone:</label></div>
      <div class="col-md-7"><input id="phone" name="phone" type="text" placeholder="" class="form-control input-md" <?php if(!is_null($e) && property_exists($e, 'phone')): ?> value="<?php echo e($e->phone); ?>" <?php endif; ?>></div>
  </div>

      <div class="row" style="margin-bottom:2%;">
      <div class="col-md-5"><label for="address_detail">Direccion Detallada:</label></div>
      <div class="col-md-7"><textarea id="address_detail" name="address_detail" style="width: 100%;" <?php if(!is_null($e) && property_exists($e, 'address_detail')): ?> value="<?php echo e($e->address_detail); ?>" <?php endif; ?>></textarea></div>
  </div>

      <div class="row" style="margin-bottom:2%;">
      <div class="col-md-5"><label for="country">Pa&iacute;s:</label></div>
      <div class="col-md-7"><input id="country" name="country" type="text" placeholder="" class="form-control input-md" <?php if(!is_null($e) && property_exists($e, 'country')): ?> value="<?php echo e($e->country); ?>" <?php endif; ?>></div>
  </div>

      <div class="row" style="margin-bottom:2%;">
      <div class="col-md-5"><label for="state">Estado:</label></div>
      <div class="col-md-7"><input id="state" name="state" type="text" placeholder="" class="form-control input-md" <?php if(!is_null($e) && property_exists($e, 'state')): ?> value="<?php echo e($e->state); ?>" <?php endif; ?>></div>
  </div>

      <div class="row" style="margin-bottom:2%;">
      <div class="col-md-5"><label for="city">Ciudad:</label></div>
      <div class="col-md-7"><input id="city" name="city" type="text" placeholder="" class="form-control input-md" <?php if(!is_null($e) && property_exists($e, 'city')): ?> value="<?php echo e($e->city); ?>" <?php endif; ?>></div>
  </div>

        <div class="row" style="margin-bottom:2%;">
      <div class="col-md-5"><label for="zip_code">Codigo Zip:</label></div>
      <div class="col-md-7"><input id="zip_code" name="zip_code" type="text" placeholder="" class="form-control input-md" <?php if(!is_null($e) && property_exists($e, 'zip_code')): ?> value="<?php echo e($e->zip_code); ?>" <?php endif; ?>></div>
  </div>

          <div class="row" style="margin-bottom:2%;">
      <div class="col-md-5"><label for="logo_url">Logo:</label></div>
      <div class="col-md-7"><input id="logo_url" name="logo_url" class="input-file" type="file"></div>
              <?php if($e): ?> 
                  <?php if(property_exists($e,'logo_url')): ?>
                      <div class="col-md-12"><img style="width: 100%;height: 100%;" /></div>
                  <?php endif; ?>
              <?php endif; ?>
  </div>

          <div class="row" style="margin-bottom:2%;">
      <div class="col-md-5"><label for="favicon">Favicon:</label></div>
      <div class="col-md-7"><input id="favicon" name="favicon" class="input-file" type="file"></div>
                    <?php if($e): ?> 
                  <?php if(property_exists($e,'favicon')): ?>
                      <div class="col-md-12"><img src="<?php echo e($e->favicon); ?>" style="width: 100%;height: 100%;" /></div>
                  <?php endif; ?>
              <?php endif; ?>
  </div>

          <div class="row" style="margin-bottom:2%;">
      <div class="col-md-5"><label for="img_principal">Imagen Principal:</label></div>
      <div class="col-md-7"><input id="img_principal" name="img_principal" class="input-file" type="file"></div>
                    <?php if($e): ?> 
                  <?php if(property_exists($e,'imagen_principal')): ?>
                      <div class="col-md-12"><img src="<?php echo e($e->imagen_principal); ?>" style="width: 100%;height: 100%;" /></div>
                  <?php endif; ?>
              <?php endif; ?>
  </div>

          <div class="row" style="margin-bottom:2%;">
      <div class="col-md-5"><label for="cabecera_title">Titulo Cabecera:</label></div>
      <div class="col-md-7"><input id="cabecera_title" name="cabecera_title" type="text" placeholder="" class="form-control input-md" <?php if($e): ?> value="<?php echo e($e->cabecera_title); ?>" <?php endif; ?>></div>
  </div>

          <div class="row" style="margin-bottom:2%;">
      <div class="col-md-5"><label for="keywords">Palabras Claves:</label></div>
      <div class="col-md-7" id="multikeywordskk"><input id="keywords" name="keywords[]"/><i class="fas fa-minus-circle fa-1x" style="margin-left:1%;margin-right:1%;color:red;"></i><i class="fas fa-plus-circle fa-1x" style="color:green;"></i></div>
  </div>

  <br><br><br> 

  <a href="/admin" class="btn btn-submit">Regresar</a>
<button type="submit" class="btn btn-primary"><?php echo e(empty($e) ? 'Registrar' : 'Modificar'); ?></button>

  <?php echo e(Form::close()); ?>



<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    ##parent-placeholder-16728d18790deb58b3b8c1df74f06e536b532695##
    <?php echo e(Html::script(mix('assets/admin/js/dashboard.js'))); ?>

    <?php echo e(Html::script('assets/admin/js/enterprise_gestion.js')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
    ##parent-placeholder-bf62280f159b1468fff0c96540f3989d41279669##
    <?php echo e(Html::style(mix('assets/admin/css/dashboard.css'))); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
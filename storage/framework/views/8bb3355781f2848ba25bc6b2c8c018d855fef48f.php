<?php $__env->startSection('content'); ?>


<div class="panel panel-default">
  <div class="panel-heading">Categorias</div>
  <div class="panel-body">


  	<?php echo e(Form::open(array('route' => 'admin.store_new_email_config'))); ?>



  	<table class="table table-hover">
  		<thead>
  			<tr>
  				<th>Event</th>
  				<th>Template</th>
  			</tr>
  		</thead>
  		<tbody>
  			<tr>
  				<td>Login</td>
  				<td><select id="login_emout" name="login_emout" class="form-control">
  					<option value="">--- * Please select template * ---</option>
  					<?php $__currentLoopData = $fls; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $f): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php if(explode("/",$f)[count(explode("/",$f))-1]=="login_template.html"): ?>
                  <option value="<?php echo e($f); ?>" selected="selected"><?php echo e(explode("/",$f)[count(explode("/",$f))-1]); ?></option>
              <?php else: ?>
                  <option value="<?php echo e($f); ?>"><?php echo e(explode("/",$f)[count(explode("/",$f))-1]); ?></option>
              <?php endif; ?>
  					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  				</select></td>
  			</tr>
  			<tr>
  				<td>Subscribe</td>
  				<td><select id="subscribe_emout" name="subscribe_emout" class="form-control">
  					<option value="">--- * Please select template * ---</option>
  					<?php $__currentLoopData = $fls; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $f): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  						<?php if(explode("/",$f)[count(explode("/",$f))-1]=="subscribe_template.html"): ?>
                  <option value="<?php echo e($f); ?>" selected="selected"><?php echo e(explode("/",$f)[count(explode("/",$f))-1]); ?></option>
              <?php else: ?>
                  <option value="<?php echo e($f); ?>"><?php echo e(explode("/",$f)[count(explode("/",$f))-1]); ?></option>
              <?php endif; ?>
  					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  				</select></td>
  			</tr>
  			<tr>
  				<td>Recovery</td>
  				<td><select id="recovery_emout" name="recovery_emout" class="form-control">
  					<option value="">--- * Please select template * ---</option>
  					<?php $__currentLoopData = $fls; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $f): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  						<?php if(explode("/",$f)[count(explode("/",$f))-1]=="recovery_template.html"): ?>
                  <option value="<?php echo e($f); ?>" selected="selected"><?php echo e(explode("/",$f)[count(explode("/",$f))-1]); ?></option>
              <?php else: ?>
                  <option value="<?php echo e($f); ?>"><?php echo e(explode("/",$f)[count(explode("/",$f))-1]); ?></option>
              <?php endif; ?>
  					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  				</select></td>
  			</tr>
  			<tr>
  				<td>Contact</td>
  				<td><select id="contact_emout" name="contact_emout" class="form-control">
  					<option value="">--- * Please select template * ---</option>
  					<?php $__currentLoopData = $fls; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $f): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  						<?php if(explode("/",$f)[count(explode("/",$f))-1]=="contact_template.html"): ?>
                  <option value="<?php echo e($f); ?>" selected="selected"><?php echo e(explode("/",$f)[count(explode("/",$f))-1]); ?></option>
              <?php else: ?>
                  <option value="<?php echo e($f); ?>"><?php echo e(explode("/",$f)[count(explode("/",$f))-1]); ?></option>
              <?php endif; ?>
  					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  				</select></td>
  			</tr>
  		</tbody>
  	</table>

  	<div style="width: 100%;text-align: center;">
  		<button class="btn btn-primary">SAVE</button>
  	</div>

  	<?php echo e(Form::close()); ?>



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
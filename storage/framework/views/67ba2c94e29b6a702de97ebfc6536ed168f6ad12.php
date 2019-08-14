<?php $__env->startSection('content'); ?>


<div class="panel panel-default">
  <div class="panel-heading" style="padding: 2%;">Advertisement Management

  	<!-- Buttons -->
		<div style="display: inline; float: right; clear: both;margin-top: -5px;">
			<a id="btn_view_list" class="btn btn-primary"><span class="glyphicon glyphicon-th-list" style="color: white !important;"></span></a>
			<a id="btn_add_add" class="btn btn-primary">Add New &nbsp;<span class="glyphicon glyphicon-plus-sign" style="color: white !important;"></span></a>
		</div>

		<br>

  </div>
  <div class="panel-body">




  	<!-- Add new add form -->  




  	<div id="lstadds">



		  <table class="table table-bordered">
		    <thead>
		      <tr>
		        <th style="width: 20%;">Img</th>
		        <th style="width: 35%;">Name</th>
		        <th style="width: 20%;">Duration</th>
		        <th style="width: 20%;">Relevance</th>
		        <th style="width: 5%;">Actions</th>
		      </tr>
		    </thead>
		    <tbody>
		    	<!--<tr>
		        		<td style="width: 20%;"><img src="http://chevroletinalco.cl/wp-content/uploads/2017/fotos/modelos/36/chevrolet-spark.jpg" style="width: 100% !important;"></td>
		        		<td style="width: 35%;">Name123</td>
		        		<td style="width: 20%;">Since: 2019-02-01 <br> To: 2019-02-02</td>
		        		<td style="width: 20%;">Very Relevant</td>
		        		<td style="width: 5%;vertical-align: middle;text-align: center;"><a ><span class="glyphicon glyphicon-pencil"></span></a></td>
		        	</tr>-->
		        <?php $__currentLoopData = $adds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				    
		        	<tr>
		        		<td style="width: 20%;"><img src="<?php echo e($a->banner_url); ?>" style="width: 100% !important;"></td>
		        		<td style="width: 35%;"><?php echo e($a->name); ?></td>
		        		<td style="width: 20%;">Since: <?php echo e($a->start_date); ?> <br> To: <?php echo e($a->end_date); ?></td>
		        		<td style="width: 20%;"><?php echo e($a->relevance); ?></td>
		        		<td style="width: 5%;vertical-align: middle;text-align: center;"><a ><span class="glyphicon glyphicon-pencil"></span></a></td>
		        	</tr>

				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		    </tbody>
		  </table>
  		
  	</div>




	<!-- Add new add form -->  	




  	<div id="registernewadd" style="display: none;">
  		<?php echo Form::open(array('id'=>'frmnwpublicidad','route' => 'admin.publicidades.store', 'method' => 'POST','files' => true , 'class' => 'form-horizontal')); ?>


  		<!-- Text input-->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="name">Name: </label>  
		  <div class="col-md-4">
		  <input id="name" name="name" type="text" placeholder="" class="form-control input-md">
		    
		  </div>
		</div>

		<!-- Textarea -->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="description">Description: </label>
		  <div class="col-md-4">                     
		    <textarea class="form-control" id="description" name="description"></textarea>
		  </div>
		</div>

		<!-- File Button --> 
		<div class="form-group">
		  <label class="col-md-4 control-label" for="banner_url">Asset: </label>
		  <div class="col-md-4">
		    <input id="banner_url" name="banner_url" class="input-file" type="file">
		  </div>
		</div>

		<!-- Select Basic -->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="relevance">Relevance: </label>
		  <div class="col-md-4">
		    <select id="relevance" name="relevance" class="form-control">
		      <option value="Low">Low</option>
		      <option value="Medium">Medium</option>
		      <option value="Very Relevant">Very Relevant</option>
		      <option value="Very very Relevant">Very very Relevant</option>
		      <option value="Top">Top</option>
		    </select>
		  </div>
		</div>

		<!-- Text input-->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="company">Company: </label>  
		  <div class="col-md-4">
		  <input id="company" name="company" type="text" placeholder="" class="form-control input-md">
		    
		  </div>
		</div>

		<!-- Text input-->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="end_date">End Date: </label>  
		  <div class="col-md-4">
		  <input id="end_date" name="end_date" type="text" placeholder="" class="form-control input-md">
		    
		  </div>
		</div>

		<!-- Text input-->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="start_date">Start Date: </label>  
		  <div class="col-md-4">
		  <input id="start_date" name="start_date" type="text" placeholder="" class="form-control input-md">
		    
		  </div>
		</div>

		    <?php echo e(Form::button('Limpiar', ['id'=>'clearform','class' => 'btn btn-primary'])); ?>

		    <?php echo e(Form::submit('Registrar', ['class' => 'btn btn-success'])); ?>

		    <a href="<?php echo e(route('admin.publicidades')); ?>" class="btn btn-primary">Regresar</a>

		<?php echo Form::close(); ?>

  	</div>

  </div>
</div>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    ##parent-placeholder-16728d18790deb58b3b8c1df74f06e536b532695##
    <?php echo e(Html::script(mix('assets/admin/js/dashboard.js'))); ?>

    <?php echo e(Html::script('assets/admin/js/add.js')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
    ##parent-placeholder-bf62280f159b1468fff0c96540f3989d41279669##
    <?php echo e(Html::style(mix('assets/admin/css/dashboard.css'))); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('content'); ?>


<div class="panel panel-default">
  <div class="panel-heading">Ciudades</div>
  <div class="panel-body">
      <div class="row">
          <div class="col-md-2">
                <a href="<?php echo e(route('admin.ciudades.create')); ?>" class="btn btn-default">
                  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                  Nueva Ciudad
                </a>
          </div>
          <div class="col-md-6"></div>
          <div class="col-md-4">
                <div class="btn-group" style="float: right;clear: both;">
                <button type="button" class="btn btn-default" aria-label="Right Align">
                  <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span>
                  Exportar
                </button>
                <button type="button" class="btn btn-default" aria-label="Right Align">
                  <span class="glyphicon glyphicon-print" aria-hidden="true"></span>
                  Imprimir
                </button>
                <button type="button" class="btn btn-primary" aria-label="Right Align">
                  <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                </button>
                </div>
          </div>
      </div>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Acciones</th>
            <th>Id</th>
            <th>Nombre</th>
            <th>Estado</th>
            <th>Fecha de Creacion</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
                <input type="checkbox" name="all">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button type="button" class="btn btn-default" aria-label="Right Align">
                  <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>
                </button>
            </td>
            <td>
                <input type="text" name="id" class="form-control">
            </td>
            <td>
                <input type="text" name="codigo" class="form-control">
            </td>
            <td>
                <input type="text" name="nombre" class="form-control">
            </td>
            <td>
                <input type="text" name="created" class="form-control">
            </td>
          </tr>


          <!--  Cargar informacion  -->


<!-- ej -->

        <?php $__currentLoopData = $ciudades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ciudad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

          <tr>
            <td style="width:22%">
                <input type="checkbox" name="all">
                <a href="/admin/ciudades/edit/<?php echo e($ciudad->_id); ?>" class="btn btn-default">
                  <span class=" glyphicon glyphicon-pencil" aria-hidden="true"></span>Editar
                </a>
                <a href="/admin/ciudades/delete/<?php echo e($ciudad->_id); ?>" class="btn btn-default">
                  <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>Eliminar
                </a>
            </td>
            <td>
                <?php echo e($ciudad->_id); ?>

            </td>
            <td>
                 <?php echo e($ciudad->name); ?>

            </td>
            <td>
              <?php echo e(( ! empty($ciudad->state) ? $ciudad->state : '')); ?>

            </td>
            <td>
                 <?php echo e($ciudad->Created_date); ?>

            </td>
          </tr>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


        </tbody>
      </table>

      <table id="pag_footer_num_pages" style="float: right;clear: both;">
          <tbody>
          <tr id="pagination_content">
              <td class="navigation_item navigation_left">&lt;</td>
              <td class="navigation_item navigation_right">&gt;</td>
          </tr>
          </tbody>
      </table>
  </div>
</div>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    ##parent-placeholder-16728d18790deb58b3b8c1df74f06e536b532695##
    <?php echo e(Html::script(mix('assets/admin/js/dashboard.js'))); ?>

    <script type="text/javascript">
        var p = <?php echo json_encode($ciudades);; ?>;
    </script>
    <script type="text/javascript" src="<?php echo e(asset("assets/admin/js/paginate_cruds.min.js")); ?>"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
    ##parent-placeholder-bf62280f159b1468fff0c96540f3989d41279669##
    <?php echo e(Html::style(mix('assets/admin/css/dashboard.css'))); ?>

    <style>.navigation_left{border:1px solid #ddd;padding:12px;background-color:#000;color:#fff!important;font-weight:700!important}.navigation_right{border:1px solid #ddd;padding:12px;background-color:#000;color:#fff!important;font-weight:700!important}.navigation_active_item{background:#ddd}.navigation_item{border:1px solid #ddd;padding:12px;color:#5f9ea0;cursor:pointer!important}</style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
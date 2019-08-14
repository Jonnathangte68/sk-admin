<?php $__env->startSection('content'); ?>


<?php echo Form::open(array('route' => 'admin.text_management.store', 'method' => 'POST' , 'class' => 'form-horizontal')); ?>



<fieldset style="width: 100%;">

<!-- Form Name -->
<legend>Form Name</legend>

<div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
        Landing Page</a>
      </h4>
    </div>
    <div id="collapse1" class="panel-collapse collapse in">
      <div class="panel-body">
          

          <div class="row"> 
              <div class="col-3 col-sm-3 col-md-3 col-lg-3">
                  <h4>POSITION</h4>
                  <br>

                  <table style="border-spacing: 4px !important; border-collapse: separate;">
                    <tr>
                      <td style="width: 80%;">Right</td><td style="width: 20%;"><i class="fas fa-chevron-right"></i></td>
                    </tr>
                    <tr>
                      <td style="width: 80%;">Left</td><td style="width: 20%;"><i class="fas fa-chevron-left"></i></td>
                    </tr>
                  </table>
              </div>
              <div class="col-3 col-sm-3 col-md-3 col-lg-3">
                <h4>BORDER</h4>
                  <br>

                  <table style="border-spacing: 4px !important; border-collapse: separate;">
                    <tr>
                      <td>Color</td><td style="width: 40%;">
                        <input type="file" name="sdgsd">
                      </td>
                    </tr>
                    <tr>
                      <td>Style</td><td style="width: 40%;">
                        <select>
                          <option value="none">none</option>
                          <option value="hidden">hidden</option>
                          <option value="dotted">dotted</option>
                          <option value="dashed">dashed</option>
                          <option value="solid">solid</option>
                          <option value="double">double</option>
                          <option value="groove">groove</option>
                          <option value="ridge">ridge</option>
                          <option value="inset">inset</option>
                          <option value="outset">outset</option>
                          <option value="initial">initial</option>
                          <option value="inherit">inherit</option>
                        </select>
                      </td>
                    </tr>
                  </table>
              </div>
              <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                <!-- LEAVE EMPTY... -->

                <h4>RELATED CONTENT</h4>
                  <br>

                  <table style="border-spacing: 4px !important; border-collapse: separate;">
                    <tr>
                      <td >Espacio entre palabras</td><td>
                        <input type="text" name="sdgsd" style="width: 35px;">
                      </td>
                    </tr>
                    <tr>
                      <td >Espacio entre lineas</td><td>
                        <input type="text" name="sdgsd" style="width: 35px;">
                      </td>
                    </tr>
                  </table>
              </div>
              <!--<div class="col-3 col-sm-3 col-md-3 col-lg-3"></div>-->
          </div>

          <br><br>


          <div class="row"> 
            <div class="col-8 col-sm-8 col-md-8 col-lg-8">
                <!-- Left Column -->
                <table>
                  <tr><td>Space Outside</td><td style="width: 15px;background-color: #ffe2c9;"></td></tr>
                  <tr><td>Space Inside</td><td style="width: 15px;background-color: #C4FE82;"></td></tr>
                  <tr><td>Border Size</td><td style="width: 15px;background-color: #551A8B;"></td></tr>
                </table>

            </div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                <!-- Right Column -->        

                <div style="width:100%;height:230px !important;padding: 9%;border:1px solid #dadada;background-color:#ffe2c9;">
                  <input type="text" name="left_margin" value="-" style="position: absolute; left: 4%; top: 45%; width: 7%; padding: 1%;">
                  <input type="text" name="top_margin" value="-" style="position: absolute; left:48%; top: 1%; width: 7%; padding: 1%;height: 25px;">
                  <input type="text" name="top_margin" value="-" style="position: absolute; left:89%; top: 45%; width: 7%; padding: 1%;height: 25px;">
                  <input type="text" name="top_margin" value="-" style="position: absolute; left:48%; top: 88%; width: 7%; padding: 1%;height: 25px;">
                  <!--<input type="text" name="left_margin" value="-" style="position: absolute; left: 4%; top: 45%; width: 7%; padding: 1%;">
                  <input type="text" name="left_margin" value="-" style="position: absolute; left: 4%; top: 45%; width: 7%; padding: 1%;">-->
                  <div style="width:100%;height:100% !important;padding: 9%;border:1px solid #dadada;background-color:#C4FE82;">
                    <input type="text" name="left_margin" value="-" style="position: absolute; left: 12%; top: 45%; width: 7%; padding: 1%;">
                    <input type="text" name="top_margin" value="-" style="position: absolute; left:48%; top: 13%; width: 7%; padding: 1%;height: 25px;">
                    <input type="text" name="top_margin" value="-" style="position: absolute; left:81%; top: 45%; width: 7%; padding: 1%;height: 25px;">
                    <input type="text" name="top_margin" value="-" style="position: absolute; left:48%; top: 77%; width: 7%; padding: 1%;height: 25px;">
                      <div style="width:100%;height:100% !important;padding: 9%;border:1px solid #dadada;background-color:#551A8B;">
                        <input type="text" name="left_margin" value="-" style="position: absolute; left: 19%; top: 45%; width: 7%; padding: 1%;">
                        <input type="text" name="top_margin" value="-" style="position: absolute; left:48%; top:23%; width: 7%; padding: 1%;height: 25px;">
                        <input type="text" name="top_margin" value="-" style="position: absolute; left:74%; top: 45%; width: 7%; padding: 1%;height: 25px;">
                        <input type="text" name="top_margin" value="-" style="position: absolute; left:48%; top: 66%; width: 7%; padding: 1%;height: 25px;">
                        <div style="width:100%;height:100% !important;padding:18%;border:1px solid #dadada;text-align: center;vertical-align: middle;background-color:#FFF;">
                              300x400
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


<div style="text-align: center;">
    <button type="submit" class="btn btn-primary">Save changes</button>  
</div>



</fieldset>

<?php echo Form::close(); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    ##parent-placeholder-16728d18790deb58b3b8c1df74f06e536b532695##
    <?php echo e(Html::script(mix('assets/admin/js/dashboard.js'))); ?>

    <?php echo e(Html::script('assets/admin/js/textcontent.js')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
    ##parent-placeholder-bf62280f159b1468fff0c96540f3989d41279669##
    <?php echo e(Html::style(mix('assets/admin/css/dashboard.css'))); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
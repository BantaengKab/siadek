
<script src="<?= BASE_ASSET; ?>/js/jquery.hotkeys.js"></script>
<script type="text/javascript">
//This page is a result of an autogenerated content made by running test.html with firefox.
function domo(){
 
   // Binding keys
   $('*').bind('keydown', 'Ctrl+e', function assets() {
      $('#btn_edit').trigger('click');
       return false;
   });

   $('*').bind('keydown', 'Ctrl+x', function assets() {
      $('#btn_back').trigger('click');
       return false;
   });
    
}


jQuery(document).ready(domo);
</script>

<!-- Main content -->
<section class="content">
   <div class="row" >
     
      <div class="col-md-12">
         <div class="box box-warning">
            <div class="box-body ">

               <!-- Widget: user widget style 1 -->
               <div class="box box-widget widget-user-2">
                  <!-- Add the bg color to the header using any of the bg-* classes -->
                  <div class="widget-user-header ">
                    
                     <div class="widget-user-image">
                        <img class="img-circle" src="<?= BASE_ASSET; ?>/img/view.png" alt="User Avatar">
                     </div>
                     <!-- /.widget-user-image -->
                     <h3 class="widget-user-username"><b>Data Disabilitas Dan Rentan</b></h3>
                     <h5 class="widget-user-desc">Detail Data Disabilitas Dan Rentan</h5>
                     <hr>
                  </div>

                 
                  <div class="form-horizontal" name="form_tbl_disabilitas" id="form_tbl_disabilitas" >
                   
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Id </label>

                        <div class="col-sm-8">
                           <?= _ent($tbl_disabilitas->id); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Wilayah </label>

                        <div class="col-sm-8">
                           <?= _ent($tbl_disabilitas->kd_wilayah); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">NIK </label>

                        <div class="col-sm-8">
                           <?= _ent($tbl_disabilitas->nik); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Disabilatas </label>

                        <div class="col-sm-8">
                           <?= _ent($tbl_disabilitas->disabilitas); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Rentan </label>

                        <div class="col-sm-8">
                           <?= _ent($tbl_disabilitas->rentan); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Keterangan </label>

                        <div class="col-sm-8">
                           <?= _ent($tbl_disabilitas->keterangan); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Created By </label>

                        <div class="col-sm-8">
                           <?= _ent($tbl_disabilitas->created_by); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Creation Date </label>

                        <div class="col-sm-8">
                           <?= _ent($tbl_disabilitas->creation_date); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Last Updated By </label>

                        <div class="col-sm-8">
                           <?= _ent($tbl_disabilitas->last_updated_by); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Last Updated Date </label>

                        <div class="col-sm-8">
                           <?= _ent($tbl_disabilitas->last_updated_date); ?>
                        </div>
                    </div>
                                        
                    <br>
                    <br>

                    <div class="view-nav">
                        <?php is_allowed('tbl_disabilitas_update', function() use ($tbl_disabilitas){?>
                        <a class="btn btn-flat btn-info btn_edit btn_action" id="btn_edit" data-stype='back' title="edit tbl_disabilitas (Ctrl+e)" href="<?= site_url('tbl_disabilitas/edit/'.$tbl_disabilitas->id); ?>"><i class="fa fa-edit" ></i> <?= cclang('update', ['Tbl Disabilitas']); ?> </a>
                        <?php }) ?>
                        <a class="btn btn-flat btn-default btn_action" id="btn_back" title="back (Ctrl+x)" href="<?= site_url('tbl_disabilitas/'); ?>"><i class="fa fa-undo" ></i> <?= cclang('go_list_button', ['Tbl Disabilitas']); ?></a>
                     </div>
                    
                  </div>
               </div>
            </div>
            <!--/box body -->
         </div>
         <!--/box -->

      </div>
   </div>
</section>
<!-- /.content -->

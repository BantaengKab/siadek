
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
                     <h3 class="widget-user-username"><b>Tbl Regulasi</b></h3>
                     <h5 class="widget-user-desc">Detail Tbl Regulasi</h5>
                     <hr>
                  </div>

                 
                  <div class="form-horizontal" name="form_tbl_regulasi" id="form_tbl_regulasi" >
                   
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Id </label>

                        <div class="col-sm-8">
                           <?= _ent($tbl_regulasi->id); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Kd Wilayah </label>

                        <div class="col-sm-8">
                           <?= _ent($tbl_regulasi->kd_wilayah); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Regulasi Jenis </label>

                        <div class="col-sm-8">
                           <?= _ent($tbl_regulasi->regulasi_jns_nama); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Keterangan </label>

                        <div class="col-sm-8">
                           <?= _ent($tbl_regulasi->keterangan); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label"> File </label>
                        <div class="col-sm-8">
                             <?php if (is_image($tbl_regulasi->file)): ?>
                              <a class="fancybox" rel="group" href="<?= BASE_URL . 'uploads/tbl_regulasi/' . $tbl_regulasi->file; ?>">
                                <img src="<?= BASE_URL . 'uploads/tbl_regulasi/' . $tbl_regulasi->file; ?>" class="image-responsive" alt="image tbl_regulasi" title="file tbl_regulasi" width="40px">
                              </a>
                              <?php else: ?>
                              <label>
                                <a href="<?= BASE_URL . 'administrator/file/download/tbl_regulasi/' . $tbl_regulasi->file; ?>">
                                 <img src="<?= get_icon_file($tbl_regulasi->file); ?>" class="image-responsive" alt="image tbl_regulasi" title="file <?= $tbl_regulasi->file; ?>" width="40px"> 
                               <?= $tbl_regulasi->file ?>
                               </a>
                               </label>
                              <?php endif; ?>
                        </div>
                    </div>
                                       
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">No Regulasi </label>

                        <div class="col-sm-8">
                           <?= _ent($tbl_regulasi->no_regulasi); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Status </label>

                        <div class="col-sm-8">
                           <?= _ent($tbl_regulasi->status); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Tahun </label>

                        <div class="col-sm-8">
                           <?= _ent($tbl_regulasi->tahun); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Created By </label>

                        <div class="col-sm-8">
                           <?= _ent($tbl_regulasi->created_by); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Creation Date </label>

                        <div class="col-sm-8">
                           <?= _ent($tbl_regulasi->creation_date); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Last Updated By </label>

                        <div class="col-sm-8">
                           <?= _ent($tbl_regulasi->last_updated_by); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Last Updated Date </label>

                        <div class="col-sm-8">
                           <?= _ent($tbl_regulasi->last_updated_date); ?>
                        </div>
                    </div>
                                        
                    <br>
                    <br>

                    <div class="view-nav">
                        <?php is_allowed('tbl_regulasi_update', function() use ($tbl_regulasi){?>
                        <a class="btn btn-flat btn-info btn_edit btn_action" id="btn_edit" data-stype='back' title="edit tbl_regulasi (Ctrl+e)" href="<?= site_url('tbl_regulasi/edit/'.$tbl_regulasi->id); ?>"><i class="fa fa-edit" ></i> <?= cclang('update', ['Tbl Regulasi']); ?> </a>
                        <?php }) ?>
                        <a class="btn btn-flat btn-default btn_action" id="btn_back" title="back (Ctrl+x)" href="<?= site_url('tbl_regulasi/'); ?>"><i class="fa fa-undo" ></i> <?= cclang('go_list_button', ['Tbl Regulasi']); ?></a>
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

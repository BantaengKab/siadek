
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
                     <h3 class="widget-user-username"><b>Penduduk</b></h3>
                     <h5 class="widget-user-desc">Detail Penduduk</h5>
                     <hr>
                  </div>

                 
                  <div class="form-horizontal" name="form_penduduk" id="form_penduduk" >
                   
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Id </label>

                        <div class="col-sm-8">
                           <?= _ent($penduduk->id); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Nik </label>

                        <div class="col-sm-8">
                           <?= _ent($penduduk->nik); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Nama </label>

                        <div class="col-sm-8">
                           <?= _ent($penduduk->nama); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Tempat Lahir </label>

                        <div class="col-sm-8">
                           <?= _ent($penduduk->tempat_lahir); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Tgl Lahir </label>

                        <div class="col-sm-8">
                           <?= _ent($penduduk->tgl_lahir); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Jenis Kelamin </label>

                        <div class="col-sm-8">
                           <?= _ent($penduduk->jenis_kelamin); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Alamat </label>

                        <div class="col-sm-8">
                           <?= _ent($penduduk->alamat); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Status Hubungan </label>

                        <div class="col-sm-8">
                           <?= _ent($penduduk->status_hubungan); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Agama </label>

                        <div class="col-sm-8">
                           <?= _ent($penduduk->agama); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Status Perkawinan </label>

                        <div class="col-sm-8">
                           <?= _ent($penduduk->status_perkawinan); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Kepemilikan Akte Perkawinan </label>

                        <div class="col-sm-8">
                           <?= _ent($penduduk->kepemilikan_akte_perkawinan); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Pendidikan Terakhir </label>

                        <div class="col-sm-8">
                           <?= _ent($penduduk->pendidikan_terakhir); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Jenis Pekerjaan </label>

                        <div class="col-sm-8">
                           <?= _ent($penduduk->jenis_pekerjaan); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Bidang Pekerjaan </label>

                        <div class="col-sm-8">
                           <?= _ent($penduduk->bidang_pekerjaan); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">No Kk </label>

                        <div class="col-sm-8">
                           <?= _ent($penduduk->no_kk); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Kd Wilayah </label>

                        <div class="col-sm-8">
                           <?= _ent($penduduk->nama); ?>
                        </div>
                    </div>
                                        
                    <br>
                    <br>

                    <div class="view-nav">
                        <?php is_allowed('penduduk_update', function() use ($penduduk){?>
                        <a class="btn btn-flat btn-info btn_edit btn_action" id="btn_edit" data-stype='back' title="edit penduduk (Ctrl+e)" href="<?= site_url('penduduk/edit/'.$penduduk->id); ?>"><i class="fa fa-edit" ></i> <?= cclang('update', ['Penduduk']); ?> </a>
                        <?php }) ?>
                        <a class="btn btn-flat btn-default btn_action" id="btn_back" title="back (Ctrl+x)" href="<?= site_url('penduduk/'); ?>"><i class="fa fa-undo" ></i> <?= cclang('go_list_button', ['Penduduk']); ?></a>
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

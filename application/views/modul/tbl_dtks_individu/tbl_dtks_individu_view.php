
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
                     <h3 class="widget-user-username"><b>DTKS Individu</b></h3>
                     <h5 class="widget-user-desc">Detail DTKS Individu</h5>
                     <hr>
                  </div>

                 
                  <div class="form-horizontal" name="form_tbl_dtks_individu" id="form_tbl_dtks_individu" >
                   
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Id </label>

                        <div class="col-sm-8">
                           <?= _ent($tbl_dtks_individu->id); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">IDARTBDT </label>

                        <div class="col-sm-8">
                           <?= _ent($tbl_dtks_individu->IDARTBDT); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">IDBDT </label>

                        <div class="col-sm-8">
                           <?= _ent($tbl_dtks_individu->IDBDT); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">NoPesertaPBDT </label>

                        <div class="col-sm-8">
                           <?= _ent($tbl_dtks_individu->NoPesertaPBDT); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">KDPROP </label>

                        <div class="col-sm-8">
                           <?= _ent($tbl_dtks_individu->KDPROP); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">KDKAB </label>

                        <div class="col-sm-8">
                           <?= _ent($tbl_dtks_individu->KDKAB); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">KDKEC </label>

                        <div class="col-sm-8">
                           <?= _ent($tbl_dtks_individu->KDKEC); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">KDDESA </label>

                        <div class="col-sm-8">
                           <?= _ent($tbl_dtks_individu->KDDESA); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Kd Wilayah </label>

                        <div class="col-sm-8">
                           <?= _ent($tbl_dtks_individu->kd_wilayah); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Nama </label>

                        <div class="col-sm-8">
                           <?= _ent($tbl_dtks_individu->Nama); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">JnsKel </label>

                        <div class="col-sm-8">
                           <?= _ent($tbl_dtks_individu->JnsKel); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">TmpLahir </label>

                        <div class="col-sm-8">
                           <?= _ent($tbl_dtks_individu->TmpLahir); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">TglLahir </label>

                        <div class="col-sm-8">
                           <?= _ent($tbl_dtks_individu->TglLahir); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">NIK </label>

                        <div class="col-sm-8">
                           <?= _ent($tbl_dtks_individu->NIK); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">NoKK </label>

                        <div class="col-sm-8">
                           <?= _ent($tbl_dtks_individu->NoKK); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Hub KRT </label>

                        <div class="col-sm-8">
                           <?= _ent($tbl_dtks_individu->Hub_KRT); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">NUK </label>

                        <div class="col-sm-8">
                           <?= _ent($tbl_dtks_individu->NUK); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Hubkel </label>

                        <div class="col-sm-8">
                           <?= _ent($tbl_dtks_individu->Hubkel); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Umur </label>

                        <div class="col-sm-8">
                           <?= _ent($tbl_dtks_individu->Umur); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Sta Kawin </label>

                        <div class="col-sm-8">
                           <?= _ent($tbl_dtks_individu->Sta_kawin); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Jenis Cacat </label>

                        <div class="col-sm-8">
                           <?= _ent($tbl_dtks_individu->Jenis_cacat); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Penyakit Kronis </label>

                        <div class="col-sm-8">
                           <?= _ent($tbl_dtks_individu->Penyakit_kronis); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Status </label>

                        <div class="col-sm-8">
                           <?= _ent($tbl_dtks_individu->status); ?>
                        </div>
                    </div>
                                        
                    <br>
                    <br>

                    <div class="view-nav">
                        <?php is_allowed('tbl_dtks_individu_update', function() use ($tbl_dtks_individu){?>
                        <a class="btn btn-flat btn-info btn_edit btn_action" id="btn_edit" data-stype='back' title="edit tbl_dtks_individu (Ctrl+e)" href="<?= site_url('tbl_dtks_individu/edit/'.$tbl_dtks_individu->id); ?>"><i class="fa fa-edit" ></i> <?= cclang('update', ['Tbl Dtks Individu']); ?> </a>
                        <?php }) ?>
                        <a class="btn btn-flat btn-default btn_action" id="btn_back" title="back (Ctrl+x)" href="<?= site_url('tbl_dtks_individu/'); ?>"><i class="fa fa-undo" ></i> <?= cclang('go_list_button', ['Tbl Dtks Individu']); ?></a>
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

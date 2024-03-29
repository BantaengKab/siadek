
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
                     <h3 class="widget-user-username"><b>Adminduk Akta Kematian</b></h3>
                     <h5 class="widget-user-desc">Detail Adminduk Akta Kematian</h5>
                     <hr>
                  </div>

                 
                  <div class="form-horizontal" name="form_tbl_korduk_akta_kematian" id="form_tbl_korduk_akta_kematian" >
                   <div class="col-lg-6">
                   <table class="table table-striped">
                  <tbody>
                    <tr>
                      <td>NIK</td>
                      <td><?= _ent($tbl_korduk_akta_kematian->nik); ?></td>

                    </tr>
                    <tr>
                      <td>Nama</td>
                      <td><?= _ent($tbl_korduk_akta_kematian->nama); ?></td>
                      
                    </tr>
                    <tr>
                      <td>Alamat</td>
                      <td> <?= _ent($tbl_korduk_akta_kematian->alamat); ?></td>
                    </tr>
                    <tr>
                      <td>Jenis Kelamin </td>
                      <td> <?= _ent($tbl_korduk_akta_kematian->jenis_kelamin); ?></td>
                    </tr>
                  </tbody>
                </table>
                </div>
                 <div class="form-horizontal" name="form_tbl_korduk_akta_kematian" id="form_tbl_korduk_akta_kematian" >
                   <div class="col-lg-6">
                   <table class="table table-striped">
                  <tbody>
                    <tr>
                      <td>Form F-2.29</td>
                      <td><?php if (is_image($tbl_korduk_akta_kematian->form_f229)): ?>
                              <a class="fancybox" rel="group" href="<?= BASE_URL . 'uploads/tbl_korduk_akta_kematian/' . $tbl_korduk_akta_kematian->form_f229; ?>">
                                <img src="<?= BASE_URL . 'uploads/tbl_korduk_akta_kematian/' . $tbl_korduk_akta_kematian->form_f229; ?>" class="image-responsive" alt="image tbl_korduk_akta_kematian" title="form_f229 tbl_korduk_akta_kematian" width="40px">
                              </a>
                              <?php else: ?>
                              <label>
                                <a href="<?= BASE_URL . 'administrator/file/download/tbl_korduk_akta_kematian/' . $tbl_korduk_akta_kematian->form_f229; ?>">
                                 <img src="<?= get_icon_file($tbl_korduk_akta_kematian->form_f229); ?>" class="image-responsive" alt="image tbl_korduk_akta_kematian" title="form_f229 <?= $tbl_korduk_akta_kematian->form_f229; ?>" width="40px"> 
                               <?= $tbl_korduk_akta_kematian->form_f229 ?>
                               </a>
                               </label>
                              <?php endif; ?></td>

                    </tr>
                    <tr>
                      <td>KK </td>
                      <td><?php if (is_image($tbl_korduk_akta_kematian->kk)): ?>
                              <a class="fancybox" rel="group" href="<?= BASE_URL . 'uploads/tbl_korduk_akta_kematian/' . $tbl_korduk_akta_kematian->kk; ?>">
                                <img src="<?= BASE_URL . 'uploads/tbl_korduk_akta_kematian/' . $tbl_korduk_akta_kematian->kk; ?>" class="image-responsive" alt="image tbl_korduk_akta_kematian" title="kk tbl_korduk_akta_kematian" width="40px">
                              </a>
                              <?php else: ?>
                              <label>
                                <a href="<?= BASE_URL . 'administrator/file/download/tbl_korduk_akta_kematian/' . $tbl_korduk_akta_kematian->kk; ?>">
                                 <img src="<?= get_icon_file($tbl_korduk_akta_kematian->kk); ?>" class="image-responsive" alt="image tbl_korduk_akta_kematian" title="kk <?= $tbl_korduk_akta_kematian->kk; ?>" width="40px"> 
                               <?= $tbl_korduk_akta_kematian->kk ?>
                               </a>
                               </label>
                              <?php endif; ?></td>
                      
                    </tr>
                    <tr>
                      <td>KTP</td>
                      <td>  <?php if (is_image($tbl_korduk_akta_kematian->ktp)): ?>
                              <a class="fancybox" rel="group" href="<?= BASE_URL . 'uploads/tbl_korduk_akta_kematian/' . $tbl_korduk_akta_kematian->ktp; ?>">
                                <img src="<?= BASE_URL . 'uploads/tbl_korduk_akta_kematian/' . $tbl_korduk_akta_kematian->ktp; ?>" class="image-responsive" alt="image tbl_korduk_akta_kematian" title="ktp tbl_korduk_akta_kematian" width="40px">
                              </a>
                              <?php else: ?>
                              <label>
                                <a href="<?= BASE_URL . 'administrator/file/download/tbl_korduk_akta_kematian/' . $tbl_korduk_akta_kematian->ktp; ?>">
                                 <img src="<?= get_icon_file($tbl_korduk_akta_kematian->ktp); ?>" class="image-responsive" alt="image tbl_korduk_akta_kematian" title="ktp <?= $tbl_korduk_akta_kematian->ktp; ?>" width="40px"> 
                               <?= $tbl_korduk_akta_kematian->ktp ?>
                               </a>
                               </label>
                              <?php endif; ?></td>
                    </tr>
                    <tr>
                      <td>Suket Kematian </td>
                      <td> <?php if (is_image($tbl_korduk_akta_kematian->suket_kematian)): ?>
                              <a class="fancybox" rel="group" href="<?= BASE_URL . 'uploads/tbl_korduk_akta_kematian/' . $tbl_korduk_akta_kematian->suket_kematian; ?>">
                                <img src="<?= BASE_URL . 'uploads/tbl_korduk_akta_kematian/' . $tbl_korduk_akta_kematian->suket_kematian; ?>" class="image-responsive" alt="image tbl_korduk_akta_kematian" title="suket_kematian tbl_korduk_akta_kematian" width="40px">
                              </a>
                              <?php else: ?>
                              <label>
                                <a href="<?= BASE_URL . 'administrator/file/download/tbl_korduk_akta_kematian/' . $tbl_korduk_akta_kematian->suket_kematian; ?>">
                                 <img src="<?= get_icon_file($tbl_korduk_akta_kematian->suket_kematian); ?>" class="image-responsive" alt="image tbl_korduk_akta_kematian" title="suket_kematian <?= $tbl_korduk_akta_kematian->suket_kematian; ?>" width="40px"> 
                               <?= $tbl_korduk_akta_kematian->suket_kematian ?>
                               </a>
                               </label>
                              <?php endif; ?>
                        </div></td>
                    </tr>
                     <tr>
                      <td>Created By </td>
                      <td> <?= _ent($tbl_korduk_akta_kematian->created_by); ?></td>
                    </tr>
                     <tr>
                      <td>Creation Date </td>
                      <td><?= _ent($tbl_korduk_akta_kematian->creation_date); ?></td>
                    </tr>
                     <tr>
                      <td>Updated By  </td>
                      <td><?= _ent($tbl_korduk_akta_kematian->updated_by); ?></td>
                    </tr>
                     <tr>
                      <td>Last Updated Date</td>
                      <td> <?= _ent($tbl_korduk_akta_kematian->last_updated_date); ?></td>
                    </tr>
                  </tbody>
                </table>
                </div>              
                    <br>
                    <br>

                    <div class="view-nav">
                        <?php is_allowed('tbl_korduk_akta_kematian_update', function() use ($tbl_korduk_akta_kematian){?>
                        <a class="btn btn-flat btn-info btn_edit btn_action" id="btn_edit" data-stype='back' title="edit tbl_korduk_akta_kematian (Ctrl+e)" href="<?= site_url('tbl_korduk_akta_kematian/edit/'.$tbl_korduk_akta_kematian->id); ?>"><i class="fa fa-edit" ></i> <?= cclang('update', ['Tbl Korduk Akta Kematian']); ?> </a>
                        <?php }) ?>
                        <a class="btn btn-flat btn-default btn_action" id="btn_back" title="back (Ctrl+x)" href="<?= site_url('tbl_korduk_akta_kematian/'); ?>"><i class="fa fa-undo" ></i> <?= cclang('go_list_button', ['Tbl Korduk Akta Kematian']); ?></a>
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

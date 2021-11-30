
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
                     <h3 class="widget-user-username"><b>Adminduk Akta Perceraian</b></h3>
                     <h5 class="widget-user-desc">Detail Adminduk Akta Perceraian</h5>
                     <hr>
                  </div>

                 
                  <div class="form-horizontal" name="form_tbl_korduk_akta_perceraian" id="form_tbl_korduk_akta_perceraian" >
                      
                   <table class="table table-striped">
                  <tbody>
                    <tr>
                      <td>NIK</td>
                      <td><?= _ent($tbl_korduk_akta_perceraian->nik); ?></td>
                    </tr>
                    <tr>
                      <td>Nama</td>
                      <td><?= _ent($tbl_korduk_akta_perceraian->nama); ?></td>
                    </tr>
                    <tr>
                      <td>Alamat </td>
                      <td> <?= _ent($tbl_korduk_akta_perceraian->alamat); ?></td>
                    </tr>
                    <tr>
                      <td>Jenis Kelamin </td>
                      <td><?= _ent($tbl_korduk_akta_perceraian->jenis_kelamin); ?></td>
                    </tr>
                    <tr>
                      <td>Jenis Kelamin </td>
                      <td><?= _ent($tbl_korduk_akta_perceraian->jenis_kelamin); ?></td>
                    </tr>
                    <tr>
                      <td>Form F-2.19 </td>
                      <td><?php if (is_image($tbl_korduk_akta_perceraian->form)): ?>
                              <a class="fancybox" rel="group" href="<?= BASE_URL . 'uploads/tbl_korduk_akta_perceraian/' . $tbl_korduk_akta_perceraian->form; ?>">
                                <img src="<?= BASE_URL . 'uploads/tbl_korduk_akta_perceraian/' . $tbl_korduk_akta_perceraian->form; ?>" class="image-responsive" alt="image tbl_korduk_akta_perceraian" title="form tbl_korduk_akta_perceraian" width="40px">
                              </a>
                              <?php else: ?>
                              <label>
                                <a href="<?= BASE_URL . 'administrator/file/download/tbl_korduk_akta_perceraian/' . $tbl_korduk_akta_perceraian->form; ?>">
                                 <img src="<?= get_icon_file($tbl_korduk_akta_perceraian->form); ?>" class="image-responsive" alt="image tbl_korduk_akta_perceraian" title="form <?= $tbl_korduk_akta_perceraian->form; ?>" width="40px"> 
                               <?= $tbl_korduk_akta_perceraian->form ?>
                               </a>
                               </label>
                              <?php endif; ?></td>
                    </tr><tr>
                      <td>KTP Suami </td>
                      <td><?php if (is_image($tbl_korduk_akta_perceraian->ktp_suami)): ?>
                              <a class="fancybox" rel="group" href="<?= BASE_URL . 'uploads/tbl_korduk_akta_perceraian/' . $tbl_korduk_akta_perceraian->ktp_suami; ?>">
                                <img src="<?= BASE_URL . 'uploads/tbl_korduk_akta_perceraian/' . $tbl_korduk_akta_perceraian->ktp_suami; ?>" class="image-responsive" alt="image tbl_korduk_akta_perceraian" title="ktp_suami tbl_korduk_akta_perceraian" width="40px">
                              </a>
                              <?php else: ?>
                              <label>
                                <a href="<?= BASE_URL . 'administrator/file/download/tbl_korduk_akta_perceraian/' . $tbl_korduk_akta_perceraian->ktp_suami; ?>">
                                 <img src="<?= get_icon_file($tbl_korduk_akta_perceraian->ktp_suami); ?>" class="image-responsive" alt="image tbl_korduk_akta_perceraian" title="ktp_suami <?= $tbl_korduk_akta_perceraian->ktp_suami; ?>" width="40px"> 
                               <?= $tbl_korduk_akta_perceraian->ktp_suami ?>
                               </a>
                               </label>
                              <?php endif; ?></td>
                    </tr>
                    <tr>
                      <td>KTP Istri </td>
                      <td> <?php if (is_image($tbl_korduk_akta_perceraian->ktp_istri)): ?>
                              <a class="fancybox" rel="group" href="<?= BASE_URL . 'uploads/tbl_korduk_akta_perceraian/' . $tbl_korduk_akta_perceraian->ktp_istri; ?>">
                                <img src="<?= BASE_URL . 'uploads/tbl_korduk_akta_perceraian/' . $tbl_korduk_akta_perceraian->ktp_istri; ?>" class="image-responsive" alt="image tbl_korduk_akta_perceraian" title="ktp_istri tbl_korduk_akta_perceraian" width="40px">
                              </a>
                              <?php else: ?>
                              <label>
                                <a href="<?= BASE_URL . 'administrator/file/download/tbl_korduk_akta_perceraian/' . $tbl_korduk_akta_perceraian->ktp_istri; ?>">
                                 <img src="<?= get_icon_file($tbl_korduk_akta_perceraian->ktp_istri); ?>" class="image-responsive" alt="image tbl_korduk_akta_perceraian" title="ktp_istri <?= $tbl_korduk_akta_perceraian->ktp_istri; ?>" width="40px"> 
                               <?= $tbl_korduk_akta_perceraian->ktp_istri ?>
                               </a>
                               </label>
                              <?php endif; ?></td>
                    </tr>
                     <tr>
                      <td> Putusan Pengadilan </td>
                      <td><?php if (is_image($tbl_korduk_akta_perceraian->putusan_pengadilan)): ?>
                              <a class="fancybox" rel="group" href="<?= BASE_URL . 'uploads/tbl_korduk_akta_perceraian/' . $tbl_korduk_akta_perceraian->putusan_pengadilan; ?>">
                                <img src="<?= BASE_URL . 'uploads/tbl_korduk_akta_perceraian/' . $tbl_korduk_akta_perceraian->putusan_pengadilan; ?>" class="image-responsive" alt="image tbl_korduk_akta_perceraian" title="putusan_pengadilan tbl_korduk_akta_perceraian" width="40px">
                              </a>
                              <?php else: ?>
                              <label>
                                <a href="<?= BASE_URL . 'administrator/file/download/tbl_korduk_akta_perceraian/' . $tbl_korduk_akta_perceraian->putusan_pengadilan; ?>">
                                 <img src="<?= get_icon_file($tbl_korduk_akta_perceraian->putusan_pengadilan); ?>" class="image-responsive" alt="image tbl_korduk_akta_perceraian" title="putusan_pengadilan <?= $tbl_korduk_akta_perceraian->putusan_pengadilan; ?>" width="40px"> 
                               <?= $tbl_korduk_akta_perceraian->putusan_pengadilan ?>
                               </a>
                               </label>
                              <?php endif; ?></td>
                    </tr> <tr>
                      <td>Akta Pernikahan </td>
                      <td> <?php if (is_image($tbl_korduk_akta_perceraian->akta_pernikahan)): ?>
                              <a class="fancybox" rel="group" href="<?= BASE_URL . 'uploads/tbl_korduk_akta_perceraian/' . $tbl_korduk_akta_perceraian->akta_pernikahan; ?>">
                                <img src="<?= BASE_URL . 'uploads/tbl_korduk_akta_perceraian/' . $tbl_korduk_akta_perceraian->akta_pernikahan; ?>" class="image-responsive" alt="image tbl_korduk_akta_perceraian" title="akta_pernikahan tbl_korduk_akta_perceraian" width="40px">
                              </a>
                              <?php else: ?>
                              <label>
                                <a href="<?= BASE_URL . 'administrator/file/download/tbl_korduk_akta_perceraian/' . $tbl_korduk_akta_perceraian->akta_pernikahan; ?>">
                                 <img src="<?= get_icon_file($tbl_korduk_akta_perceraian->akta_pernikahan); ?>" class="image-responsive" alt="image tbl_korduk_akta_perceraian" title="akta_pernikahan <?= $tbl_korduk_akta_perceraian->akta_pernikahan; ?>" width="40px"> 
                               <?= $tbl_korduk_akta_perceraian->akta_pernikahan ?>
                               </a>
                               </label>
                              <?php endif; ?></td>
                    </tr> <tr>
                      <td>Created By</td>
                      <td><?= _ent($tbl_korduk_akta_perceraian->created_by); ?></td>
                    </tr>
                    <tr>
                      <td>Creation Date</td>
                      <td> <?= _ent($tbl_korduk_akta_perceraian->creation_date); ?></td>
                    </tr>
                    <tr>
                      <td>Last Updated By </td>
                      <td>  <?= _ent($tbl_korduk_akta_perceraian->last_updated_by); ?></td>
                    </tr>
                    <tr>
                      <td>Last Updated Date <</td>
                      <td> <?= _ent($tbl_korduk_akta_perceraian->last_updated_date); ?></td>
                    </tr>
                  </tbody>
                </table>             
                    <br>
                    <br>

                    <div class="view-nav">
                        <?php is_allowed('tbl_korduk_akta_perceraian_update', function() use ($tbl_korduk_akta_perceraian){?>
                        <a class="btn btn-flat btn-info btn_edit btn_action" id="btn_edit" data-stype='back' title="edit tbl_korduk_akta_perceraian (Ctrl+e)" href="<?= site_url('tbl_korduk_akta_perceraian/edit/'.$tbl_korduk_akta_perceraian->id); ?>"><i class="fa fa-edit" ></i> <?= cclang('update', ['Tbl Korduk Akta Perceraian']); ?> </a>
                        <?php }) ?>
                        <a class="btn btn-flat btn-default btn_action" id="btn_back" title="back (Ctrl+x)" href="<?= site_url('tbl_korduk_akta_perceraian/'); ?>"><i class="fa fa-undo" ></i> <?= cclang('go_list_button', ['Tbl Korduk Akta Perceraian']); ?></a>
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

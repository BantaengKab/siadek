
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
                     <h3 class="widget-user-username"><b>Umkm</b></h3>
                     <h5 class="widget-user-desc">Detail Umkm</h5>
                     <hr>
                  </div>

                 
                  <div class="form-horizontal" name="form_umkm" id="form_umkm" >
                 
                  <div class="col-lg-6">  
                <table class="table table-striped">
                <tbody>
                        <tr>
                      <td>Kd Wilayah</td>
                      <td> <?= _ent($umkm->kd_wilayah); ?></td>
                    </tr>
                    <tr>
                      <td>Nama Pelaku Usaha</td>
                      <td><?= _ent($umkm->nama_pelaku_usaha); ?></td>
                    </tr>
                    <tr>
                      <td>NIK</td>
                      <td>
                           <?= _ent($umkm->nik); ?></td>
                    </tr>
                    
                    <tr>
                      <td>Jenis Kelamin</td>
                      <td>   <?= _ent($umkm->jenis_kelamin); ?></td>
                    </tr>
                     <tr>
                      <td>PR</td>
                      <td><?= _ent($umkm->pr); ?></td>
                    </tr>
                    
                     <tr>
                      <td>JS</td>
                      <td> <?= _ent($umkm->js); ?></td>
                    </tr>
                    <tr>
                      <td>PD</td>
                      <td> <?= _ent($umkm->pd); ?></td>
                    </tr>
                    <tr>
                      <td>WR</td>
                      <td><?= _ent($umkm->wr); ?></td>
                    </tr>
                    <tr>
                      <td>BD</td>
                      <td><?= _ent($umkm->bd); ?></td>
                    </tr>
                    <tr>
                      <td>Jenis Usaha</td>
                      <td> <?= _ent($umkm->jenis_usaha); ?></td>
                    </tr>
                    <tr>
                      <td>Manusia</td>
                      <td><?= _ent($umkm->manusia); ?></td>
                    </tr>
                    <tr>
                      <td>Alam</td>
                      <td><?= _ent($umkm->alam); ?></td>
                    </tr>
                    
                     
                  </tbody>
                </table>
               </div>
                <div class="col-lg-6">  
                <table class="table table-striped">
                <tbody>
                <tr>
                      <td>Lahan Bagunan</td>
                      <td><?= _ent($umkm->lahan_bagunan); ?></td>
                     </tr>
                    <tr>
                      <td>Mesin Alat</td>
                      <td> <?= _ent($umkm->mesin_alat); ?></td>
                     </tr>
                     <tr>
                      <td>Finansial </td>
                      <td><?= _ent($umkm->finansial); ?></td>
                     </tr>
                     <tr>
                      <td>Ket Finansial </td>
                      <td>
                     <?php $uang=$umkm->finansial; ?><?php echo "Rp " . number_format("$uang", 2, ",", "."); ?></td>
                     </tr>
                     <tr>
                      <td>Pasar</td>
                      <td>
                      <?= _ent($umkm->pasar); ?></td>
                     </tr>
                <tr>
                      <td>Mitra</td>
                      <td>
                      <?= _ent($umkm->mitra); ?></td>
                     </tr>
                     <tr>
                      <td>Lokasi</td>
                      <td>
                     <?= _ent($umkm->lokasi); ?></td>
                     </tr>
                     <tr>
                      <td>Bentuk Orang</td>
                      <td>
                      <?= _ent($umkm->bentuk_org); ?></td>
                     </tr>
                     <tr>
                      <td>Kegiatan</td>
                      <td>
                      <?= _ent($umkm->kegiatan); ?></td>
                     </tr>
                     <tr>
                      <td>Mulai Usaha</td>
                      <td>
                      <?= _ent($umkm->mulai_usaha); ?></td>
                     </tr>
                     <tr>
                      <td>Moral</td>
                      <td>
                     <?= _ent($umkm->moral); ?></td>
                     </tr>
                     <tr>
                      <td>Aturan</td>
                      <td>
                     
                      <?= _ent($umkm->aturan); ?></td>
                     </tr>
                </tbody>
                </table>
                </div>            
                    <br>
                    <br>

                    <div class="view-nav">
                        <?php is_allowed('umkm_update', function() use ($umkm){?>
                        <a class="btn btn-flat btn-info btn_edit btn_action" id="btn_edit" data-stype='back' title="edit umkm (Ctrl+e)" href="<?= site_url('umkm/edit/'.$umkm->id_umkm); ?>"><i class="fa fa-edit" ></i> <?= cclang('update', ['Umkm']); ?> </a>
                        <?php }) ?>
                        <a class="btn btn-flat btn-default btn_action" id="btn_back" title="back (Ctrl+x)" href="<?= site_url('umkm/'); ?>"><i class="fa fa-undo" ></i> <?= cclang('go_list_button', ['Umkm']); ?></a>
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

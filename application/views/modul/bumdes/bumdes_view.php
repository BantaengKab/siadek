
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
                     <h3 class="widget-user-username"><b>Bumdes</b></h3>
                     <h5 class="widget-user-desc">Detail Bumdes</h5>
                     <hr>
                  </div>

                 
                  <div class="form-horizontal" name="form_bumdes" id="form_bumdes" >
                  <div class="col-lg-12">  
                <table class="table table-striped">
                <tbody>
                        <tr>
                      <td>Kd Wilayah</td>
                      <td> <?= _ent($bumdes->kd_wilayah); ?></td>
                    </tr>
                    <tr>
                      <td>Periode</td>
                      <td><?= _ent($bumdes->periode); ?></td>
                    </tr>
                    <tr>
                      <td>Jenis BUMDes</td>
                      <td>
                      <?= _ent($bumdes->jenis_BUMDes); ?></td>
                    </tr>
                    
                    <tr>
                      <td>Nama BUMDes</td>
                      <td>    <?= _ent($bumdes->nama_BUMDes); ?></td>
                    </tr>
                     <tr>
                      <td>Pengelolah</td>
                      <td> <?= _ent($bumdes->pengelolah); ?></td>
                    </tr>
                    
                     <tr>
                      <td>Jabatan</td>
                      <td><?= _ent($bumdes->jabatan); ?></td>
                    </tr>
                    <tr>
                      <td>Tanggal Pendirian</td>
                      <td> <?= _ent($bumdes->tanggal_pendirian); ?></td>
                    </tr>
                    <tr>
                      <td>Perdes</td>
                      <td> <?= _ent($bumdes->perdes); ?></td>
                    </tr>
                    <tr>
                      <td>Jenis Kegiatan</td>
                      <td> <?= _ent($bumdes->jenis_kegiatan); ?></td>
                    </tr>
                    <tr>
                      <td>Status</td>
                      <td> <?= _ent($bumdes->status); ?></td>
                    </tr>                     
                  </tbody>
                </table>
               </div>

                    <br>
                    <br>

                    <div class="view-nav">
                        <?php is_allowed('bumdes_update', function() use ($bumdes){?>
                        <a class="btn btn-flat btn-info btn_edit btn_action" id="btn_edit" data-stype='back' title="edit bumdes (Ctrl+e)" href="<?= site_url('bumdes/edit/'.$bumdes->id_BUMDes); ?>"><i class="fa fa-edit" ></i> <?= cclang('update', ['Bumdes']); ?> </a>
                        <?php }) ?>
                        <a class="btn btn-flat btn-default btn_action" id="btn_back" title="back (Ctrl+x)" href="<?= site_url('bumdes/'); ?>"><i class="fa fa-undo" ></i> <?= cclang('go_list_button', ['Bumdes']); ?></a>
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

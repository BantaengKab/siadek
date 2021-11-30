
<script src="<?= BASE_ASSET; ?>/js/jquery.hotkeys.js"></script>

<script type="text/javascript">
//This page is a result of an autogenerated content made by running test.html with firefox.
function domo(){
 
   // Binding keys
   $('*').bind('keydown', 'Ctrl+a', function assets() {
       window.location.href = BASE_URL + '/depag/add';
       return false;
   });

   $('*').bind('keydown', 'Ctrl+f', function assets() {
       $('#sbtn').trigger('click');
       return false;
   });

   $('*').bind('keydown', 'Ctrl+x', function assets() {
       $('#reset').trigger('click');
       return false;
   });

   $('*').bind('keydown', 'Ctrl+b', function assets() {

       $('#reset').trigger('click');
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
                     <!--<div class="row pull-right">-->
                     <!--   <?php is_allowed('depag_add', function(){?>-->
                     <!--   <a class="btn btn-flat btn-success btn_add_new" id="btn_add_new" title="Tambah Data  (Ctrl+a)" href="<?=  site_url('depag/add'); ?>"><i class="fa fa-plus-square-o" ></i> Tambah Data</a>-->
                     <!--   <?php }) ?>-->
                     <!--   <?php is_allowed('depag_export', function(){?>-->
                     <!--   <a class="btn btn-flat btn-success" title="<?= cclang('export'); ?> XLS" href="<?= site_url('depag/export'); ?>"><i class="fa fa-file-excel-o" ></i></a>-->
                     <!--   <?php }) ?>-->
                       
                     <!--</div>-->
                     <div class="widget-user-image">
                        <img class="img-circle" src="<?= BASE_ASSET; ?>/img/list.png" alt="User Avatar">
                     </div>
                     <!-- /.widget-user-image -->
                     <h3 class="widget-user-username"><b>Layanan Depag</b></h3>
                     <h5 class="widget-user-desc"><?= cclang('list_all', ['Layanan']); ?>  <i class="label bg-yellow"><?= $depag_counts; ?>  <?= cclang('items'); ?></i></h5>
                  </div>
                
                  <form name="form_depag" id="form_depag" action="<?= base_url('depag/index'); ?>">
                    <br>
                  <div class="table-responsive"> 
                  <table class="table table-bordered table-striped dataTable">
                     <thead>
                        <tr class="">
                           <th width="7%">
                            <input type="checkbox" class="flat-red toltip" id="check_all" name="check_all" title="check all">
                           </th>
                           <th style="text-align:center" width="5%">No</th>
                           <th style="text-align:center">Jenis</th>
                           <th style="text-align:center" >Pria Nik</th>
                           <th style="text-align:center" width="30%">Pria Nama Lengkap</th>
                           <th style="text-align:center" >Wanita Nik</th>
                           <th style="text-align:center" width="40%">Wanita Nama Lengkap</th>
                           <th style="text-align:center" width="10%">Waktu</th>
                            <th style="text-align:center" width="20%">Status</th>
                        </tr>
                     </thead>
                     <tbody id="tbody_depag">
                     <?php foreach($depags as $depag): ?>
                        <tr>
                           <td width="5">
                              <input type="checkbox" class="flat-red check" name="id[]" value="<?= $depag['no']; ?>">
                           </td>
                           
                           <td style="text-align:center"><?= _ent($depag['no']); ?></td> 
                           <td style="text-align:center"><?= _ent($depag['jenis']); ?></td>
                            <td style="text-align:center"><?= _ent($depag['pria_nik']); ?></td> 
                            <td style="text-align:center"><?= _ent($depag['pria_nama_lengkap']); ?></td> 
                            <td style="text-align:center"><?= _ent($depag['wanita_nik']); ?></td> 
                            <td style="text-align:center"><?= _ent($depag['wanita_nama_lengkap']); ?></td> 
                            <td style="text-align:center"><?= _ent($depag['waktu']); ?></td> 
                            <td style="text-align:center">-</td> 
                          
                        </tr>
                      <?php endforeach; ?>
                      <?php if ($depag_counts == 0) :?>
                         <tr>
                           <td colspan="100">
                           API Dalam Proses Pengembangan
                           </td>
                         </tr>
                      <?php endif; ?>
                     </tbody>
                  </table>
                  </div>
               </div>
               <hr>
             
            </div>
            <!--/box body -->
         </div>
         <!--/box -->
      </div>
   </div>
</section>
<!-- /.content -->


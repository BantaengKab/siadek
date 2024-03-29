
<script src="<?= BASE_ASSET; ?>/js/jquery.hotkeys.js"></script>

<script type="text/javascript">
//This page is a result of an autogenerated content made by running test.html with firefox.
function domo(){
 
   // Binding keys
   $('*').bind('keydown', 'Ctrl+a', function assets() {
       window.location.href = BASE_URL + '/Art_dtks/add';
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
                     <div class="row pull-right">
                        <?php is_allowed('art_dtks_add', function(){?>
                        <a class="btn btn-flat btn-success btn_add_new" id="btn_add_new" title="Tambah Data  (Ctrl+a)" href="<?=  site_url('art_dtks/add'); ?>"><i class="fa fa-plus-square-o" ></i> Tambah Data</a>
                        <?php }) ?>

                         <?php is_allowed('art_dtks_import', function(){?>
                        <a class="btn btn-flat btn-info" title="<?= cclang('import'); ?> Import" href="<?= site_url('art_dtks/import'); ?>"><i class="fa fa-file-excel-o" ></i></a>
                        <?php }) ?>
                        <?php is_allowed('art_dtks_export', function(){?>
                        <a class="btn btn-flat btn-success" title="<?= cclang('export'); ?> XLS" href="<?= site_url('art_dtks/export'); ?>"><i class="fa fa-file-excel-o" ></i></a>
                        <?php }) ?>
                        <?php is_allowed('art_dtks_export', function(){?>
                        <a class="btn btn-flat btn-success" title="<?= cclang('export'); ?> PDF" href="<?= site_url('art_dtks/export_pdf'); ?>"><i class="fa fa-file-pdf-o" ></i></a>
                        <?php }) ?>
                     </div>
                     <div class="widget-user-image">
                        <img class="img-circle" src="<?= BASE_ASSET; ?>/img/list.png" alt="User Avatar">
                     </div>
                     <!-- /.widget-user-image -->
                     <h3 class="widget-user-username"><b>Art Dtks</b></h3>
                     <h5 class="widget-user-desc"><?= cclang('list_all', ['Art Dtks']); ?>  <i class="label bg-yellow"><?= $art_dtks_counts; ?>  <?= cclang('items'); ?></i></h5>
                  </div>
                  <br>
                  <form name="form_art_dtks" id="form_art_dtks" method='get' action="<?= base_url('art_dtks/index'); ?>">
                                       <div class="row">
                    <div class="form-group ">
                      <br>
                            
                        </div>
                  </div>
                  
                   <div class="row">
                    <div class="form-group ">
                          
                            <div class="col-sm-3">
                              <?php 
                                  $username = get_user_data('id'); 
                                    $user_gr = get_user_group($username);
                                    $kdwilayah = get_user_data('kd_wilayah');
                                    if($user_gr == '1' || $user_gr == '9'){
                                  $a = db_get_all_data('wilayah');
                                }else{
                                 $a = db_get_all_data('wilayah',"kd_wilayah LIKE '$kdwilayah%'");
                                }
                                
                              ?>
                                <select  class="form-control chosen chosen-select-deselect" name="kd_wilayah" id="kd_wilayah" data-placeholder="PILIH wilayah" onchange="submit()">
                                 
                                  <?php  $username = get_user_data('id'); 
                                    $user_gr = get_user_group($username);
                                    if($user_gr == '1' || $user_gr == '9' || $user_gr == '7'){ ?>
                                    <option value="0"></option>
                                  <?php } ?>

                                  <?php foreach ($a as $row): ?>
                                    
                                    <option 
                                    <?php if ($row->kd_wilayah == $this->input->get('kd_wilayah')) { ?>selected="selected"<?php } ?>
                                    value="<?= $row->kd_wilayah ?>"><?= '[ '.$row->kd_wilayah.' ] '. $row->nama ?></option>
                                    <?php endforeach; ?>  
                                </select>
                                <small class="info help-block">
                                </small>
                            </div>
                            
                           
                        </div>
                  </div>

                  <div class="table-responsive"> 
                    <table class="table table-bordered table-striped dataTable" >
                     <thead>
                        <tr class="">
                           <th>
                            <input type="checkbox" class="flat-red toltip" id="check_all" name="check_all" title="check all">
                           </th>
                           <th style="text-align:center" width='25%'>Nama</th>
                           <th style="text-align:center" width='15%'>NIK</th>
                           <th style="text-align:center">Sta Keberadaan Art</th>
                           <th style="text-align:center">Sta Kepesertaan Pbi</th>
                           <th style="text-align:center">KKS</th>
                           <th style="text-align:center">PBI</th>
                           <th style="text-align:center">KIP</th>
                           <th style="text-align:center">PKH</th>
                           <th style="text-align:center">BPNT</th>
                           <th style="text-align:center" width='10%'>Action</th>
                        </tr>
                     </thead>
                     <tbody id="tbody_art_dtks">
                     <?php foreach($art_dtkss as $art_dtks): ?>
                        <tr>
                           <td width="5">
                              <input type="checkbox" class="flat-red check" name="id[]" value="<?= $art_dtks->id_art_dtks; ?>">
                           </td>
                           
                           <td><?= _ent($art_dtks->Nama); ?></td> 
                           <td><?php echo substr($art_dtks->NIK,0,6);?>******* </td> 
                           <td style="text-align:center"><? if($art_dtks->Sta_keberadaan_art ==1){echo '<button class="border-0 btn-transition bg-olive  btn btn-outline-success">
                                                                <i class="fa fa-check">';}else{echo '<button class="border-0 btn-transition btn-danger  btn btn-outline-success">
                                                                <i class=" fa fa-remove">';}; ?>
                           </td> 
                           <td style="text-align:center"><?php if($art_dtks->Sta_kepesertaan_pbi==1){echo '<button class="border-0 btn-transition bg-olive  btn btn-outline-success">
                                                                <i class="fa fa-check">';}else {echo '<button class="border-0 btn-transition btn-danger  btn btn-outline-success">
                                                                <i class=" fa fa-remove">';}; ?></td> 
                           <td><?php if($art_dtks->Ada_kks==1){echo '<button class="border-0 btn-transition bg-olive  btn btn-outline-success">
                                                                <i class="fa fa-check">';}else {echo '<button class="border-0 btn-transition btn-danger  btn btn-outline-success">
                                                                <i class=" fa fa-remove">';}; ?></td> 
                           <td><?php if($art_dtks->Ada_pbi==1){echo '<button class="border-0 btn-transition bg-olive  btn btn-outline-success">
                                                                <i class="fa fa-check">';}else {echo '<button class="border-0 btn-transition btn-danger  btn btn-outline-success">
                                                                <i class=" fa fa-remove">';}; ?></td> 
                           <td><?php if($art_dtks->Ada_kip==1){echo '<button class="border-0 btn-transition bg-olive  btn btn-outline-success">
                                                                <i class="fa fa-check">';}else{echo '<button class="border-0 btn-transition btn-danger  btn btn-outline-success">
                                                                <i class=" fa fa-remove">';}; ?></td> 
                           <td><?php if($art_dtks->Ada_pkh==1){echo '<button class="border-0 btn-transition bg-olive  btn btn-outline-success">
                                                                <i class="fa fa-check">';}else{echo '<button class="border-0 btn-transition btn-danger  btn btn-outline-success">
                                                                <i class=" fa fa-remove">';}; ?></td> 
                           <td>
                            <?php if($art_dtks->Ada_BPNT==1){echo '<button class="border-0 btn-transition bg-olive  btn btn-outline-success">
                                                                <i class="fa fa-check">';}else{echo '<button class="border-0 btn-transition btn-danger  btn btn-outline-success">
                                                                <i class=" fa fa-remove">';}; ?>
                            </td> 
                           <td>
                              <?php is_allowed('art_dtks_view', function() use ($art_dtks){?>
                              <a href="<?= site_url('art_dtks/view/' . $art_dtks->id_art_dtks); ?>" title="Lihat" class="label-default"><i class="fa fa-newspaper-o"></i> 
                              <?php }) ?>
                              <?php is_allowed('art_dtks_update', function() use ($art_dtks){?>
                              <a href="<?= site_url('art_dtks/edit/' . $art_dtks->id_art_dtks); ?>" title="Ubah" class="label-default"><i class="fa fa-edit "></i> </a>
                              <?php }) ?>
                              <?php is_allowed('art_dtks_delete', function() use ($art_dtks){?>
                              <a href="javascript:void(0);" data-href="<?= site_url('art_dtks/delete/' . $art_dtks->id_art_dtks); ?>" title="Hapus" class="label-default remove-data"><i class="fa fa-close" style="color: red"></i> </a>
                               <?php }) ?>
                           </td>
                        </tr>
                      <?php endforeach; ?>
                      <?php if ($art_dtks_counts == 0) :?>
                         <tr>
                           <td colspan="100">
                           Art Dtks data is not available
                           </td>
                         </tr>
                      <?php endif; ?>
                     </tbody>
                  </table>
                  </div>
               </div>
               <hr>
               <!-- /.widget-user -->
               <div class="row">
                  <div class="col-md-8">
                     <div class="col-sm-2 padd-left-0 " >
                        <select type="text" class="form-control chosen chosen-select" name="bulk" id="bulk" placeholder="Site Email" >
                           <!--<option value="">Bulk</option>-->
                           <option value="delete" selected="selected">Hapus</option>
                        </select>
                     </div>
                     <div class="col-sm-2 padd-left-0 ">
                        <button type="button" class="btn btn-flat" name="apply" id="apply" title="<?= cclang('apply_bulk_action'); ?>"><?= cclang('apply_button'); ?></button>
                     </div>
                     <div class="col-sm-3 padd-left-0  " >
                        <input type="text" class="form-control" name="q" id="filter" placeholder="<?= cclang('filter'); ?>" value="<?= $this->input->get('q'); ?>">
                     </div>
                     <div class="col-sm-3 padd-left-0 " >
                        <select type="text" class="form-control chosen chosen-select" name="f" id="field" >
                           <option value=""><?= cclang('all'); ?></option>
                            <option <?= $this->input->get('f') == 'kd_wilayah' ? 'selected' :''; ?> value="kd_wilayah">Kd Wilayah</option>
                           <option <?= $this->input->get('f') == 'IDBDT' ? 'selected' :''; ?> value="IDBDT">IDBDT</option>
                           <option <?= $this->input->get('f') == 'IDARTBDT' ? 'selected' :''; ?> value="IDARTBDT">IDARTBDT</option>
                           <option <?= $this->input->get('f') == 'KDPROP' ? 'selected' :''; ?> value="KDPROP">KDPROP</option>
                           <option <?= $this->input->get('f') == 'KDKAB' ? 'selected' :''; ?> value="KDKAB">KDKAB</option>
                           <option <?= $this->input->get('f') == 'KDKEC' ? 'selected' :''; ?> value="KDKEC">KDKEC</option>
                           <option <?= $this->input->get('f') == 'KDDESA' ? 'selected' :''; ?> value="KDDESA">KDDESA</option>
                           <option <?= $this->input->get('f') == 'NoPesertaPKH' ? 'selected' :''; ?> value="NoPesertaPKH">NoPesertaPKH</option>
                           <option <?= $this->input->get('f') == 'Nama' ? 'selected' :''; ?> value="Nama">Nama</option>
                           <option <?= $this->input->get('f') == 'JnsKel' ? 'selected' :''; ?> value="JnsKel">JnsKel</option>
                           <option <?= $this->input->get('f') == 'TmpLahir' ? 'selected' :''; ?> value="TmpLahir">TmpLahir</option>
                           <option <?= $this->input->get('f') == 'TglLahir' ? 'selected' :''; ?> value="TglLahir">TglLahir</option>
                           <option <?= $this->input->get('f') == 'HubKRT' ? 'selected' :''; ?> value="HubKRT">HubKRT</option>
                           <option <?= $this->input->get('f') == 'NIK' ? 'selected' :''; ?> value="NIK">NIK</option>
                           <option <?= $this->input->get('f') == 'NoKK' ? 'selected' :''; ?> value="NoKK">NoKK</option>
                           <option <?= $this->input->get('f') == 'Hub_KRT' ? 'selected' :''; ?> value="Hub_KRT">Hub KRT</option>
                           <option <?= $this->input->get('f') == 'NUK' ? 'selected' :''; ?> value="NUK">NUK</option>
                           <option <?= $this->input->get('f') == 'Hubkel' ? 'selected' :''; ?> value="Hubkel">Hubkel</option>
                           <option <?= $this->input->get('f') == 'Umur' ? 'selected' :''; ?> value="Umur">Umur</option>
                           <option <?= $this->input->get('f') == 'Sta_kawin' ? 'selected' :''; ?> value="Sta_kawin">Sta Kawin</option>
                           <option <?= $this->input->get('f') == 'Ada_akta_nikah' ? 'selected' :''; ?> value="Ada_akta_nikah">Ada Akta Nikah</option>
                           <option <?= $this->input->get('f') == 'Ada_diKK' ? 'selected' :''; ?> value="Ada_diKK">Ada DiKK</option>
                           <option <?= $this->input->get('f') == 'Ada_kartu_identitas' ? 'selected' :''; ?> value="Ada_kartu_identitas">Ada Kartu Identitas</option>
                           <option <?= $this->input->get('f') == 'Sta_hamil' ? 'selected' :''; ?> value="Sta_hamil">Sta Hamil</option>
                           <option <?= $this->input->get('f') == 'Jenis_cacat' ? 'selected' :''; ?> value="Jenis_cacat">Jenis Cacat</option>
                           <option <?= $this->input->get('f') == 'Penyakit_kronis' ? 'selected' :''; ?> value="Penyakit_kronis">Penyakit Kronis</option>
                           <option <?= $this->input->get('f') == 'Partisipasi_sekolah' ? 'selected' :''; ?> value="Partisipasi_sekolah">Partisipasi Sekolah</option>
                           <option <?= $this->input->get('f') == 'Pendidikan_tertinggi' ? 'selected' :''; ?> value="Pendidikan_tertinggi">Pendidikan Tertinggi</option>
                           <option <?= $this->input->get('f') == 'Kelas_tertinggi' ? 'selected' :''; ?> value="Kelas_tertinggi">Kelas Tertinggi</option>
                           <option <?= $this->input->get('f') == 'Ijazah_tertinggi' ? 'selected' :''; ?> value="Ijazah_tertinggi">Ijazah Tertinggi</option>
                           <option <?= $this->input->get('f') == 'Sta_Bekerja' ? 'selected' :''; ?> value="Sta_Bekerja">Sta Bekerja</option>
                           <option <?= $this->input->get('f') == 'Jumlah_jamkerja' ? 'selected' :''; ?> value="Jumlah_jamkerja">Jumlah Jamkerja</option>
                           <option <?= $this->input->get('f') == 'Lapangan_usaha' ? 'selected' :''; ?> value="Lapangan_usaha">Lapangan Usaha</option>
                           <option <?= $this->input->get('f') == 'Status_pekerjaan' ? 'selected' :''; ?> value="Status_pekerjaan">Status Pekerjaan</option>
                           <option <?= $this->input->get('f') == 'Sta_keberadaan_art' ? 'selected' :''; ?> value="Sta_keberadaan_art">Sta Keberadaan Art</option>
                           <option <?= $this->input->get('f') == 'Sta_kepesertaan_pbi' ? 'selected' :''; ?> value="Sta_kepesertaan_pbi">Sta Kepesertaan Pbi</option>
                           <option <?= $this->input->get('f') == 'Ada_kks' ? 'selected' :''; ?> value="Ada_kks">Ada Kks</option>
                           <option <?= $this->input->get('f') == 'Ada_pbi' ? 'selected' :''; ?> value="Ada_pbi">Ada Pbi</option>
                           <option <?= $this->input->get('f') == 'Ada_kip' ? 'selected' :''; ?> value="Ada_kip">Ada Kip</option>
                           <option <?= $this->input->get('f') == 'Ada_pkh' ? 'selected' :''; ?> value="Ada_pkh">Ada Pkh</option>
                           <option <?= $this->input->get('f') == 'Ada_BPNT' ? 'selected' :''; ?> value="Ada_BPNT">Ada BPNT</option>
                           <option <?= $this->input->get('f') == 'Anak_diluar_rt' ? 'selected' :''; ?> value="Anak_diluar_rt">Anak Diluar Rt</option>
                           <option <?= $this->input->get('f') == 'namagadis_ibukandung' ? 'selected' :''; ?> value="namagadis_ibukandung">Namagadis Ibukandung</option>
                          </select>
                     </div>
                     <div class="col-sm-1 padd-left-0 ">
                        <button type="submit" class="btn btn-flat" name="sbtn" id="sbtn" value="Apply" title="<?= cclang('filter_search'); ?>">
                        Filter
                        </button>
                     </div>
                     <div class="col-sm-1 padd-left-0 ">
                        <a class="btn btn-default btn-flat" name="reset" id="reset" value="Apply" href="<?= base_url('art_dtks');?>" title="<?= cclang('reset_filter'); ?>">
                        <i class="fa fa-undo"></i>
                        </a>
                     </div>
                  </div>
                  </form>                  <div class="col-md-4">
                     <div class="dataTables_paginate paging_simple_numbers pull-right" id="example2_paginate" >
                        <?= $pagination; ?>
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
<script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function() {
    $('#example').DataTable( {
        "scrollY":        "400px",
        "scrollCollapse": true,
        "paging":         false,
        "searching": false,
        "pageLength": 10
    } );
} );
</script>

<!-- Page script -->
<script>
  $(document).ready(function(){
   
    $('.remove-data').click(function(){

      var url = $(this).attr('data-href');

      swal({
          title: "<?= cclang('are_you_sure'); ?>",
          text: "<?= cclang('data_to_be_deleted_can_not_be_restored'); ?>",
          type: "warning",
          showCancelButton: true,
          confirmButtonColor: "#DD6B55",
          confirmButtonText: "<?= cclang('yes_delete_it'); ?>",
          cancelButtonText: "<?= cclang('no_cancel_plx'); ?>",
          closeOnConfirm: true,
          closeOnCancel: true
        },
        function(isConfirm){
          if (isConfirm) {
            document.location.href = url;            
          }
        });

      return false;
    });


    $('#apply').click(function(){

      var bulk = $('#bulk');
      var serialize_bulk = $('#form_art_dtks').serialize();

      if (bulk.val() == 'delete') {
         swal({
            title: "<?= cclang('are_you_sure'); ?>",
            text: "<?= cclang('data_to_be_deleted_can_not_be_restored'); ?>",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "<?= cclang('yes_delete_it'); ?>",
            cancelButtonText: "<?= cclang('no_cancel_plx'); ?>",
            closeOnConfirm: true,
            closeOnCancel: true
          },
          function(isConfirm){
            if (isConfirm) {
               document.location.href = BASE_URL + '/art_dtks/delete?' + serialize_bulk;      
            }
          });

        return false;

      } else if(bulk.val() == '')  {
          swal({
            title: "Upss",
            text: "<?= cclang('please_choose_bulk_action_first'); ?>",
            type: "warning",
            showCancelButton: false,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Okay!",
            closeOnConfirm: true,
            closeOnCancel: true
          });

        return false;
      }

      return false;

    });/*end appliy click*/


    //check all
    var checkAll = $('#check_all');
    var checkboxes = $('input.check');

    checkAll.on('ifChecked ifUnchecked', function(event) {   
        if (event.type == 'ifChecked') {
            checkboxes.iCheck('check');
        } else {
            checkboxes.iCheck('uncheck');
        }
    });

    checkboxes.on('ifChanged', function(event){
        if(checkboxes.filter(':checked').length == checkboxes.length) {
            checkAll.prop('checked', 'checked');
        } else {
            checkAll.removeProp('checked');
        }
        checkAll.iCheck('update');
    });

  }); /*end doc ready*/
</script>
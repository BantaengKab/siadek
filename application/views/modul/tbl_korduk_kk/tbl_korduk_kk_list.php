
<script src="<?= BASE_ASSET; ?>/js/jquery.hotkeys.js"></script>

<script type="text/javascript">
//This page is a result of an autogenerated content made by running test.html with firefox.
function domo(){
 
   // Binding keys
   $('*').bind('keydown', 'Ctrl+a', function assets() {
       window.location.href = BASE_URL + '/Tbl_korduk_kk/add';
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
                        <?php is_allowed('tbl_korduk_kk_add', function(){?>
                        <a class="btn btn-flat btn-success btn_add_new" id="btn_add_new" title="Tambah Data  (Ctrl+a)" href="<?=  site_url('tbl_korduk_kk/add'); ?>"><i class="fa fa-plus-square-o" ></i> Tambah Data</a>
                        <?php }) ?>
                        <?php is_allowed('tbl_korduk_kk_export', function(){?>
                        <a class="btn btn-flat btn-success" title="<?= cclang('export'); ?> XLS" href="<?= site_url('tbl_korduk_kk/export'); ?>"><i class="fa fa-file-excel-o" ></i></a>
                        <?php }) ?>
                        <?php is_allowed('tbl_korduk_kk_export', function(){?>
                        <a class="btn btn-flat btn-success" title="<?= cclang('export'); ?> PDF" href="<?= site_url('tbl_korduk_kk/export_pdf'); ?>"><i class="fa fa-file-pdf-o" ></i></a>
                        <?php }) ?>
                     </div>
                     <div class="widget-user-image">
                        <img class="img-circle" src="<?= BASE_ASSET; ?>/img/list.png" alt="User Avatar">
                     </div>
                     <!-- /.widget-user-image -->
                     <h3 class="widget-user-username"><b>Adminduk Kartu Keluarga</b></h3>
                     <h5 class="widget-user-desc"><?= cclang('list_all', ['Adminduk Kartu Keluarga']); ?>  <i class="label bg-yellow"><?= $tbl_korduk_kk_counts; ?>  <?= cclang('items'); ?></i></h5>
                  </div>
<br>
                  <form name="form_tbl_korduk_kk" id="form_tbl_korduk_kk" action="<?= base_url('tbl_korduk_kk/index'); ?>">

                     <div class="row">
                    <div class="form-group ">
                            <div class="col-sm-3">
                              
                              <?php 

                                $kdwilayah = get_user_data('kd_wilayah'); 
                                $username = get_user_data('username'); 
                                if($username == 'admin' ){
                                  $a = db_get_all_data('wilayah');
                                }else{
                                  $a = db_get_all_data('wilayah',"kd_wilayah = $kdwilayah");
                                }
                              ?>

                                <select  class="form-control chosen chosen-select-deselect" name="kd_wilayah" id="kd_wilayah" data-placeholder="PILIH wilayah" onchange="submit()"
                                <?php 
                                $user=get_user_data('kd_wilayah');
                                 if(strlen($user)==10){
                                 echo 'disabled'; }?>
                                >
                                 
                                  <?php if($username == 'admin'){?>
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
                  <table class="table table-bordered table-striped dataTable">
                     <thead>
                        <tr class="">
                           <th>
                            <input type="checkbox" class="flat-red toltip" id="check_all" name="check_all" title="check all">
                           </th>
                           <th style="text-align:center">NIK</th>
                           <th style="text-align:center">Nama</th>
                           <th style="text-align:center">Alamat</th>
                           <th style="text-align:center">Jenis Kelamin</th>
                           <th style="text-align:center">Status</th>
                           <th style="text-align:center">Form</th>
                           <th style="text-align:center">KTP</th>
                           <th style="text-align:center">KTP 2</th>
                           <th style="text-align:center">Surat Nikah</th>
                           <th style="text-align:center">Surat Pindah SKWNI</th>
                           <th style="text-align:center">Surat Pindah Alamat</th>
                           <th style="text-align:center">Suket Hilang</th>
                           <th style="text-align:center" width="7%">Action</th>
                        </tr>
                     </thead>
                     <tbody id="tbody_tbl_korduk_kk">
                     <?php foreach($tbl_korduk_kks as $tbl_korduk_kk): ?>
                        <tr>
                           <td width="5">
                              <input type="checkbox" class="flat-red check" name="id[]" value="<?= $tbl_korduk_kk->id; ?>">
                           </td>
                           
                           <td><?= _ent($tbl_korduk_kk->nik); ?></td> 
                           <td><?= _ent($tbl_korduk_kk->nama); ?></td> 
                           <td><?= _ent($tbl_korduk_kk->alamat); ?></td> 
                           <td><?= _ent($tbl_korduk_kk->jenis_kelamin); ?></td>
                           <td>Proses</td>
                           <td>
                              <?php if (!empty($tbl_korduk_kk->form)): ?>
                                <?php if (is_image($tbl_korduk_kk->form)): ?>
                                <a class="fancybox" rel="group" href="<?= BASE_URL . 'uploads/tbl_korduk_kk/' . $tbl_korduk_kk->form; ?>">
                                  <img src="<?= BASE_URL . 'uploads/tbl_korduk_kk/' . $tbl_korduk_kk->form; ?>" class="image-responsive" alt="image tbl_korduk_kk" title="form tbl_korduk_kk" width="40px">
                                </a>
                                <?php else: ?>
                                  <a href="<?= BASE_URL . 'administrator/file/download/tbl_korduk_kk/' . $tbl_korduk_kk->form; ?>">
                                   <img src="<?= get_icon_file($tbl_korduk_kk->form); ?>" class="image-responsive image-icon" alt="image tbl_korduk_kk" title="form <?= $tbl_korduk_kk->form; ?>" width="40px"> 
                                 </a>
                                <?php endif; ?>
                              <?php endif; ?>
                           </td>
                            
                           <td>
                              <?php if (!empty($tbl_korduk_kk->ktp1)): ?>
                                <?php if (is_image($tbl_korduk_kk->ktp1)): ?>
                                <a class="fancybox" rel="group" href="<?= BASE_URL . 'uploads/tbl_korduk_kk/' . $tbl_korduk_kk->ktp1; ?>">
                                  <img src="<?= BASE_URL . 'uploads/tbl_korduk_kk/' . $tbl_korduk_kk->ktp1; ?>" class="image-responsive" alt="image tbl_korduk_kk" title="ktp1 tbl_korduk_kk" width="40px">
                                </a>
                                <?php else: ?>
                                  <a href="<?= BASE_URL . 'administrator/file/download/tbl_korduk_kk/' . $tbl_korduk_kk->ktp1; ?>">
                                   <img src="<?= get_icon_file($tbl_korduk_kk->ktp1); ?>" class="image-responsive image-icon" alt="image tbl_korduk_kk" title="ktp1 <?= $tbl_korduk_kk->ktp1; ?>" width="40px"> 
                                 </a>
                                <?php endif; ?>
                              <?php endif; ?>
                           </td>
                            
                           <td>
                              <?php if (!empty($tbl_korduk_kk->ktp2)): ?>
                                <?php if (is_image($tbl_korduk_kk->ktp2)): ?>
                                <a class="fancybox" rel="group" href="<?= BASE_URL . 'uploads/tbl_korduk_kk/' . $tbl_korduk_kk->ktp2; ?>">
                                  <img src="<?= BASE_URL . 'uploads/tbl_korduk_kk/' . $tbl_korduk_kk->ktp2; ?>" class="image-responsive" alt="image tbl_korduk_kk" title="ktp2 tbl_korduk_kk" width="40px">
                                </a>
                                <?php else: ?>
                                  <a href="<?= BASE_URL . 'administrator/file/download/tbl_korduk_kk/' . $tbl_korduk_kk->ktp2; ?>">
                                   <img src="<?= get_icon_file($tbl_korduk_kk->ktp2); ?>" class="image-responsive image-icon" alt="image tbl_korduk_kk" title="ktp2 <?= $tbl_korduk_kk->ktp2; ?>" width="40px"> 
                                 </a>
                                <?php endif; ?>
                              <?php endif; ?>
                           </td>
                            
                           <td>
                              <?php if (!empty($tbl_korduk_kk->surat_nikah)): ?>
                                <?php if (is_image($tbl_korduk_kk->surat_nikah)): ?>
                                <a class="fancybox" rel="group" href="<?= BASE_URL . 'uploads/tbl_korduk_kk/' . $tbl_korduk_kk->surat_nikah; ?>">
                                  <img src="<?= BASE_URL . 'uploads/tbl_korduk_kk/' . $tbl_korduk_kk->surat_nikah; ?>" class="image-responsive" alt="image tbl_korduk_kk" title="surat_nikah tbl_korduk_kk" width="40px">
                                </a>
                                <?php else: ?>
                                  <a href="<?= BASE_URL . 'administrator/file/download/tbl_korduk_kk/' . $tbl_korduk_kk->surat_nikah; ?>">
                                   <img src="<?= get_icon_file($tbl_korduk_kk->surat_nikah); ?>" class="image-responsive image-icon" alt="image tbl_korduk_kk" title="surat_nikah <?= $tbl_korduk_kk->surat_nikah; ?>" width="40px"> 
                                 </a>
                                <?php endif; ?>
                              <?php endif; ?>
                           </td>
                            
                           <td>
                              <?php if (!empty($tbl_korduk_kk->surat_pindah_skwni)): ?>
                                <?php if (is_image($tbl_korduk_kk->surat_pindah_skwni)): ?>
                                <a class="fancybox" rel="group" href="<?= BASE_URL . 'uploads/tbl_korduk_kk/' . $tbl_korduk_kk->surat_pindah_skwni; ?>">
                                  <img src="<?= BASE_URL . 'uploads/tbl_korduk_kk/' . $tbl_korduk_kk->surat_pindah_skwni; ?>" class="image-responsive" alt="image tbl_korduk_kk" title="surat_pindah_skwni tbl_korduk_kk" width="40px">
                                </a>
                                <?php else: ?>
                                  <a href="<?= BASE_URL . 'administrator/file/download/tbl_korduk_kk/' . $tbl_korduk_kk->surat_pindah_skwni; ?>">
                                   <img src="<?= get_icon_file($tbl_korduk_kk->surat_pindah_skwni); ?>" class="image-responsive image-icon" alt="image tbl_korduk_kk" title="surat_pindah_skwni <?= $tbl_korduk_kk->surat_pindah_skwni; ?>" width="40px"> 
                                 </a>
                                <?php endif; ?>
                              <?php endif; ?>
                           </td>
                            
                           <td>
                              <?php if (!empty($tbl_korduk_kk->surat_pindah_alamat)): ?>
                                <?php if (is_image($tbl_korduk_kk->surat_pindah_alamat)): ?>
                                <a class="fancybox" rel="group" href="<?= BASE_URL . 'uploads/tbl_korduk_kk/' . $tbl_korduk_kk->surat_pindah_alamat; ?>">
                                  <img src="<?= BASE_URL . 'uploads/tbl_korduk_kk/' . $tbl_korduk_kk->surat_pindah_alamat; ?>" class="image-responsive" alt="image tbl_korduk_kk" title="surat_pindah_alamat tbl_korduk_kk" width="40px">
                                </a>
                                <?php else: ?>
                                  <a href="<?= BASE_URL . 'administrator/file/download/tbl_korduk_kk/' . $tbl_korduk_kk->surat_pindah_alamat; ?>">
                                   <img src="<?= get_icon_file($tbl_korduk_kk->surat_pindah_alamat); ?>" class="image-responsive image-icon" alt="image tbl_korduk_kk" title="surat_pindah_alamat <?= $tbl_korduk_kk->surat_pindah_alamat; ?>" width="40px"> 
                                 </a>
                                <?php endif; ?>
                              <?php endif; ?>
                           </td>
                            
                           <td>
                              <?php if (!empty($tbl_korduk_kk->suket_hilang)): ?>
                                <?php if (is_image($tbl_korduk_kk->suket_hilang)): ?>
                                <a class="fancybox" rel="group" href="<?= BASE_URL . 'uploads/tbl_korduk_kk/' . $tbl_korduk_kk->suket_hilang; ?>">
                                  <img src="<?= BASE_URL . 'uploads/tbl_korduk_kk/' . $tbl_korduk_kk->suket_hilang; ?>" class="image-responsive" alt="image tbl_korduk_kk" title="suket_hilang tbl_korduk_kk" width="40px">
                                </a>
                                <?php else: ?>
                                  <a href="<?= BASE_URL . 'administrator/file/download/tbl_korduk_kk/' . $tbl_korduk_kk->suket_hilang; ?>">
                                   <img src="<?= get_icon_file($tbl_korduk_kk->suket_hilang); ?>" class="image-responsive image-icon" alt="image tbl_korduk_kk" title="suket_hilang <?= $tbl_korduk_kk->suket_hilang; ?>" width="40px"> 
                                 </a>
                                <?php endif; ?>
                              <?php endif; ?>
                           </td>
                            
                           <td width="200">
                              <?php is_allowed('tbl_korduk_kk_view', function() use ($tbl_korduk_kk){?>
                              <a href="<?= site_url('tbl_korduk_kk/view/' . $tbl_korduk_kk->id); ?>" title="Lihat" class="label-default"><i class="fa fa-newspaper-o"></i> 
                              <?php }) ?>
                              <?php is_allowed('tbl_korduk_kk_update', function() use ($tbl_korduk_kk){?>
                              <a href="<?= site_url('tbl_korduk_kk/edit/' . $tbl_korduk_kk->id); ?>" title="Ubah" class="label-default"><i class="fa fa-edit "></i> </a>
                              <?php }) ?>
                              <?php is_allowed('tbl_korduk_kk_delete', function() use ($tbl_korduk_kk){?>
                              <a href="javascript:void(0);" data-href="<?= site_url('tbl_korduk_kk/delete/' . $tbl_korduk_kk->id); ?>" title="Hapus" class="label-default remove-data"><i class="fa fa-close" style="color: red"></i> </a>
                               <?php }) ?>
                           </td>
                        </tr>
                      <?php endforeach; ?>
                      <?php if ($tbl_korduk_kk_counts == 0) :?>
                         <tr>
                           <td colspan="100">
                           Adminduk Kartu Keluarga data is not available
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
                            <option <?= $this->input->get('f') == 'nik' ? 'selected' :''; ?> value="nik">Nik</option>
                           <option <?= $this->input->get('f') == 'nama' ? 'selected' :''; ?> value="nama">Nama</option>
                           <option <?= $this->input->get('f') == 'alamat' ? 'selected' :''; ?> value="alamat">Alamat</option>
                           <option <?= $this->input->get('f') == 'jenis_kelamin' ? 'selected' :''; ?> value="jenis_kelamin">Jenis Kelamin</option>
                           <option <?= $this->input->get('f') == 'form' ? 'selected' :''; ?> value="form">Form</option>
                           <option <?= $this->input->get('f') == 'ktp1' ? 'selected' :''; ?> value="ktp1">Ktp1</option>
                           <option <?= $this->input->get('f') == 'ktp2' ? 'selected' :''; ?> value="ktp2">Ktp2</option>
                           <option <?= $this->input->get('f') == 'surat_nikah' ? 'selected' :''; ?> value="surat_nikah">Surat Nikah</option>
                           <option <?= $this->input->get('f') == 'surat_pindah_skwni' ? 'selected' :''; ?> value="surat_pindah_skwni">Surat Pindah Skwni</option>
                           <option <?= $this->input->get('f') == 'surat_pindah_alamat' ? 'selected' :''; ?> value="surat_pindah_alamat">Surat Pindah Alamat</option>
                           <option <?= $this->input->get('f') == 'suket_hilang' ? 'selected' :''; ?> value="suket_hilang">Suket Hilang</option>
                          </select>
                     </div>
                     <div class="col-sm-1 padd-left-0 ">
                        <button type="submit" class="btn btn-flat" name="sbtn" id="sbtn" value="Apply" title="<?= cclang('filter_search'); ?>">
                        Filter
                        </button>
                     </div>
                     <div class="col-sm-1 padd-left-0 ">
                        <a class="btn btn-default btn-flat" name="reset" id="reset" value="Apply" href="<?= base_url('tbl_korduk_kk');?>" title="<?= cclang('reset_filter'); ?>">
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
<!-- /.content -->

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
      var serialize_bulk = $('#form_tbl_korduk_kk').serialize();

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
               document.location.href = BASE_URL + '/tbl_korduk_kk/delete?' + serialize_bulk;      
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
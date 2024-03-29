
<script src="<?= BASE_ASSET; ?>/js/jquery.hotkeys.js"></script>

<script type="text/javascript">
//This page is a result of an autogenerated content made by running test.html with firefox.
function domo(){
 
   // Binding keys
   $('*').bind('keydown', 'Ctrl+a', function assets() {
       window.location.href = BASE_URL + '/Suket_nikah/add';
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
                        <?php is_allowed('suket_nikah_add', function(){?>
                        <a class="btn btn-flat btn-success btn_add_new" id="btn_add_new" title="Tambah Data  (Ctrl+a)" href="<?=  site_url('suket_nikah/add'); ?>"><i class="fa fa-plus-square-o" ></i> Tambah Data</a>
                        <?php }) ?>
                        <?php is_allowed('suket_nikah_export', function(){?>
                        <a class="btn btn-flat btn-success" title="<?= cclang('export'); ?> XLS" href="<?= site_url('suket_nikah/export'); ?>"><i class="fa fa-file-excel-o" ></i></a>
                        <?php }) ?>
                        <?php is_allowed('suket_nikah_export', function(){?>
                        <a class="btn btn-flat btn-success" title="<?= cclang('export'); ?> PDF" href="<?= site_url('suket_nikah/export_pdf'); ?>"><i class="fa fa-file-pdf-o" ></i></a>
                        <?php }) ?>
                     </div>
                     <div class="widget-user-image">
                        <img class="img-circle" src="<?= BASE_ASSET; ?>/img/list.png" alt="User Avatar">
                     </div>
                     <!-- /.widget-user-image -->
                     <h3 class="widget-user-username"><b>Suket Menikah</b></h3>
                     <h5 class="widget-user-desc"><?= cclang('list_all', ['Suket Menikah']); ?>  <i class="label bg-yellow"><?= $suket_nikah_counts; ?>  <?= cclang('items'); ?></i></h5>
                  </div>

                  <form name="form_suket_nikah" id="form_suket_nikah" action="<?= base_url('suket_nikah/index'); ?>">

                      <div class="row">
                    <div class="form-group ">
                            <div class="col-sm-2">
       
                            </div>
                            <div class="col-sm-8">
                              
                              <?php 

                                $kdwilayah = get_user_data('kd_wilayah'); 
                                $username = get_user_data('username'); 
                                if($username == 'admin' ){
                                  $a = db_get_all_data('wilayah');
                                }else{
                                  $a = db_get_all_data('wilayah',"kd_wilayah = $kdwilayah");
                                }
                              ?>

                                <select  class="form-control chosen chosen-select-deselect" name="kd_wilayah" id="kd_wilayah" data-placeholder="PILIH wilayah" onchange="submit()">
                                 
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
                           <th style="text-align:center">NO. Surat</th>
                           <th style="text-align:center">Tanggal Surat</th>
                           <th style="text-align:center">Suami</th>
                           <th style="text-align:center">Istri</th>
                           <th style="text-align:center">Perangkat Yang BerTTD</th>
                           <th style="text-align:center" width="7%">Action</th>
                        </tr>
                     </thead>
                     <tbody id="tbody_suket_nikah">
                     <?php foreach($suket_nikahs as $suket_nikah): ?>
                        <tr>
                           <td width="5">
                              <input type="checkbox" class="flat-red check" name="id[]" value="<?= $suket_nikah->id; ?>">
                           </td>
                           
                           <td><?= _ent($suket_nikah->no); ?></td> 
                           <td><?= _ent($suket_nikah->tanggal_surat); ?></td> 
                           <td><?= _ent($suket_nikah->suami); ?></td> 
                           <td><?= _ent($suket_nikah->istri); ?></td> 
                           <td><?= _ent($suket_nikah->perangkat_id); ?></td> 
                           <td width="200">
                           <?php is_allowed('suket_bnikah_update', function () use ($suket_bnikah) { ?>
                                          <a href="<?= site_url('suket_bnikah/cetak/' . $suket_bnikah->id . '/' . $suket_bnikah->kd_wilayah); ?>" title="Cetak" class="label-default"><i class="fa fa-print"></i>
                              <?php }) ?>
                              <?php is_allowed('suket_nikah_update', function() use ($suket_nikah){?>
                              <a href="<?= site_url('suket_nikah/edit/' . $suket_nikah->id); ?>" title="Ubah" class="label-default"><i class="fa fa-edit "></i> </a>
                              <?php }) ?>
                              <?php is_allowed('suket_nikah_delete', function() use ($suket_nikah){?>
                              <a href="javascript:void(0);" data-href="<?= site_url('suket_nikah/delete/' . $suket_nikah->id); ?>" title="Hapus" class="label-default remove-data"><i class="fa fa-close" style="color: red"></i> </a>
                               <?php }) ?>
                           </td>
                        </tr>
                      <?php endforeach; ?>
                      <?php if ($suket_nikah_counts == 0) :?>
                         <tr>
                           <td colspan="100">
                           Suket Menikah data is not available
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
                            <option <?= $this->input->get('f') == 'no' ? 'selected' :''; ?> value="no">No</option>
                           <option <?= $this->input->get('f') == 'tanggal_surat' ? 'selected' :''; ?> value="tanggal_surat">Tanggal Surat</option>
                           <option <?= $this->input->get('f') == 'suami' ? 'selected' :''; ?> value="suami">Suami</option>
                           <option <?= $this->input->get('f') == 'istri' ? 'selected' :''; ?> value="istri">Istri</option>
                           <option <?= $this->input->get('f') == 'perangkat_id' ? 'selected' :''; ?> value="perangkat_id">Perangkat Id</option>
                          </select>
                     </div>
                     <div class="col-sm-1 padd-left-0 ">
                        <button type="submit" class="btn btn-flat" name="sbtn" id="sbtn" value="Apply" title="<?= cclang('filter_search'); ?>">
                        Filter
                        </button>
                     </div>
                     <div class="col-sm-1 padd-left-0 ">
                        <a class="btn btn-default btn-flat" name="reset" id="reset" value="Apply" href="<?= base_url('suket_nikah');?>" title="<?= cclang('reset_filter'); ?>">
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
      var serialize_bulk = $('#form_suket_nikah').serialize();

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
               document.location.href = BASE_URL + '/suket_nikah/delete?' + serialize_bulk;      
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
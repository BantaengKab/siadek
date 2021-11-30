
<script src="<?= BASE_ASSET; ?>/js/jquery.hotkeys.js"></script>

<script type="text/javascript">
//This page is a result of an autogenerated content made by running test.html with firefox.
function domo(){
 
   // Binding keys
   $('*').bind('keydown', 'Ctrl+a', function assets() {
       window.location.href = BASE_URL + '/Wilayah_profil/add';
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
                    
                     <div class="widget-user-image">
                        <img class="img-circle" src="http://localhost:80/siadek.bantaengkab.go.id/asset//img/view.png" alt="User Avatar">
                     </div>
                     <!-- /.widget-user-image -->
                     <h3 class="widget-user-username"><b>Wilayah Profil</b></h3>
                     <h5 class="widget-user-desc">Detail Wilayah Profil</h5>
                     <hr>
                  </div>

<?php foreach($wilayah_profils as $wilayah_profil): ?>
   <?php $kdwilayah = get_user_data('kd_wilayah'); 
     $username = get_user_data('username'); 
     if($username == 'admin' ){
    $a = db_get_all_data('wilayah');
     }else{
    $a = db_get_all_data('wilayah',"kd_wilayah = $kdwilayah");
    }
?>
<section class="content">
   <div class="row">
   <div class="col-md-4">
   <div class="box">
            <div class="box-header">
              <h3 class="box-title">Desa</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-striped">
                <tbody>
                <tr>
                  <td>Luas Wilayah</td>
        
                  <td><span class="badge bg-red"> <?= _ent($wilayah_profil->luas); ?></span></td>
                </tr>
                <tr>
                  <td>Jumlah Penduduk</td>
                  <td><span class="badge bg-yellow"> 
                  <?php 
                    $this->db->from('penduduk');
                    $this->db->like('kd_wilayah', get_user_data('kd_wilayah'));
		            $nonPajukukan= $this->db->count_all_results(); 
                    echo $nonPajukukan;
                 ?>
                 </span>
                 </td>
                </tr>
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>


          <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Informasi</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
             <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label"> Sampul Web </label>
                        <div class="col-sm-8">
                                      &ndbsp <span class="mailbox-attachment-icon has-img"><img src="<?= BASE_URL . 'uploads/wilayah_profil/' . $wilayah_profil->foto; ?>" alt="FOTO"></span>
   
                     <div class="mailbox-attachment-info">
                       <a href="#" class="mailbox-attachment-name"><i class="fa fa-camera"></i> Foto Kepala Wilayah</a>
                       
                       <a href="<?= BASE_URL . 'uploads/wilayah_profil/' . $wilayah_profil->foto; ?>" class="btn btn-default btn-xs pull-right"><i class="fa fa-search-plus"></i></a>
                           <span class="mailbox-attachment-size">
                           <br>
                           </span>
                                                                </div>                                              
                                                                                                              </div>
                    </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
         <center> <?= _ent($wilayah_profil->alamat_kantor); ?></center>
        </div>
        <!-- /.box-footer-->
      </div>

        </div>
        

        <div class="col-md-8">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class=""><a href="#gmap_canvas" data-toggle="tab" aria-expanded="false" data-original-title="" title="">Peta</a></li>
                        <li class="active"><a href="#profil" data-toggle="tab" aria-expanded="true" data-original-title="" title="">Profil</a></li>
                        <li class=""><a href="#data-umum" data-toggle="tab" aria-expanded="false" data-original-title="" title="">Data Umum</a></li>
                        <li class=""><a href="#organisasi" data-toggle="tab" aria-expanded="false" data-original-title="" title="">Struktur Organisasi</a></li>

                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="profil">
                            <table class="table table-striped">
                                <tbody>
                         

                                <tr>
                                    <th class="col-md-4">Nama Desa</th>
                                   <?php 
                                  $a = $wilayah_profil->kd_wilayah;
                                  $b = db_get_all_data('wilayah',"kd_wilayah= $a");
                                  foreach($b as $b){
                                      $nama = $b->nama;
                                  };
                                  ?>
                                    <td class="col-md-8">:<?php echo $nama; ?> </td>

                                </tr>
                                <tr>
                                    <th class="col-md-4">Kode Wilayah</th>
                                    <td class="col-md-8">: <?= _ent($wilayah_profil->kd_wilayah); ?></td>
                                </tr>
                                <tr>
                                    <th class="col-md-4">Kode Kecamatan</th>
                                    <td class="col-md-8">: <?= _ent(substr($wilayah_profil->kd_wilayah,0,6)); ?></td>
                                </tr>
                                <tr>
                                    <th class="col-md-4">Kode Pos</th>
                                    <td class="col-md-8">: <?= _ent($wilayah_profil->kd_pos); ?></td>
                                </tr>

                                <tr>
                                    <th class="col-md-4">Tahun Pembentukan</th>
                                    <td class="col-md-8">: <?= _ent($wilayah_profil->tahun_pembentukan); ?></td>
                                </tr>

                                <tr>
                                    <th class="col-md-4">Dasar Hukum Pembentukan</th>
                                    <td class="col-md-8">: <?= _ent($wilayah_profil->dasar_hukum); ?></td>
                                </tr>

                                <tr>
                                    <th class="col-md-4">Provinsi</th>
                                    <td class="col-md-8">: SULAWESI SELATAN</td>
                                </tr>

                                <tr>
                                    <th class="col-md-4">Kabupaten/Kota</th>
                                    <td class="col-md-8">: BANTAENG</td>
                                </tr>


                                </tbody>
                            </table>
                            <div class="row">
                                <div class="col-md-6">
                                    <legend>Visi Dan Misi</legend>
                                    <p><?= _ent($wilayah_profil->visi_misi); ?></p>
                                </div>
                                <div class="col-md-6">
                                    <legend>Sejarah</legend>
                                    <p><?= _ent($wilayah_profil->sejarah); ?></p>
                                </div>
                            </div>
                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="data-umum">
                            <!-- The timeline -->
                            <div class="row">
                                <div class="col-md-5">
                                    <legend>Info Wilayah</legend>
                                    <table class="table table-striped">
                                        <tbody>
                                        <tr>
                                            <th class="col-md-4">Tipologi</th>
                                            <td class="col-md-8">: <?= _ent($wilayah_profil->tipologi); ?></td>
                                        </tr>

                                        <tr>
                                            <th class="col-md-2">Luas Wilayah</th>
                                            <td class="col-md-9">: 50.00
                                            <span>km<sup>2</sup></span></td>
                                        </tr>

                                        <tr>
                                            <th class="col-md-2">Kode Pos</th>
                                            <td class="col-md-9">: <?= _ent($wilayah_profil->kd_pos); ?></td>
                                        </tr>

                                        <tr>
                                            <th class="col-md-2">Kabupaten/Kota</th>
                                            <td class="col-md-9">: BANTAENG</td>
                                        </tr>

                                        <tr>
                                            <th class="col-md-7">Jumlah Penduduk</th>
                                            <td class="col-md-9">: 
                                            <?php 
                                                $this->db->from('penduduk');
                                                $this->db->like('kd_wilayah', get_user_data('kd_wilayah'));
                                                $jumlahpdd= $this->db->count_all_results(); 
                                                echo $jumlahpdd;
                                            ?>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th class="col-md-2">Laki Laki</th>
                                            <td class="col-md-9">: 
                                            <?php 
                                                $this->db->from('penduduk');
                                                $this->db->like('kd_wilayah', get_user_data('kd_wilayah'));
                                                $this->db->where('jenis_kelamin', 'Laki-Laki');
                                                $jumlahpdd= $this->db->count_all_results(); 
                                                echo $jumlahpdd;
                                            ?>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th class="col-md-2">Perempuan</th>
                                            <td class="col-md-9">: 
                                            <?php 
                                                $this->db->from('penduduk');
                                                $this->db->like('kd_wilayah', get_user_data('kd_wilayah'));
                                                $this->db->where('jenis_kelamin', 'Perempuan');
                                                $jumlahpdd= $this->db->count_all_results(); 
                                                echo $jumlahpdd;
                                            ?></td>
                                        </tr>
                                        </tbody>
                                    </table>

                                    <br>
                                    <legend>Batas Wilayah</legend>
                                    <table class="table table-striped">
                                        <tbody>
                                        <tr>
                                            <th class="col-md-2">Utara</th>
                                            <td class="col-md-9">
                                                :<?= _ent($wilayah_profil->utara); ?></td>
                                        </tr>

                                        <tr>
                                            <th class="col-md-2">Timur</th>
                                            <td class="col-md-9">:  <?= _ent($wilayah_profil->timur); ?></td>
                                        </tr>

                                        <tr>
                                            <th class="col-md-2">Selatan</th>
                                            <td class="col-md-9">:  <?= _ent($wilayah_profil->selatan); ?></td>
                                        </tr>

                                        <tr>
                                            <th class="col-md-2">Barat</th>
                                            <td class="col-md-9">:  <?= _ent($wilayah_profil->barat); ?></td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-6">
                                    <legend>Jumlah Sarana &amp; Prasarana</legend>

                                    <h4>A. Sarana Kesehatan</h4>
                                    <table class="table table-striped">
                                        <tbody>
                                        <tr>
                                            <th class="col-md-6">1. Puskesmas</th>
                                            <td class="col-md-6">
                                                : 0</td>
                                        </tr>

                                        <tr>
                                            <th class="col-md-6">2. Puskesmas Pembantu</th>
                                            <td class="col-md-6">
                                                : 0</td>
                                        </tr>

                                        <tr>
                                            <th class="col-md-6">3. Posyandu</th>
                                            <td class="col-md-6">: 0</td>
                                        </tr>

                                        <tr>
                                            <th class="col-md-6">4. Pondok Bersalin</th>
                                            <td class="col-md-6">: 0</td>
                                        </tr>

                                        </tbody>
                                    </table>

                                    <h4>B. Sarana Pendidikan</h4>
                                    <table class="table table-striped">
                                        <tbody>
                                        <tr>
                                            <th class="col-md-6">1. PAUD/Sederajat</th>
                                            <td class="col-md-6">: 0</td>
                                        </tr>

                                        <tr>
                                            <th class="col-md-6">2. SD/Sederajat</th>
                                            <td class="col-md-6">: 0</td>
                                        </tr>

                                        <tr>
                                            <th class="col-md-6">3. SMP/Sederajat</th>
                                            <td class="col-md-6">: 0</td>
                                        </tr>

                                        <tr>
                                            <th class="col-md-6">4. SMA/Sederajat</th>
                                            <td class="col-md-6">: 0</td>
                                        </tr>

                                        </tbody>
                                    </table>

                                    <h4>C. Sarana Umum</h4>
                                    <table class="table table-striped">
                                        <tbody>
                                        <tr>
                                            <th class="col-md-6">1. Masjid Besar</th>
                                            <td class="col-md-6">: 0</td>
                                        </tr>

                                        <tr>
                                            <th class="col-md-6">2. Gereja</th>
                                            <td class="col-md-6">: 0</td>
                                        </tr>

                                        <tr>
                                            <th class="col-md-6">3. Pasar</th>
                                            <td class="col-md-6">: 0</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /.tab-pane -->

                        <div class="tab-pane" id="organisasi">
                            <div class="row">
                                <div class="col-md-12">
                                    <table class="table table-striped">
                                        <tbody>
                                        <tr>
                                            <th class="col-md-3">Kepala Desa</th>
                                            <td class="col-md-8">: </td>
                                        </tr>

                                        <tr>
                                            <th class="col-md-3">Sekretaris Desa</th>
                                            <td class="col-md-8">: </td>
                                        </tr>

                                        <tr>
                                            <th class="col-md-3">Kaur Tata Usaha&Umum</th>
                                            <td class="col-md-8">: </td>
                                        </tr>
                                        <tr>
                                            <th class="col-md-3">Kaur Keuangan</th>
                                            <td class="col-md-8">: </td>
                                        </tr>

                                        <tr>
                                            <th class="col-md-3">Kaur perencanaan</th>
                                            <td class="col-md-8">: </td>
                                        </tr>

                                        <tr>
                                            <th class="col-md-3">Kasi Pemerintah</th>
                                            <td class="col-md-8">: </td>
                                        </tr>
                                        <tr>
                                            <th class="col-md-3">Kasi Kesejahteraan</th>
                                            <td class="col-md-8">: </td>
                                        </tr>
                                        <tr>
                                            <th class="col-md-3">Kasi Pelayanan</th>
                                            <td class="col-md-8">: </td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                <legend>Struktur Organisasi</legend>
                                <div class="col-md-12"><img class="col-md-12" id="strukturpic" src=" https://kecamatan.inspirasi-umd.id/Lighthouse.jpg "></div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="gmap_canvas">
                            <!-- /.box-header -->
                            <div class="box-body no-padding">
                                <div class="row">
                                
                                    <div class="col-md-12 col-sm-10">
                                    <?php echo $wilayah_profil->lokasi; ?>
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.box-body -->
                            </div>
                        </div>
                        <!-- /.tab-content -->
                    </div>
                    <!-- /.nav-tabs-custom -->
                </div>
                <!-- /.col -->
            </div>
   </div>
</section>
<?php endforeach; ?>  

                  <div class="form-horizontal" name="form_wilayah_profil" id="form_wilayah_profil">
      
                    <br>
                    <br>
                    <div class="view-nav">
                    <a class="btn btn-flat btn-info btn_edit btn_action" id="btn_edit" data-stype="back" title="" href="<?= site_url('wilayah_profil/edit/' . $wilayah_profil->id); ?>" data-original-title="edit wilayah_profil (Ctrl+e)"><i class="fa fa-edit"></i> Updating Wilayah Profil </a>
                   
                     </div>
                    
                  </div>
               </div>
            </div>
            <!--/box body -->
         </div>
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
      var serialize_bulk = $('#form_wilayah_profil').serialize();

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
               document.location.href = BASE_URL + '/wilayah_profil/delete?' + serialize_bulk;      
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
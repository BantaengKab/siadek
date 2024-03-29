<link rel="stylesheet" type="text/css" href="<?= BASE_ASSET; ?>css/rest.css">
<style type="text/css">
  .method {
    color: #EC682E;
    font-weight: bolder;
  }
</style>
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
                      <div class="row pull-right">
                        <a class="btn btn-flat btn-success btn_rest_tool" id="btn_add_new" title="rest API tool" href="<?= site_url('administrator/rest/tool'); ?>"><i class="fa fa-chrome" ></i> <?= cclang('tool', ['Rest']); ?></a> 
                        <a class="btn btn-flat btn-success btn_rest_tool" id="btn_request_token" title="rest API user request token" href="<?= site_url('administrator/rest/tool/get-token'); ?>"><i class="fa  fa-unlock-alt" ></i> <?= cclang('get_token'); ?></a>
                      </div>
                     <div class="widget-user-image">
                        <img class="img-circle" src="<?= BASE_ASSET; ?>/img/view.png" alt="User Avatar">
                     </div>
                     <!-- /.widget-user-image -->
                     <h3 class="widget-user-username">Rest</h3>
                     <h5 class="widget-user-desc"><?= cclang('detail', ['Rest']); ?></h5>
                     <hr>
                  </div>

                 
                  <div class="form-horizontal" name="form_rest" id="form_rest" >
                 
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Endpoint </label>

                        <div class="col-sm-8">
                           <?= base_url('api/'. $rest->table_name); ?>
                        </div>
                    </div>
                                                  
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Subject </label>

                        <div class="col-sm-8">
                           <?= _ent($rest->subject); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Table Name </label>

                        <div class="col-sm-8">
                           <?= _ent($rest->table_name); ?>
                        </div>
                    </div>
                                     
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Request Header </label>

                        <div class="col-sm-8">
                           <div class="col-sm-2 padding-left-0">
                              <input class="flat-red check" type="checkbox" checked>  X-Api-Key
                            </div>
                            <div class="col-sm-2 padding-left-0">
                              <input class="flat-red check" type="checkbox" <?= $rest->x_token == 'yes' ? 'checked' : ''; ?> >  X-Token
                            </div>
                        </div>
                    </div>
                                        
                    <br>
                    <br>

                     <div class="col-md-12 padding-left-0 padding-right-0">
                        <!-- Custom Tabs -->
                        <div class="nav-tabs-custom">
                          <ul class="nav nav-tabs">
                            <li><a class="btn-call-page-test" data-url="<?= base_url('administrator/rest/get_rest_test_all/'.$rest->id); ?>" href="#tab_1" data-toggle="tab">API <?= cclang('all'); ?> <span class="method">GET</span></a></li>
                            <li><a class="btn-call-page-test" data-url="<?= base_url('administrator/rest/get_rest_test_add/'.$rest->id); ?>" href="#tab_1" data-toggle="tab">API <?= cclang('add'); ?> <span class="method">POST</span></a></li>
                            <li><a class="btn-call-page-test" data-url="<?= base_url('administrator/rest/get_rest_test_update/'.$rest->id); ?>" href="#tab_1" data-toggle="tab">API <?= cclang('update'); ?> <span class="method">POST</span></a></li>
                            <li><a class="btn-call-page-test" data-url="<?= base_url('administrator/rest/get_rest_test_detail/'.$rest->id); ?>" href="#tab_1" data-toggle="tab">API <?= cclang('detail'); ?> <span class="method">GET</span></a></li>
                            <li><a class="btn-call-page-test" data-url="<?= base_url('administrator/rest/get_rest_test_delete/'.$rest->id); ?>" href="#tab_1" data-toggle="tab">API <?= cclang('delete'); ?> <span class="method">POST</span></a></li>
                            <li class="active"><a href="#tab_6" data-toggle="tab"><?= cclang('detail'); ?> Rest</a></li>
                            
                            <li class="pull-right"><a href="<?= site_url('administrator/doc/api#api-'.$rest->subject); ?>" class="text-muted"><i class="fa fa-book text-red"></i> <span class=""> <?= cclang('api_documentation'); ?></span></a></li>
                          </ul>
                          <div class="tab-content">
                            <div class="tab-pane rest-page-test" id="tab_1">

                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane active" id="tab_6">

                                 <table class="table table-responsive table table-bordered table-striped"  id="diagnosis_list">
                                    <thead>
                                       <tr>
                                          <th width="20" rowspan="2" valign="midle" style="vertical-align: middle; text-align: center;">No</th>
                                          <th width="120" rowspan="2" valign="midle" style="vertical-align: middle; text-align: center;">Field</th>
                                          <th width="80" colspan="4" style="text-align: center;">Show in</th>
                                          <th width="100" rowspan="2" valign="midle" style="vertical-align: middle; text-align: center;">Input Type</th>
                                          <th width="200" rowspan="2" valign="midle" style="vertical-align: middle; text-align: center;">Validation</th>
                                       </tr>
                                       <tr>
                                          <th width="60" class="module-page-list column" style="vertical-align: middle; text-align: center;">All <i><b>GET</b></i></th>
                                          <th width="60" class="module-page-add add_form" style="vertical-align: middle; text-align: center;">Add <i><b>POST</b></i></th>
                                          <th width="60" class="module-page-update update_form" style="vertical-align: middle; text-align: center;">Update <i><b>POST</b></i></th>
                                          <th width="60" class="detail_page" style="vertical-align: middle; text-align: center;">Detail <i><b>GET</b></i></th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <?php $i=0; foreach ($rest_field as $row):  $i++; 
                                       ?>
                                       <tr>
                                          <td  >
                                             <?= $i; ?>
                                             <input type="hidden" name="rest[<?=$i; ?>][<?=$row->field_name; ?>][sort]" class="priority" value="<?= $i; ?>" >
                                             <?php if ($rest->primary_key == 1) { ?>
                                             <input type="hidden" name="primary_key" value="<?= $rest->primary_key == 1? $row->field_name : ''; ?>" >
                                             <?php } ?>
                                             <input type="hidden" class="rest-id" id="rest-id" value="<?= $i; ?>" >
                                             <input type="hidden" class="rest-name" id="rest-name" value="<?= $row->field_name; ?>" >
                                          </td>
                                          <td>
                                             <?= $row->field_name; ?>   
                                          </td>
                                          <td class="column">
                                             <input class="flat-red check" type="checkbox" <?= $row->show_column == 'yes' ? 'checked' : ''; ?> name="rest[<?=$i; ?>][<?=$row->field_name; ?>][show_in_column]" value="yes">
                                          </td>
                                          <td class="add_form">
                                             <input class="flat-red check" type="checkbox" <?= $row->show_add_api == 'yes' ? 'checked' : ''; ?> name="rest[<?=$i; ?>][<?=$row->field_name; ?>][show_in_add_form]" value="yes">
                                          </td>
                                          <td class="update_form">
                                             <input class="flat-red check" type="checkbox" <?= $row->show_update_api == 'yes' ? 'checked' : ''; ?> name="rest[<?=$i; ?>][<?=$row->field_name; ?>][show_in_update_form]" value="yes">
                                          </td>
                                          <td class="detail_page">
                                             <input class="flat-red check" type="checkbox" <?= $row->show_detail_api == 'yes' ? 'checked' : ''; ?> name="rest[<?=$i; ?>][<?=$row->field_name; ?>][show_in_detail_page]" value="yes">
                                          </td>
                                          <td>
                                             <div class="col-md-12">
                                                <div class="form-group ">
                                                  <?= ucwords(clean_snake_case($row->input_type)); ?>
                                                </div>
                                             </div>
                                          </td>
                                          <td>
                                             <?php if (isset($rest_field_validation[$row->id])): 
                                             foreach ($rest_field_validation[$row->id] as $rule) {
                                             ?>
                                             <div class="box-validation <?= str_replace(',', ' ', $rule->group_input).' '.$rule->validation_name; ?>"> 
                                               <label><?= _ent(clean_snake_case($rule->validation)); ?> <?= $rule->input_able == 'yes' ? ':' : ''; ?>   <span class="text-red"> <?= _ent($rule->validation_value); ?></span></div> 
                                             
                                             </div>
                                             <?php 
                                              }
                                             endif; ?>
                                          </td>
                                       </tr>
                                       <?php endforeach; ?>
                                    </tbody>
                                 </table>

                                <div class="view-nav">
                                    <?php is_allowed('rest_update', function() use ($rest){?>
                                    <a class="btn btn-flat btn-info btn_edit btn_action" id="btn_edit" data-stype='back' title="<?= cclang('update', ['Rest']); ?> (Ctrl+e)" href="<?= site_url('administrator/rest/edit/'.$rest->id); ?>"><i class="fa fa-edit" ></i> <?= cclang('update', ['Rest']); ?></a>
                                    <?php }) ?>
                                    <a class="btn btn-flat btn-default btn_action" id="btn_back" title="back (Ctrl+x)" href="<?= site_url('administrator/rest/'); ?>"><i class="fa fa-undo" ></i>  <?= cclang('go_list', ['Rest']); ?></a>
                                 </div>
                              </div>
                              
                           <!-- end tab 1 -->
                            </div>
                            <!-- /.tab-pane -->
                          </div>
                          <!-- /.tab-content -->
                        </div>
                        <!-- nav-tabs-custom -->
                      </div>
                      <!-- /.col -->

                    
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

<script>
$(document).ready(function() {
    var x_api_key = null;
    var x_token = null;

    $(document).ajaxComplete(function(event, xhr, settings) {
        if (typeof xhr.responseJSON == 'object') {
            if (typeof xhr.responseJSON.message != 'undefined') {
                var message = xhr.responseJSON.message.trim().toLowerCase();
                if (message == 'invalid api key') {
                    swal({
                        title: 'API Key Is not valid!',
                        text: 'if you do not have key, get the key by visiting <a href="' + BASE_URL + 'administrator/keys" target="blank">this page</a>',
                        html: true
                    });
                    return false;
                } else if (message == 'wrong number of segments') {
                    swal({
                        title: 'Token Is not valid!',
                        text: 'following <a href="' + BASE_URL + 'administrator/rest/tool/get-token" target="blank">this URL</a> guide to get a token ',
                        html: true
                    });
                    return false;
                }
            }
        }
    });

    $('.btn-call-page-test').click(function() {
        $('.message').hide();
        $('.loading').show();

        x_api_key = $('#x_api_key').val();
        x_token = $('#x_token').val();

        var url = $(this).attr('data-url');

        $.ajax({
                url: url,
                type: 'get',
                dataType: 'json',
            })
            .done(function(res) {
                if (res.success) {
                    $('.rest-page-test').html(res.html);
                    $('#x_api_key').val(x_api_key);
                    $('#x_token').val(x_token);

                } else {
                    $('.message').printMessage({
                        message: res.message,
                        type: 'warning'
                    });
                    $('.message').fadeIn();
                }

            })
            .fail(function() {
                $('.message').printMessage({
                    message: 'Error getting data',
                    type: 'warning'
                });
            })
            .always(function() {
                $('.loading').hide();
            });

    }); /*end btn save*/

    $('.btn_save').click(function() {
        $('.message').hide();

        var form_rest = $('#form_rest');
        var data_post = form_rest.serialize();
        var save_type = $(this).attr('data-stype');

        $('.loading').show();

        $.ajax({
                url: BASE_URL + '/administrator/rest/edit_save/' + <?= $rest->id; ?> ,
                type: 'POST',
                dataType: 'json',
                data: data_post,
            })
            .done(function(res) {
                if (res.success) {

                    if (save_type == 'back') {
                        window.location.href = res.redirect;
                        return;
                    }

                    $('.message').printMessage({
                        message: res.message
                    });
                    $('.message').fadeIn();

                } else {
                    $('.message').printMessage({
                        message: res.message,
                        type: 'warning'
                    });
                    $('.message').fadeIn();
                }

            })
            .fail(function() {
                $('.message').printMessage({
                    message: 'Error save data',
                    type: 'warning'
                });
            })
            .always(function() {
                $('.loading').hide();
                $('html, body').animate({
                    scrollTop: $(document).height()
                }, 3000);
            });

        return false;
    }); /*end btn save*/
}); /*end doc ready*/
</script>
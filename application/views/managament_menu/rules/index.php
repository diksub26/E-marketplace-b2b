<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2><i class="fa fa-gear"></i>&nbsp;Kelola Rules Menu</h2>
                <div class="clearfix"></div>
            </div>

            <div class="x_content">

                <div class="col-xs-3">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs tabs-left">
                        <?php
                          foreach ($roles as $value) {
                            if($value->id_roles_menu == 1){
                              echo '<li class="active"><a href="#'.strtolower(preg_replace('/\s+/','-',$value->roles_name)).'" data-toggle="tab">'.$value->roles_name.'</a></li>';
                            }else{
                              echo '<li><a href="#'.strtolower(preg_replace('/\s+/','-',$value->roles_name)).'" data-toggle="tab">'.$value->roles_name.'</a></li>';
                            }
                          }
                        ?>
                </div>

                <div class="col-xs-9">
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <?php
                          foreach ($roles as $value) {
                            if($value->id_roles_menu == 1){
                              echo '<div class="tab-pane active" id="'.strtolower(preg_replace('/\s+/','-',$value->roles_name)).'">';
                              echo '<button class="btn btn-sm btn-success" id="btn-add" onclick=\'add("'.$value->id_roles_menu.'")\'><i class="fa fa-plus">&nbsp;Tambah Menu</i></button>';
                              foreach($ruleList as $val){
                                if($value->id_roles_menu == $val->id_roles_menu){ ?>
                                  <div class="x_panel">
                                    <div class="x_title">
                                      <h2>List Menu</h2>
                                      <div class="clearfix"></div>
                                    </div>

                                    <div class="x_content">
                                      <?php $list = json_decode($val->menu);
                                      foreach ($list as $val) { ?>
                                        <div class="form-group row" id="<?= 'el-switch-'.$val->id_rules_menu ?>" >
                                            <label class="control-label col-md-4 col-sm-4 col-xs-12"><?= $val->menu ?></label>
                                            <input type="checkbox" class="js-switch input-sm" name="id" switch_data='<?= "IS_".$val->id_rules_menu ?>' <?= ($val->access == 'allowed' ? 'checked' : '')?>/>
                                            <button class="btn btn-xs btn-danger" onClick="deleteData('<?= $val->id_rules_menu ?>',this)" title='Hapus Data'><i class='fa fa-trash'></i></button>
                                        </div>   
                                      <?php } ?>
                                    </div>
                                  </div>

                                <?php }
                              }
                              echo '</div>';
                            }else{
                              echo '<div class="tab-pane" id="'.strtolower(preg_replace('/\s+/','-',$value->roles_name)).'">';
                              echo '<button class="btn btn-sm btn-success" id="btn-add" onclick=\'add("'.$value->id_roles_menu.'")\'><i class="fa fa-plus">&nbsp;Tambah Menu</i></button>';
                              foreach($ruleList as $val){
                                if($value->id_roles_menu == $val->id_roles_menu){ ?>
                                  <div class="x_panel">
                                    <div class="x_title">
                                      <h2>List Menu</h2>
                                      <div class="clearfix"></div>
                                    </div>

                                    <div class="x_content">
                                      <?php $list = json_decode($val->menu);
                                      foreach ($list as $val) { ?>
                                        <div class="form-group row" id="<?= 'el-switch-'.$val->id_rules_menu ?>">
                                            <label class="control-label col-md-4 col-sm-4 col-xs-12"><?= $val->menu ?></label>
                                            <input type="checkbox" class="js-switch input-sm" name="id" switch_data='<?= "IS_".$val->id_rules_menu ?>' <?= ($val->access == 'allowed' ? 'checked' : '')?>/>
                                            <button class="btn btn-xs btn-danger" onClick="deleteData('<?= $val->id_rules_menu ?>',this)" title='Hapus Data'><i class='fa fa-trash'></i></button>
                                        </div>   
                                      <?php } ?>
                                    </div>
                                  </div>  
                                <?php }
                              }
                              echo '</div>';
                            }
                          }
                        ?>
                    </div>
                </div>

                <div class="clearfix"></div>

            </div>
        </div>
    </div>
</div>

<?= $template['js'] ?>

<script>

  //variabel global
  var module_url = "<?= base_url().$this->module?>";
  csrf_token = "<?= $csrf['hash']; ?>";
  csrf_name = "<?= $csrf['name']; ?>";

  $(document).ready(function() {

    $('.js-switch').on('change',function(){
      let access = 'allowed';
      let data = $(this).attr('switch_data');
      data = data.split('_');

      if(this.checked != true){
        access = 'deny';
      };

      $.ajax({
        url : module_url + '/update',
        type : 'POST',
        dataType : 'JSON',
        data : {
          'roket' : csrf_token,
          'id' : data[1],
          'acc' : access
        },
        success : function(data){
          csrf_name = data.csrf.name;
          csrf_token = data.csrf.hash;

          if(data.status != "ERROR"){
            showNotify(data.status,data.msg,'success');
          }else{
            showNotify(data.status,data.msg,'error');
          }
        },
        error: function () {
          showNotify('Error','Whoops, something when wrong on our servers','error');  
        }
        
      })
    })

  });

  function deleteData(data, btn) {
    let dataDel = { 'id' : data, 'roket' : csrf_token };
    let url = '/delete';
    let button = $(btn).html();

    $(btn).html("<i class='fa fa-spinner fa-spin'></i>Loading");
    swalDeleteButtons.fire({
        title: 'Anda yakin ?',
        text: "Data yang anda pilih akan dihapus secara permenen !",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Delete!',
        cancelButtonText: 'No, cancel!',
        reverseButtons: true
      }).then((result) => {
        if (result.value) {
            swal_overlay();
            let btn = $('.swal2-confirm').html();
            $('.swal2-confirm').html("<i class='fa fa-spinner fa-spin'></i>Loading");

            $.ajax({
                url : module_url + url,
                type: "POST",
                dataType: 'JSON',
                data : dataDel,
                success : function(data){
                    csrf_name = data.csrf.name;
                    csrf_token = data.csrf.hash;
                    
                    if(data.status != "ERROR"){
                        swalDeleteButtons.fire(
                            'Deleted!',
                            data.msg,
                            'success'
                        );
                      $('#el-switch-'+dataDel.id).remove();
                    }else{
                        swalDeleteButtons.fire(
                            data.status,
                            data.msg,
                            'error'
                        )
                    }
                },
                error: function () {
                    swalDeleteButtons.fire(
                        'Whoops, something when wrong on our servers',
                        'Please Try again or contact Administrator',
                        'error'
                    )
                }
            });
            $('.swal2-confirm').html(btn);
            swal_overlay_hide();
        } else if (result.dismiss === Swal.DismissReason.cancel){
            swalDeleteButtons.close();
        }
      })

    $(btn).html(button);
  }

  function add(data){
    let button = $('#btn-add').html();
    $('#btn-add').html("<i class='fa fa-spinner fa-spin'></i>Loading");
    clear_modal();
    $('.modal-title').html('<i class="fa fa-edit"></i> Tambah Data');
    $('.modal-body').load(module_url + "/getForm/"+data);
    $('.modal-footer').append('<button type="button" class="btn btn-success" id="btnSave" onClick="saveData(this)"><i class="fa fa-save"></i> Tambah</button>');
    $('.modal-dialog').removeClass('modal-lg');
    $('#modal').modal({
        'backdrop' : "static",
    })
        
    $('.modal').on('shown.bs.modal',function(){
        $('#btn-add').html(button);
    })
  }

  function saveData(btn){
    modal_overlay();

    let button = $(btn).html();
    $(btn).html("<i class='fa fa-spinner fa-spin'></i>Loading");
        
    let formData = $('#form-data').serializeArray();

    $.ajax({
        url : module_url + '/save',
        type: "POST",
        dataType: 'JSON',
        data : formData,
        success : function(data){
          csrf_name = data.csrf.name;
          csrf_token = data.csrf.hash;

          if(data.status != "ERROR"){
            showNotify(data.status,data.msg,'success');

            //refresh content
            $('#'+data.roles_name+' > .x_panel >.x_content').html('');
            $('#'+data.roles_name+' > .x_panel >.x_content').html(data.html);
            if ($(".js-switch")[0]) {
              var elems = Array.prototype.slice.call(document.querySelectorAll('#'+data.roles_name+' > .x_panel >.x_content .js-switch'));
              elems.forEach(function (html) {
                var switchery = new Switchery(html, {
                  color: '#26B99A',
                  size: 'small'
                });
              });
            }

          }else{
            showNotify(data.status,data.msg,'error');
          }
            $(btn).html(button);
        },
        error: function () {
          showNotify('Error','Whoops, something when wrong on our servers','error');  
        } 
    });
    $('#modal').modal('hide');
    modal_overlay_hide();
  }
</script>
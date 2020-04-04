<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Daftar Menu</h2>
          <div class="nav navbar-right">
            <button id='btn-add' class='btn btn-success btn-sm' onclick="add()"><i class="fa fa-plus"></i> Tambah Data</button>
          </div>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
           <table id="tblResources" class="table table-striped jambo_table bulk_action">
             <thead>
               <tr clas="headings">
                 <th name='No'>No</th>
                 <th>Nama Menu</th>
                 <th>Uri</th>
                 <th>Updated By</th>
                 <th>Action</th>
               </tr>
             </thead>
             <tbody>
             </tbody>
           </table>
        </div>
      </div>
    </div>
</div>

<?= $template['js'] ?>

<script>
    //variabel global
    var module_url = "<?= base_url().$this->module?>";
     
    var tabelResources = $('#tblResources').DataTable({
         "processing": true,
         "ordering" : true,
         "serverSide": true,
         "ajax": {
             "url" : "<?= base_url().$this->module.'/data_tables'?>",
             "type" : "POST"
         },
         "columns": [
             {"render" : render_id_dt},
             { "name": "menu", "data" : "menu"},
             { "name": "resources", "data" : "resources"},
             { "name": "USERNAME", "data" : "USERNAME"},
             { "data" : "id_menu","render" : render_act,"className" : 'text-center'}
            ]
    });

    function render_act(data, type, row, meta){
        act = "<button class=\"btn btn-xs btn-primary\" onClick=get_detail("+data+",this) title='Detail/Update'><i class='fa fa-edit'></i></button> ";
        act += "<button class=\"btn btn-xs btn-danger\" onClick=delete("+data+",this) title='Hapus Data'><i class='fa fa-trash'></i></button> ";
        return act;
    }

    function add(){
        let button = $('#btn-add').html();
        $('#btn-add').html("<i class='fa fa-spinner fa-spin'></i>Loading");
        clear_modal();
        $('.modal-title').html('<i class="fa fa-edit"></i> Tambah Data');
        $('.modal-body').load(module_url + "/getForm");
        $('.modal-footer').append('<button type="button" class="btn btn-success" id="btnSave" onClick="saveData()"><i class="fa fa-save"></i> Simpan</button>');
        $('.modal-dialog').removeClass('modal-lg');
        $('#modal').modal({
            'backdrop' : "static",
        })
        
        $('.modal').on('shown.bs.modal',function(){
            $('#btn-add').html(button);
        })
    }

    function get_detail(data,btn){ 
        let button = $(btn).html();
        $(btn).html("<i class='fa fa-spinner fa-spin'></i>Loading");
        clear_modal();
        $('.modal-title').html('<i class="fa fa-edit"></i> Detail Data Produk');
        $('.modal-dialog').removeClass('modal-lg');
        $('.modal-body').load(module_url + "/getForm",function(){
        $.ajax({
            url : module_url + '/getDetailResources',
            type: "POST",
            dataType: 'JSON',
            data : {'id_menu' : data},
            success : function(data){
            if(data.status != "ERROR"){
                $.each(data.msg,function(index, val){
                    $('#'+index).val(val);
                })
            }
            }
        });      
        });
    
        $('.modal-footer').append('<button type="button" class="btn btn-primary" id="btnUpdate" onClick="updateData('+data+',this)"><i class="fa fa-edit"></i> Update</button>');
        $('#modal').modal({
            'backdrop' : "static",
        });

        $('.modal').on('shown.bs.modal',function(){
            $(btn).html(button);
        })
    }

    function updateData(data, btn){

        modal_overlay();

        let button = $(btn).html();
        $(btn).html("<i class='fa fa-spinner fa-spin'></i>Loading");
        
        let formData = $('#form-add').serializeArray();
        formData.push({name : 'id_menu',value : data});

        $.ajax({
            url : module_url + '/update',
            type: "POST",
            dataType: 'JSON',
            data : formData,
            success : function(data){
                if(data.status != "ERROR"){

                    $(btn).html(button);
                    $('#modal').modal('hide');
                    new PNotify({
                        title: data.status,
                        text: data.msg,
                        type: 'success',
                        styling: 'bootstrap3'
                    });

                    tabelResources.ajax.reload();
                }
            }
        });
        modal_overlay_hide();
    }
</script>
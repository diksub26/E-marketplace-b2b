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
    csrf_token = "<?= $csrf['hash']; ?>";
    csrf_name = "<?= $csrf['name']; ?>";

    var tabelResources = $('#tblResources').DataTable({
         "processing": true,
         "ordering" : true,
         "serverSide": true,
         "ajax": {
             "url" : "<?= base_url().$this->module.'/data_tables'?>",
             "type" : "GET"
         },
         "columns": [
             {"render" : render_id_dt},
             { "name": "menu", "data" : "menu"},
             { "name": "resources", "data" : "resources"},
             { "name": "USERNAME", "data" : "USERNAME"},
             { "data" : "id_menu","render" : render_act,"className" : 'text-center'}
            ],
    });

    function render_act(data, type, row, meta){
        act = "<button class=\"btn btn-xs btn-primary\" onClick=get_detail("+data+",this) title='Detail/Update'><i class='fa fa-edit'></i></button> ";
        act += "<button class=\"btn btn-xs btn-danger\" onClick=deleteData("+data+",this) title='Hapus Data'><i class='fa fa-trash'></i></button> ";
        return act;
    }

    function add(){
        let button = $('#btn-add').html();
        $('#btn-add').html("<i class='fa fa-spinner fa-spin'></i>Loading");
        clear_modal();
        $('.modal-title').html('<i class="fa fa-edit"></i> Tambah Data');
        $('.modal-body').load(module_url + "/getForm");
        $('.modal-footer').append('<button type="button" class="btn btn-success" id="btnSave" onClick="saveData(this)"><i class="fa fa-save"></i> Simpan</button>');
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
            csrf_token = $('#form-data > input[name = "'+csrf_name+'"').val();
            $.ajax({
                url : module_url + '/getDetailResources',
                type: "POST",
                dataType: 'JSON',
                data : { 'id_menu' : data, <?= $csrf['name']; ?> : csrf_token },
                success : function(data){
                    if(data.status != "ERROR"){
                        $.each(data.msg,function(index, val){
                            $('#'+index).val(val);
                        })
                        $('#form-data > input[name = "'+data.csrf.name+'"').val(data.csrf.hash);
                        csrf_name = data.csrf.name;
                        csrf_token = data.csrf.hash;
                    }
                },
                error: function () {
                    showNotify('Error','Whoops, something when wrong on our servers','error');  
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
        
        let formData = $('#form-data').serializeArray();
        formData.push({name : 'id_menu',value : data});

        $.ajax({
            url : module_url + '/update',
            type: "POST",
            dataType: 'JSON',
            data : formData,
            success : function(data){
                if(data.status != "ERROR"){
                    $('#modal').modal('hide');
                    showNotify(data.status,data.msg,'success');

                    tabelResources.ajax.reload();
                }else{
                    showNotify(data.status,data.msg,'error');
                }
                $(btn).html(button);
            },
            error: function () {
              showNotify('Error','Whoops, something when wrong on our servers','error');  
            } 
        });
        modal_overlay_hide();
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
                if(data.status != "ERROR"){
                    $('#modal').modal('hide');
                    showNotify(data.status,data.msg,'success');
                    csrf_name = data.csrf.name;
                    csrf_token = data.csrf.hash;

                    tabelResources.ajax.reload();
                }else{
                    showNotify(data.status,data.msg,'error');
                }
                $(btn).html(button);
            },
            error: function () {
              showNotify('Error','Whoops, something when wrong on our servers','error');  
            } 
        });
        modal_overlay_hide();
    }

    function deleteData(data, btn) {
        let dataDel = { 'id_menu' : data, 'roket' : csrf_token };
        let url = '/delete';
        let button = $(btn).html();

        $(btn).html("<i class='fa fa-spinner fa-spin'></i>Loading");
        confirmDelete(dataDel,url);
        tabelResources.ajax.reload();
        $(btn).html(button);
    }
</script>
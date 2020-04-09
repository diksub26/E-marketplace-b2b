<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Daftar Produk</h2>
          <div class="nav navbar-right">
            <button id='btn-add' class='btn btn-success btn-sm' onclick="addProduct()"><i class="fa fa-plus"></i> Tambah Data</button>
          </div>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
           <table id="tblProduk" class="table table-striped jambo_table bulk_action">
             <thead>
               <tr clas="headings">
                 <th name='No'>No</th>
                 <th>Nama Produk</th>
                 <th>Harga</th>
                 <th>Kategori</th>
                 <th>Stock</th>
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
  var module_url = "<?= base_url().$this->resources?>";

  $(document).ready(function() {

    $('#tblProduk').DataTable({
      "processing": true,
      "ordering" : true,
      "serverSide": true,
      "ajax": {
          "url" : "<?= base_url().$this->resources.'/dt'?>",
          "data" : { <?= $csrf['name']; ?> : "<?= $csrf['hash']; ?>" },
          "type" : "GET"
      },
      "columns": [
          {"render" : render_id_dt},
          { "name": "NAMA", "data" : "NAMA"},
          { "data" : "HARGA"},
          { "data" : "KATEGORI"},
          { "data" : "STOCK"},
          { "data" : "ID_PRODUK","render" : render_act,"className" : 'text-center'}
        ]
    });

  });

function render_act(data, type, row, meta){
  act = "<button class=\"btn btn-xs btn-primary\" onClick=get_detail("+data+",this) title='Detail/Update'><i class='fa fa-edit'></i></button> ";
  act += "<button class=\"btn btn-xs btn-danger\" onClick=delete("+data+",this) title='Hapus Data'><i class='fa fa-trash'></i></button> ";
  act += "<button class=\"btn btn-xs btn-info\" onClick=updateStock("+data+", this) title='Update Stock'><i class='fa fa-cubes'></i></button>";
  return act;
}

function get_detail(data,btn){ 
    let button = $(btn).html();
    $(btn).html("<i class='fa fa-spinner fa-spin'></i>Loading");
    clear_modal(); 
    $('.modal-title').html('<i class="fa fa-edit"></i> Detail Data Produk');
    $('.modal-body').load(module_url + "/form",function(){
      $.ajax({
        url : module_url + '/detail',
        type: "POST",
        dataType: 'JSON',
        data : {<?= $csrf['name']; ?> : "<?= $csrf['hash']; ?>", 'ID_PRODUK' : data},
        success : function(data){
          if(data.status != "ERROR"){
            $.each(data.msg,function(index, val){
              $('#'+index).val(val);
            })
          }
        }
      });      
    });
   
    $('.modal-footer').append('<button type="button" class="btn btn-primary" id="btnUpdate" onClick="updateData('+data+')"><i class="fa fa-edit"></i> Update</button>');
    $('#modal').modal({
      'backdrop' : "static",
    });

    $('.modal').on('shown.bs.modal',function(){
      $(btn).html(button);
    })
}

function updateData(data){
  console.log(data);
}

function addProduct(){
  let button = $('#btn-add').html();
  $('#btn-add').html("<i class='fa fa-spinner fa-spin'></i>Loading");
  clear_modal();
  $('.modal-title').html('<i class="fa fa-edit"></i> Tambah Data');
  $('.modal-body').load(module_url + "/form",function(){
    $('.mask > p').html('Upload Foto Produk');
  });
  $('.modal-footer').append('<button type="button" class="btn btn-success" id="btnSave" onClick="saveData()"><i class="fa fa-save"></i> Simpan</button>');
  $('#modal').modal({
    'backdrop' : "static",
  })

  $('.modal').on('shown.bs.modal',function(){
    $('#btn-add').html(button);
  })
}
</script>

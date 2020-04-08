<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Daftar User</h2>
          <div class="nav navbar-right">
            <button id='btn-add' class='btn btn-success btn-sm' onclick="add()"><i class="fa fa-plus"></i> Tambah Sys Admin</button>
          </div>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
           <table id="tblUser" class="table table-striped jambo_table bulk_action">
             <thead>
               <tr clas="headings">
                 <th name='No'>No</th>
                 <th>Username</th>
                 <th>Roles</th>
                 <th>Register Date</th>
                 <th>Last Login</th>
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

    var tabelUser = $('#tblUser').DataTable({
        "processing": true,
        "ordering" : true,
        "serverSide": true,
        "ajax": {
            "url" : "<?= base_url().$this->module.'/data_tables'?>",
            "type" : "GET"
        },
        "columns": [
            {"render" : render_id_dt},
            { "name": "USERNAME", "data" : "USERNAME"},
            { "name": "roles_menu.roles_name", "data" : "roles_name"},
            { "data" : "CREATED", "render" : dt_date},
            { "data" : "LAST_LOGIN", "render" : dt_datetime},
            { "data" : "ID","render" : render_act,"className" : 'text-center'}
           ],
    });

    function render_act(data, type, row, meta){
        act = "<button class=\"btn btn-xs btn-primary\" onClick=get_detail("+data+",this) title='Detail'><i class='fa fa-eye'></i></button> ";
        return act;
    }
 
</script>
<div class="container-fluid">
    <div class="row">
        <form method="post" id='form-data'>
        <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
            <div class="form-group row">
                <label for="roles_name" class="control-label col-md-4 col-sm-4 col-xs-12">Nama Roles</label>
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <input type="text" name="roles_name" id="roles_name" placehoder='Nama Roles' class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="roles_name" class="control-label col-md-4 col-sm-4 col-xs-12">Pilih Parent</label>
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <select class='form-control'name="id_parent_roles" id="id_parent_roles">
                        <?php foreach($parent as $val){ ?>
                            <option value="<?= $val->id_parent_roles ?>"><?= $val->name ?> </option>
                        <?php } ?>
                    </select>
                </div>
            </div>
        </form>
    </div>
</div>
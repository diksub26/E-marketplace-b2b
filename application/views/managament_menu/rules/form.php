<div class="container-fluid">
    <div class="row">
        <form action="" method="post" id="form-data">
            <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
            <input type="hidden" name="roles" value="<?= $roles ?>" />
            <input type="hidden" name="roles_name" value="<?= $roles_name ?>" />
            <div class="form-group row">
                <label for="id_menu" class="control-label col-md-4 col-sm-4 col-xs-12">List Menu</label>
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <select class='form-control'name="id_menu" id="id_menu">
                        <option></option>
                        <?php foreach($menu as $val){ ?>
                            <option value="<?= $val->id_menu ?>"><?= $val->menu ?> </option>
                        <?php } ?>
                    </select>
                </div>
            </div>
        </form>
    </div>
</div>
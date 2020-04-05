<div class="container-fluid">
    <div class="row">
        <form method="post" id='form-data'>
        <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
            <div class="form-group row">
                <label for="menu" class="control-label col-md-4 col-sm-4 col-xs-12">Nama Menu</label>
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <input type="text" name="menu" id="menu" placehoder='Nama Menu' class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="resources" class="control-label col-md-4 col-sm-4 col-xs-12">Menu URI</label>
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <input type="text" name="resources" id="resources" placehoder='Menu URI' class="form-control">
                </div>
            </div>
        </form>
    </div>
</div>
<!-- bootstrap-wysiwyg -->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-5">
            <div class="row">
                <form class="form-horizontal" id='form_upload' enctype="multipart/form-data">
                    <div class="col-md-12">
                        <div class="thumbnail" style='height : 270px'>
                            <div class="image view view-first" style='height : 270px'>
                                <img style='width: 100%; display: block;height:100%'
                                    src="<?= base_url()."assets/img/"?>default_product.png" alt="image">
                                <div class="mask" style='height:270px'>
                                    <p>Ganti Foto</p>
                                    <div class="tools tools-bottom">
                                        <input type="file" name="uploadProdukImage" id="uploadProdukImage" class='hidden' accept="image/*">
                                        <a href="#" id='link_upload'><i class="fa fa-pencil"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <form class="form-horizontal" id='form_upload' enctype="multipart/form-data">
                        <div class="col-md-12">
                            <div class="thumbnail" style='height : 135px'>
                                <div class="image view view-first" style='height : 135px'>
                                    <img style='width: 100%; display: block;height:100%'
                                        src="<?= base_url()."assets/img/"?>default_product.png" alt="image">
                                    <div class="mask" style='height:135px'>
                                        <p>Ganti Foto</p>
                                        <div class="tools tools-bottom" style='margin-top:-25px'>
                                            <input type="file" name="uploadProdukImage2" id="uploadProdukImage2" class='hidden' accept="image/*">
                                            <a href="#" id='link_upload2'><i class="fa fa-pencil"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 col-sm-6">
                    <form class="form-horizontal" id='form_upload' enctype="multipart/form-data">
                        <div class="col-md-12">
                            <div class="thumbnail" style='height : 135px'>
                                <div class="image view view-first" style='height : 135px'>
                                    <img style='width: 100%; display: block;height:100%'
                                        src="<?= base_url()."assets/img/"?>default_product.png" alt="image">
                                    <div class="mask" style='height:135px'>
                                        <p>Ganti Foto</p>
                                        <div class="tools tools-bottom" style='margin-top:-25px'>
                                            <input type="file" name="uploadProdukImage3" id="uploadProdukImage3" class='hidden' accept="image/*">
                                            <a href="#" id='link_upload3'><i class="fa fa-pencil"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <div class="col-md-7">
            <form class="form-label-left">
                <div class="form-group row">
                    <label class="control-label col-md-4 col-sm-4 col-xs-12">Nama Produk</label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <input type="text" class="form-control" placeholder="Nama Produk" name='NAMA' id='NAMA'>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-4 col-sm-4 col-xs-12">Harga</label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <input type="text" class="form-control" placeholder="Harga" name='HARGA' id='HARGA'>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-4 col-sm-4 col-xs-12">Model</label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <input type="text" class="form-control" placeholder="Model" name='MODEL' id='MODEL'>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-4 col-sm-4 col-xs-12">Kategori</label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <input type="text" class="form-control" placeholder="Kategori" name='KATEGORI' id='KATEGORI'>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-4 col-sm-4 col-xs-12">Deskripsi</label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <textarea type="text" class="form-control" placeholder="Deskripsi" name='KATEGORI'
                            id='KATEGORI'></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-4 col-sm-4 col-xs-12">Ukuran</label>
                    <div class="col-md-8 col-sm-8 col-xs-12" >
                        <div class="row" style='margin-top:10px;'>
                            <span class="badge badge-primary">S</span>&nbsp;&nbsp;&nbsp;<input type="checkbox" name='is_s' id='is_s'class="js-switch input-sm" />
                            <span class="badge badge-primary">M</span>&nbsp;&nbsp;&nbsp;<input type="checkbox" name='is_m' id='is_m'class="js-switch input-sm" />
                            <span class="badge badge-primary">L</span>&nbsp;&nbsp;&nbsp;<input type="checkbox" name='is_l' id='is_l'class="js-switch input-sm" />
                        </div>
                        <div class="row" style='margin-top:10px;'>
                            <span class="badge badge-primary">XL</span>&nbsp;&nbsp;<input type="checkbox" name='is_xl' id='is_xl' class="js-switch input-sm" />
                            <span class="badge badge-primary">XXL</span>&nbsp;<input type="checkbox" name='is_xxl' id='is_xxl' class="js-switch input-sm" />
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="clearfix"></div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group row">
                <label class="control-label col-md-4 col-sm-4 col-xs-12">Pilihan Warna</label>
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <select class="js-example-basic-multiple form-control" style="width: 100%" name="PILIHAN_WARNA" id='PILIHAN_WARNA' multiple="multiple">
                        <option value="AL">Alabama</option>
                        <option value="WY">Wyoming</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="control-label col-md-4 col-sm-4 col-xs-12">Jenis Pembayaran</label>
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <select class="js-example-basic-multiple form-control" style="width: 100%" name="JNS_PEMBAYARAN" id='JNS_PEMBAYARAN' multiple="multiple">
                        <option value="AL">Alabama</option>
                        <option value="WY">Wyoming</option>
                    </select>
                </div>
            </div>
        </div>    

        <div class="col-md-6">
            <div class="form-group row">
                <label class="control-label col-md-4 col-sm-4 col-xs-12">Pilihan Pengiriman</label>
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <select class="js-example-basic-multiple form-control" style="width: 100%" name="JNS_PENGIRIMAN" id='JNS_PENGIRIMAN' multiple="multiple">
                        <option value="AL">Alabama</option>
                        <option value="WY">Wyoming</option>
                    </select>
                </div> 
            </div>
            <div class="form-group row">
                <label class="control-label col-md-4 col-sm-4 col-xs-12">Terima Permintaan Produksi</label>
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <input type="checkbox" class="js-switch input-sm" name='IS_PRODUKSI' id='IS_PRODUKSI'/>
                </div> 
            </div>
        </div>         
    </div>
</div>

<script>
$(document).ready(function() {
// Switchery
    if ($(".js-switch")[0]) {
        var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
        elems.forEach(function (html) {
            var switchery = new Switchery(html, {
                color: '#26B99A',
                size: 'small'
            });
        });
    }
// /Switchery

    $('#link_upload').on('click',function(e){
        e.preventDefault();
        $('#uploadProdukImage').trigger('click');
    })

    $('#link_upload2').on('click',function(e){
        e.preventDefault();
        $('#uploadProdukImage2').trigger('click');
    })

    $('#link_upload3').on('click',function(e){
        e.preventDefault();
        $('#uploadProdukImage3').trigger('click');
    })

    $('.js-example-basic-multiple').select2();
});
</script>

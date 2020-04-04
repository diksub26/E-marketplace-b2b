// overlay loader
$(document).on('readystatechange',function(){
    if(document.readyState =="complete"){
        $.LoadingOverlay("hide");
    }else{
        $.LoadingOverlaySetup({
            background  : "rgba(0, 0, 0, 0.5)",
            image       : "../assets/js/loader.svg",
            imageAnimation  : "1.8s fadein",
            imageColor      : "default",

            size :50,
            maxSize : 200,
            minsize :20
        });

        $.LoadingOverlay("show");
    }
});

$(document).ready(function(){
    
    // append button close for modal
    clear_modal();
    // clear modal body and modal footer on hidden
    // $('.modal').on('hide.bs.modal hidden.bs.modal',function(){
    //     clear_modal();
    // });
})

function render_id_dt(data,type,full,meta){
    return meta.row +meta.settings._iDisplayStart + 1;
}

function clear_modal(){
    var lg = $('#modal-dialog').hasClass('.modal-lg');

    if(lg != true ){
        $('#modal-dialog').removeAttr('class');
        $('#modal-dialog').attr('class','modal-dialog modal-dialog-centered modal-lg');
    }

    $('.modal-body').html('');
    $('.modal-footer').html('');
    $('.modal-footer').append('<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-repeat"></i> Batal</button>');
}

function  modal_overlay(){
    $('#modal').LoadingOverlay("show",{
        background  : "rgba(0, 0, 0, 0.5)",
        image       : "../assets/js/loader.svg",
        imageAnimation  : "1.8s fadein",
        imageColor      : "default",

        size :50,
        maxSize : 200,
        minsize :20
    });

    $('#modal').LoadingOverlay("show");
}

function modal_overlay_hide(){
    $('#modal').LoadingOverlay("hide", true);
}
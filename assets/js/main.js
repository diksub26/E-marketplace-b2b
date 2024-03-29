var csrf_token = '';
var csrf_name = '';

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
function swal_overlay(){
    $('.swal2-container').LoadingOverlay("show",{
        background  : "rgba(0, 0, 0, 0.5)",
        image       : "../assets/js/loader.svg",
        imageAnimation  : "1.8s fadein",
        imageColor      : "default",

        size :50,
        maxSize : 200,
        minsize :20
    });

    $('.swal2-container').LoadingOverlay("show");
}

function swal_overlay_hide(){
    $('.swal2-container').LoadingOverlay("hide", true);
}

function showNotify(status, msg, type){
    new PNotify({
        title: status,
        text: msg,
        type: type,
        styling: 'bootstrap3'
    });
}

/**
 * swal delete
 */

const swalDeleteButtons = Swal.mixin({
    customClass: {
      confirmButton: 'btn btn-success',
      cancelButton: 'btn btn-danger'
    },
    buttonsStyling: false
})

function confirmDelete(data,url,table = ''){
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
                data : data,
                success : function(data){
                    csrf_name = data.csrf.name;
                    csrf_token = data.csrf.hash;
                    
                    if(data.status != "ERROR"){
                        swalDeleteButtons.fire(
                            'Deleted!',
                            data.msg,
                            'success'
                        );

                        if(table != ''){
                            table.ajax.reload();
                        }
                        
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
}

/**
 * this function for rendering data table
 */

// Convert cell value to formatted date.
function dt_date(data, type, row, meta) {
    if (type === 'display')
        return moment(data).isValid() ? moment(data).format('DD/MM/YYYY') : data;
    else
        return data;
}
function dt_datetime(data, type, row, meta) {
    if (type === 'display')
        return moment(data).isValid() ? moment(data).format('DD/MM/YYYY HH:mm:ss') : data;
    else
        return data;
}
// Convert cell value to formatted number (integer).
function dt_number(data, type, row, meta) {
    if (type === 'display')
        return numeral(data).format('#,##0');
    else
        return data;
}

// Convert cell value to formatted currency number.
function dt_currency(data, type, row, meta) {
    if (type === 'display')
        return numeral(data).format('#,##0.00');
    else
        return data;
}

function render_id_dt(data,type,full,meta){
    return meta.row +meta.settings._iDisplayStart + 1;
}

/* end of function rendering data table*/
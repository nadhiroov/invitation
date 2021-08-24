// $('.confirmDelete').click(function(selection, e) {
function confirmDelete(selection) {
    var id = $(selection).attr('data-id');
    var url = $(selection).attr('data-target');
    swal({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        type: 'warning',
        closeOnClickOutside: false,
        buttons:{
            cancel: {
                visible: true,
                text : 'No, cancel!',
                className: 'btn btn-danger'
            },        			
            confirm: {
                text : 'Yes, delete it!',
                className : 'btn btn-success'
            }
        }
    }).then((willDelete) => {
        if (willDelete) {
        $.ajax({
            url: url + '/' + id,
            type:"GET",
            dataType: "json",
            success: function (res) {
                if (res.code === 1) {
                    var content = {};
                    content.message = 'Data Deleted !';
                    content.title = res.title;
                    content.icon = 'fas fa-check-circle';

                    $.notify(content,{
                        type: 'success',
                        placement: {
                            from: 'top',
                            align: 'right'
                        },
                        delay: 2000,
                    });
                    $('#mytable').DataTable().ajax.reload(null, false);
                }else{
                    swal("Error!", res.message, {
						icon : "error",
						buttons: {        			
							confirm: {
								className : 'btn btn-danger'
							}
						},
					});
                }
            },
        });
        
        }
    });
};

function updateData(formSelection) {
    var form = $(formSelection);
    var data = $(form).serialize();
    var action = $(form).attr('action');
    $.ajax({
        type: 'POST',
        url: action,
        data: data,
        dataType: "json",
        beforeSend: function () {},
        success: function (res = "") {
            $(".form-submit #close_modal").click();
            if (res.code === 1) {
                var content = {};
                content.message = res.message;
			    content.title = res.title;
                content.icon = 'fas fa-check-circle';

                $.notify(content,{
                    type: 'success',
                    placement: {
                        from: 'top',
                        align: 'right'
                    },
                    delay: 2000,
                });
                $('#mytable').DataTable().ajax.reload(null, false);
            }else{
                swal("Error!", res.message, {
                    icon : "error",
                    buttons: {        			
                        confirm: {
                            className : 'btn btn-danger'
                        }
                    },
                });
            }
        },
    });
}

function saveData(formSelection) {
    var form = $(formSelection);
    var data = $(form).serialize();
    var action = $(form).attr('action');
    var url = window.location.href;
    if (url.indexOf('?') > -1){
        url += '&param=1'
    }else{
        url += '?param=1'
    }
    $.ajax({
        type: 'POST',
        url: action,
        data: data,
        dataType: "json",
        // beforeSend: function () {},
        success: function (res = "") {
            if (res.code === 1) {
                var content = {};
                content.message = res.message;
			    content.title = res.title;
                content.icon = 'fas fa-check-circle';
                $.notify(content,{
                    type: 'success',
                    placement: {
                        from: 'top',
                        align: 'right'
                    },
                    delay: 2000,
                });
                setTimeout(function(){ 
                    window.location.href = url;
                 }, 2000);
            }else{
                content.message = res.message;
			    content.title = res.title;
                content.icon = 'fas fa-window-close';
                $.notify(content,{
                    type: 'danger',
                    placement: {
                        from: 'top',
                        align: 'right'
                    },
                    delay: 2000,
                });
            }
        },
    });
}

function uploadimage(img, jns, id) {
    $.ajax({
        url: 'mempelai/upload',
        method: 'POST',
        data: {image:img, jenis:jns, aidi:id},
        dataType: "json",
        success: function(res = '') {
            if (res.code === 1) {
                var content = {};
                content.message = res.message;
                content.title = res.title;
                content.icon = 'fas fa-check-circle';
                $.notify(content, {
                    type: 'success',
                    placement: {
                        from: 'top',
                        align: 'right'
                    },
                    delay: 2000,
                });
                setTimeout(function() {
                    window.location.href = 'mempelai';
                }, 1500);
            } else {
                content.message = res.message;
                content.title = res.title;
                content.icon = 'fas fa-window-close';
                $.notify(content, {
                    type: 'danger',
                    placement: {
                        from: 'top',
                        align: 'right'
                    },
                    delay: 2000,
                });
            }
        }
    });
}
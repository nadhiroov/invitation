// $('.confirmDelete').click(function(selection, e) {
function confirmDelete(selection) {
  let id = $(selection).attr("data-id");
  let url = $(selection).attr("data-target");
  swal({
    title: "Are you sure?",
    text: "You won't be able to revert this!",
    type: "warning",
    closeOnClickOutside: false,
    buttons: {
      cancel: {
        visible: true,
        text: "No, cancel!",
        className: "btn btn-danger",
      },
      confirm: {
        text: "Yes, delete it!",
        className: "btn btn-success",
      },
    },
  }).then((willDelete) => {
    if (willDelete) {
      $.ajax({
        url: url + "/" + id,
        type: "GET",
        dataType: "json",
        success: function (res) {
          if (res.code === 1) {
            let content = {};
            content.message = "Data Deleted !";
            content.title = res.title;
            content.icon = "fas fa-check-circle";
            $.notify(content, {
              type: "success",
              placement: {
                from: "top",
                align: "right",
              },
              delay: 2000,
            });
            $("#mytable").DataTable().ajax.reload(null, false);
          } else {
            swal("Error!", res.message, {
              icon: "error",
              buttons: {
                confirm: {
                  className: "btn btn-danger",
                },
              },
            });
          }
        },
      });
    }
  });
}

function updateData(formSelection) {
  let form = $(formSelection);
  let data = $(form).serialize();
  let action = $(form).attr("action");
  $.ajax({
    type: "POST",
    url: action,
    data: data,
    dataType: "json",
    beforeSend: function () {
      $("#btnSave").text("");
      $("#btnSave").prop("disabled", true);
      $("#btnSave").append(
        '<span class="spinner-border spinner-border-sm" id="loadingSpinner" role="status" aria-hidden="true"></span> Loading...'
      );
    },
    success: function (res = "") {
      $(".form-submit #close_modal").click();
      if (res.code === 1) {
        let content = {};
        content.message = res.message;
        content.title = res.title;
        content.icon = "fas fa-check-circle";

        $.notify(content, {
          type: "success",
          placement: {
            from: "top",
            align: "right",
          },
          delay: 2000,
        });
        $("#mytable").DataTable().ajax.reload(null, false);
      } else {
        swal("Error!", res.message, {
          icon: "error",
          buttons: {
            confirm: {
              className: "btn btn-danger",
            },
          },
        });
      }
      $("#btnSave").prop("disabled", false);
      $("#btnSave").text("Simpan");
      $("#loadingSpinner").remove();
    },
    error: function () {
      $("#btnSave").prop("disabled", false);
      $("#btnSave").text("Simpan");
      $("#loadingSpinner").remove();
    },
  });
}

function saveData(formSelection, idBtnSave = '') {
  let form = $(formSelection);
  let data = $(form).serialize();
  let action = $(form).attr("action");
  if (idBtnSave == "") {
    idBtnSave = 'btnSave';
  }
  $.ajax({
    type: "POST",
    url: action,
    data: data,
    dataType: "json",
    beforeSend: function () {
      $(`#${idBtnSave}`).text("");
      $(`#${idBtnSave}`).prop("disabled", true);
      $(`#${idBtnSave}`).append(
        '<span class="spinner-border spinner-border-sm" id="loadingSpinner" role="status" aria-hidden="true"></span> Loading...'
      );
    },
    success: function (res = "") {
      if (res.code === 1) {
        let content = {};
        content.message = res.message;
        content.title = res.title;
        content.icon = "fas fa-check-circle";
        $.notify(content, {
          type: "success",
          placement: {
            from: "top",
            align: "right",
          },
          delay: 2000,
        });
        setTimeout(function () {
          window.location.reload();
        }, 2000);
      } else {
        content.message = res.message;
        content.title = res.title;
        content.icon = "fas fa-window-close";
        $.notify(content, {
          type: "danger",
          placement: {
            from: "top",
            align: "right",
          },
          delay: 2000,
        });
      }
      $(`#${idBtnSave}`).prop("disabled", false);
      $(`#${idBtnSave}`).text("Simpan");
      $("#loadingSpinner").remove();
    },
    error: function () {
      $(`#${idBtnSave}`).prop("disabled", false);
      $(`#${idBtnSave}`).text("Simpan");
      $("#loadingSpinner").remove();
    },
  });
}

function uploadimage(img, jns, id) {
  $.ajax({
    url: "mempelai/upload",
    method: "POST",
    data: { image: img, jenis: jns, aidi: id },
    dataType: "json",
    success: function (res = "") {
      if (res.code === 1) {
        let content = {};
        content.message = res.message;
        content.title = res.title;
        content.icon = "fas fa-check-circle";
        $.notify(content, {
          type: "success",
          placement: {
            from: "top",
            align: "right",
          },
          delay: 2000,
        });
        setTimeout(function () {
          window.location.href = "mempelai";
        }, 1500);
      } else {
        content.message = res.message;
        content.title = res.title;
        content.icon = "fas fa-window-close";
        $.notify(content, {
          type: "danger",
          placement: {
            from: "top",
            align: "right",
          },
          delay: 2000,
        });
      }
    },
  });
}

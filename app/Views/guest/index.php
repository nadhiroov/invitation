<?= $this->extend('layouts/template'); ?>

<?= $this->section('css'); ?>
<link rel="stylesheet" href="<?= base_url(); ?>cms/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css" />
<?= $this->endSection(); ?>


<?= $this->section('content'); ?>
<div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
    <div class="card-body px-4 py-3">
        <div class="row align-items-center">
            <div class="col-9">
                <h4 class="fw-semibold mb-8">Pengaturan Tamu Undangan</h4>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a class="text-muted text-decoration-none" href="dashboard">Home</a>
                        </li>
                        <li class="breadcrumb-item" aria-current="page">Tamu Undangan</li>
                    </ol>
                </nav>
            </div>
            <div class="col-3">
                <div class="text-center mb-n5">
                    <img src="<?= base_url(); ?>cms/images/breadcrumb/ChatBc.png" alt="modernize-img" class="img-fluid mb-n4" />
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card w-100 position-relative overflow-hidden">
    <div class="d-flex align-items-center justify-content-between mb-4 pb-8 px-4 py-3 border-bottom">
        <h4 class="card-title mb-0">Basic Table</h4>
        <div class="d-flex align-items-center gap-2">
            <button class="btn btn-primary btnAddNew" data-bs-toggle="modal" data-bs-target="#modal">Tambah baru</button>
        </div>
    </div>
    <div class="card-body p-4">
        <div class="alert alert-primary text-primary" role="alert">
            Maksimal <strong><?= session()->max_user; ?> tamu </strong>
        </div>
        <div class="table-responsive">
            <table id="mytable" class="table table-striped table-bordered text-nowrap align-middle order-column">
                <thead class="text-dark fs-4">
                    <tr>
                        <th>
                            <h6 class="fs-4 fw-semibold mb-0">Kepada</h6>
                        </th>
                        <th>
                            <h6 class="fs-4 fw-semibold mb-0">Nama Lengkap</h6>
                        </th>
                        <th>
                            <h6 class="fs-4 fw-semibold mb-0">Acara</h6>
                        </th>
                        <th>
                            <h6 class="fs-4 fw-semibold mb-0">Hadiah</h6>
                        </th>
                        <th>
                            <h6 class="fs-4 fw-semibold mb-0">Aksi</h6>
                        </th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- sample modal content -->
<div id="modal" class="modal fade" tabindex="-1" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <form action="guest/save" method="post" class="form-submit">
                <div class="modal-header d-flex align-items-center">
                    <h4 class="modal-title" id="myModalLabel">
                        Medium Modal
                    </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body content-data">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bg-danger-subtle text-danger waves-effect" data-bs-dismiss="modal">
                        Batal
                    </button>
                    <button type="submit" class="btn bg-primary-subtle text-primary waves-effect text-start" data-bs-dismiss="modal" id="btnSave">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<?= $this->endSection(); ?>

<?= $this->section('js'); ?>
<script src="<?= base_url(); ?>cms/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $("#mytable").DataTable({
            pageLength: 10,
            ajax: {
                "url": "guest/getData",
                "type": "GET",
            },
            order: [
                [1, "asc"]
            ],
            columnDefs: [{
                targets: 4,
                orderable: false
            }],
            // dom: '<"top"<"clear">>rt<"bottom"lp<"clear">>',
            columns: [{
                    data: 'to'
                },
                {
                    data: 'name',
                },
                {
                    data: 'event',
                    render: function(data) {
                        return data.split("#")
                    }
                },
                {
                    data: 'gift',
                    render: function(data) {
                        return data == 1 ? 'Ya' : 'Tidak'
                    }
                },
                {
                    data: 'id',
                    render: function(data) {
                        return `
                        <div class="button-group">
						<button type="button" class="btn mb-1 btn-secondary rounded-circle round-40 btn-sm d-inline-flex align-items-center justify-content-center"  data-bs-toggle="tooltip" title="salin tautan"><i class="fs-5 ti ti-copy"></i></button>

						<button type="button" class="btn mb-1 btn-warning rounded-circle round-40 btn-sm d-inline-flex align-items-center justify-content-center btnEdit" id="pateok" data-id="${data}" data-bs-toggle="modal" data-bs-target="#modal" data-bs-toggle="tooltip" title="edit"><i class="fs-5 ti ti-edit"></i></button>

						<button type="button" class="btn mb-1 btn-danger rounded-circle round-40 btn-sm d-inline-flex align-items-center justify-content-center" onclick="confirmDeleteV2(this)" data-id="${data}" data-target="guest/delete" data-bs-toggle="tooltip" title="hapus"><i class="fs-5 ti ti-trash"></i></button>
					</div>
                        `
                    }
                }
            ]
        });
    })
    // add new click
    $('.btnAddNew').click(function() {
        $('#myModalLabel').text('Tambah data baru');
        $.ajax({
            type: 'get',
            url: 'guest/add',
            success: function(response) {
                $('.content-data').html(response)
            }
        });
    });

    // edit click
    $('#modal').on('show.bs.modal', function(e) {
        let id = $(e.relatedTarget).data('id')
        if (typeof id != 'undefined') {
            $('#myModalLabel').text('Edit data')
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type: 'get',
                url: 'editGuest/' + id,
                success: function(response) {
                    $('.content-data').html(response)
                }
            })
        }
    })

    // on submit modal
    $('.form-submit').submit(function(e) {
        e.preventDefault()
        saveDataV2(this)
    });
</script>
<?= $this->endSection(); ?>
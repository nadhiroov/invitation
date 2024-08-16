<?= $this->extend('layouts/template'); ?>

<?= $this->section('css'); ?>
<link rel="stylesheet" href="<?= base_url(); ?>cms/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css" />
<?= $this->endSection(); ?>


<?= $this->section('content'); ?>
<div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
    <div class="card-body px-4 py-3">
        <div class="row align-items-center">
            <div class="col-9">
                <h4 class="fw-semibold mb-8">Respon Tamu Undangan</h4>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a class="text-muted text-decoration-none" href="dashboard">Home</a>
                        </li>
                        <li class="breadcrumb-item" aria-current="page">Ucapan</li>
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
    </div>
    <div class="card-body p-4">
        <input type="hidden" name="" id="foo" value="">
        <div class="table-responsive">
            <table id="mytable" class="table table-striped table-bordered text-nowrap align-middle order-column">
                <thead class="text-dark fs-4">
                    <tr>
                        <th>
                            <h6 class="fs-4 fw-semibold mb-0">Nama</h6>
                        </th>
                        <th>
                            <h6 class="fs-4 fw-semibold mb-0">Pesan</h6>
                        </th>
                        <th>
                            <h6 class="fs-4 fw-semibold mb-0">Balasan saya</h6>
                        </th>
                        <th>
                            <h6 class="fs-4 fw-semibold mb-0">Tanggal</h6>
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
    <div class="modal-dialog modal-dialog-scrollable modal-md">
        <div class="modal-content">
            <form action="ucapan/reply" method="post" class="form-submit">
                <div class="modal-header d-flex align-items-center">
                    <h4 class="modal-title" id="myModalLabel">
                        Detail balasan
                    </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body content-data">
                    <div class="col-12">
                        <label class="form-label mt-3">Balasan saya</label>
                        <div class="form-group">
                            <input type="text" id="input-response" class="form-control" placeholder="Masukkan balasan" name="form[balasan]">
                            <input type="hidden" id="input-idRecord" name="form[idRecord]">
                        </div>
                    </div>
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
                "url": "ucapan/getData",
                "type": "GET",
            },
            order: [
                [3, "desc"]
            ],
            columnDefs: [{
                targets: 4,
                orderable: false
            }],
            columns: [{
                    data: 'name'
                },
                {
                    data: 'komen',
                },
                {
                    data: 'resp',
                },
                {
                    data: 'date',
                    render: function(data) {
                        // Assuming 'data' is in ISO format or any other date format that can be parsed by new Date()
                        var date = new Date(data);
                        var options = {
                            day: '2-digit',
                            month: 'long',
                            year: 'numeric',
                            hour: '2-digit',
                            minute: '2-digit'
                        };
                        return date.toLocaleDateString('id-ID', options).replace(',', '');
                    }
                },
                {
                    data: 'idRecord',
                    render: function(data) {
                        return `
						<button type="button" class="btn mb-1 btn-warning rounded-circle round-40 btn-sm d-inline-flex align-items-center justify-content-center btnEdit" data-id="${data}" data-bs-toggle="modal" data-bs-target="#modal" data-bs-toggle="tooltip" title="balas"><i class="fs-5 ti ti-edit"></i></button>
					</div>
                        `
                    }
                }
            ]
        })
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
    })

    // edit click
    $('#modal').on('show.bs.modal', function(e) {
        let id = $(e.relatedTarget).data('id')
        if (typeof id != 'undefined') {
            $.ajax({
                type: 'get',
                dataType: "json",
                url: 'ucapan/reply/' + id,
                success: function(response) {
                    $('#input-response').val(response.resp)
                    $('#input-idRecord').val(response.idRecord)
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
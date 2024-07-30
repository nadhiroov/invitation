<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
    <div class="card-body px-4 py-3">
        <div class="row align-items-center">
            <div class="col-9">
                <h4 class="fw-semibold mb-8">Pengaturan Nama Depan</h4>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a class="text-muted text-decoration-none" href="dashboard">Home</a>
                        </li>
                        <li class="breadcrumb-item" aria-current="page">Nama depan</li>
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
        <!-- <div class="alert alert-primary text-primary" role="alert">
            <strong>Primary - </strong> Maksimal 30 tamu
        </div> -->
        <div class="table-responsive mb-4 border rounded-1">
            <table class="table text-nowrap mb-0 align-middle">
                <thead class="text-dark fs-4">
                    <tr>
                        <th>
                            <h6 class="fs-4 fw-semibold mb-0">Nama depan</h6>
                        </th>
                        <th>
                            <h6 class="fs-4 fw-semibold mb-0">Aksi</h6>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($content as $key) : ?>
                        <tr>
                            <td>
                                <p class="mb-0 fw-normal fs-4"><?= $key; ?></p>
                            </td>
                            <td>
                                <div class="d-flex align-items-center gap-2">
                                    <button type="button" class="btn mb-1 bg-warning-subtle rounded-circle round-40 btn-sm d-inline-flex align-items-center justify-content-center btnEdit" data-id="<?= $key; ?>" data-bs-toggle="modal" data-bs-target="#modal">
                                        <i class="fs-5 ti ti-edit"></i>
                                    </button>
                                    <button type="button" onclick="confirmDeleteV2(this, 'reload')" data-id="<?= $key; ?>" data-target="name/delete/php" class="btn mb-1 bg-danger-subtle rounded-circle round-40 btn-sm d-inline-flex align-items-center justify-content-center">
                                        <i class="fs-5 ti ti-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- sample modal content -->
<div id="modal" class="modal fade" tabindex="-1" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-sm">
        <div class="modal-content">
            <form action="name/save" method="post" class="form-submit">
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
<script>
    // add new click
    $('.btnAddNew').click(function() {
        $('#myModalLabel').text('Tambah data baru');
        $.ajax({
            type: 'get',
            url: 'name/add',
            success: function(response) {
                $('.content-data').html(response)
                var x = document.getElementById("namaDepan").autofocus
            }
        });
    });

    // edit click
    $('.btnEdit').click(function(e) {
        $('#myModalLabel').text('Edit data')
        let id = $(this).data('id')
        if (typeof id != 'undefined') {
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type: 'get',
                url: 'name/edit/' + id,
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
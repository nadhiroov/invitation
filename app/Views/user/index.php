<?= $this->extend('layouts/template'); ?>

<?= $this->section('css'); ?>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h4 class="fw-semibold mb-8">List of <?= $permission; ?></h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a class="text-muted text-decoration-none" href="/">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page"><?= $permission; ?></li>
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
    <div class="card">
        <div class="card-body">
            <div class="d-flex align-items-center justify-content-between mb-4 pb-8">
                <h4 class="card-title"><?= $permission; ?></h4>
                <div class="d-flex">
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addRowModal">Add new</button>
                </div>
            </div>
            <br>
            <input type="hidden" value="<?= $permission == 'Admin' ? 1 : 2; ?>" id="tipe">
            <div class="table-responsive">
                <table id="mytable" class="table table-striped table-bordered text-nowrap align-middle">
                    <thead>
                        <tr>
                            <th>Fullname</th>
                            <th>Username</th>
                            <th>Max user</th>
                            <th>Email</th>
                            <th style="width: 10%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="addRowModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header no-bd">
                <h5 class="modal-title">
                    <span class="fw-mediumbold">
                        New</span>
                    <span class="fw-light">
                        User
                    </span>
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="post" action="/user/process" class="form-add">
                <div class="modal-body">
                    <p class="small">Create a new row using this form, make sure you fill them all</p>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group form-group-default">
                                <label>Fullname</label>
                                <input name="form[fullname]" type="text" class="form-control" placeholder="fill fullname">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group form-group-default">
                                <label>Username</label>
                                <input name="form[username]" type="text" class="form-control" placeholder="fill username">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group form-group-default">
                                <label>Password</label>
                                <input name="form[password]" type="text" class="form-control" placeholder="fill a secure password">
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bg-danger-subtle text-danger waves-effect"
                        data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" class="btn bg-secondary-subtle text-secondary waves-effect" id="btnSave"
                        data-bs-dismiss="modal">
                        Save
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Edit -->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="guest/save" class="form-submit" role="form" method="POST">
                <div class="modal-header no-bd">
                    <h5 class="modal-title">
                        <span class="fw-mediumbold">
                            Edit</span>
                        <span class="fw-light">
                            Row
                        </span>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body hasil-data">
                </div>
                <div class="modal-footer no-bd">
                    <button type="submit" id="addRowButton" class="btn btn-primary">Save</button>
                    <button type="button" id="close_modal" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>

<?= $this->section('js'); ?>
<script src="<?= base_url(); ?>cms/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script>
    $(function() {
        let tipe = document.getElementById('tipe').value;
        $('#mytable').DataTable({
            pageLength: 10,
            ajax: {
                "url": "user/getData",
                "type": "POST",
                "data": {
                    rowid: tipe
                },
            },
            columnDefs: [{
                width: '15%',
                targets: 4
            }]
        });
    });

    $('#edit').on('show.bs.modal', function(e) {
        let rowid = $(e.relatedTarget).data('id');
        if (typeof rowid != 'undefined') {
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type: 'get',
                url: 'editUsers/' + rowid,
                success: function(data) {
                    $('.hasil-data').html(data); //menampilkan data ke dalam modal
                }
            });
        }
    })

    $('.form-add').submit(function(e) {
        e.preventDefault()
        saveDataV2(this)
    })
</script>
<?= $this->endSection(); ?>
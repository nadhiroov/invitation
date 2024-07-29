<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="content">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">User management</h4>
            <ul class="breadcrumbs">
                <li class="nav-home">
                    <a href="#">
                        <i class="flaticon-home"></i>
                    </a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Tables</a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Datatables</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <h4 class="card-title">List of invited guest <br> <span class="text-info"> max <?= $_SESSION['max_user']; ?> guests </span></h4>
                            <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
                                <i class="fa fa-plus"></i>
                                Add New
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- Modal -->
                        <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <form action="guest/save" class="form-submit" role="form" method="POST">
                                    <div class="modal-content hasil-data">
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table id="mytable" class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>To</th>
                                        <th>Fullname</th>
                                        <th>Event</th>
                                        <th>Gift</th>
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
        </div>
    </div>
</div>

<!-- Modal Edit -->
<div class="modal fade" id="edit" tabindex="-1" role="dialog">
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
                    <button type="submit" id="btnSave" class="btn btn-primary">Save</button>
                    <button type="button" id="close_modal" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>

<?= $this->section('js'); ?>
<script src="<?= base_url(); ?>/assets/js/addition.js"></script>
<script src="<?= base_url(); ?>/template/js/plugin/datatables/datatables.min.js"></script>
<script src="<?= base_url(); ?>/template/js/plugin/sweetalert/sweetalert.min.js"></script>
<script>
    $(document).ready(function() {});

    $('#mytable').DataTable({
        "pageLength": 10,
        "ajax": {
            "url": "guest/getData",
            "type": "GET",
        },
        "order": [
            [1, "asc"]
        ]
    })

    let clipboard = new ClipboardJS('.btn-clipboard')
    clipboard.on('success', function(e) {
        e.clearSelection()
        var button = $(e.trigger);
        var messageElement = button.siblings('.copy-message');
        messageElement.text('Copied!');
        setTimeout(function() {
            messageElement.text('');
        }, 1500);
    });

    $('#addRowModal').on('show.bs.modal', function(e) {
        $.ajax({
            type: 'get',
            url: 'guest/add',
            success: function(data) {
                $('.hasil-data').html(data);
            }
        })
    })

    $('.form-submit').submit(function(e) {
        e.preventDefault();
        updateData(this, function(res) {
            $(".form-submit #close_modal").click();
            $('.form-submit').find('input:text, textarea').val('');
        })
    })

    $('#edit').on('show.bs.modal', function(e) {
        let rowid = $(e.relatedTarget).data('id')
        if (typeof rowid != 'undefined') {
            $.ajax({
                type: 'get',
                url: 'editGuest/' + rowid,
                success: function(response) {
                    $('.hasil-data').html(response); //menampilkan data ke dalam modal
                }
            })
        }
    })
</script>
<?= $this->endSection(); ?>
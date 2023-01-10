<?= $this->extend('layout/template'); ?>

<?= $this->section('css'); ?>
<link href="https://unpkg.com/cropperjs/dist/cropper.css" rel="stylesheet" />
<script src="https://unpkg.com/cropperjs"></script>
<style>
    .image_area {
        position: relative;
    }

    img {
        display: block;
        max-width: 100%;
    }

    .preview {
        overflow: hidden;
        width: 160px;
        height: 160px;
        margin: 10px;
        border: 1px solid red;
    }

    .modal-lg {
        max-width: 1000px !important;
    }

    .overlay {
        position: absolute;
        bottom: 10px;
        left: 0;
        right: 0;
        background-color: rgba(255, 255, 255, 0.5);
        overflow: hidden;
        height: 0;
        transition: .5s ease;
        width: 100%;
    }

    .image_area:hover .overlay {
        height: 50%;
        cursor: pointer;
    }

    .text {
        color: #333;
        font-size: 20px;
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        text-align: center;
    }
</style>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>

<div class="content">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Data mempelai</h4>
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
                    <a href="#">Website</a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Data mempelai</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card full-height">
                    <div class="card-header">
                        <div class="card-title">Mempelai Pria</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card card-post card-round">
                                    <img class="card-img" src="<?= @$content['foto_pria']; ?>" onerror="this.onerror=null;this.src='<?= base_url() . '/assets/img/mpria.jpg' ?>'" alt="Card image cap">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="upload_image" class="btn btn-primary">
                                    <span class="btn-label text-light">
                                        <i class="icon-cloud-upload"></i>
                                    </span>
                                    <span class="text-light">Upload foto</span>
                                    <input type="file" class="form-control-file" id="upload_image" style="display:none">
                                </label>
                            </div>
                        </div>
                        <hr>
                        <form action="mempelai/save" class="form-submit" method="POST">
                            <input type="hidden" name="form[jenis]" value="pria">
                            <input type="hidden" name="form[id]" value="<?= @$content['id']; ?>">
                            <p class="lead"> Nama Lengkap </p>
                            <input type="text" class="form-control" name="form[nama_lengkap]" placeholder="nama lengkap" value="<?= @$content['nama_pria']; ?>">

                            <p class="lead"> Nama Panggilan </p>
                            <input type="text" class="form-control" name="form[nama_panggilan]" placeholder="nama panggilan" value="<?= @$content['nama_panggilan_pria']; ?>">

                            <p class="lead"> Nama Ayah </p>
                            <input type="text" class="form-control" name="form[nama_ayah]" placeholder="nama ayah" value="<?= @$content['nama_ayah_pria']; ?>">

                            <p class="lead"> Nama Ibu </p>
                            <input type="text" class="form-control" name="form[nama_ibu]" placeholder="nama ibu" value="<?= @$content['nama_ibu_pria']; ?>">

                            <br><br>
                            <button class="btn btn-primary" type="submit">
                                <span class="btn-label">
                                    <i class="icon-action-redo"></i>
                                </span>
                                Simpan
                            </button>
                        </form>

                    </div>
                </div>
            </div>
            <!-- Mempelai Wanita -->
            <div class="col-md-6">
                <div class="card full-height">
                    <div class="card-header">
                        <div class="card-title">Mempelai Wanita</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card card-post card-round">
                                    <img class="card-img" src="<?= @$content['foto_wanita'] ?>" onerror="this.onerror=null;this.src='<?= base_url() . '/assets/img/mwanita.jpg' ?>'" alt="Card image cap">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="upload_image_wanita" class="btn btn-primary">
                                    <span class="btn-label text-light">
                                        <i class="icon-cloud-upload"></i>
                                    </span>
                                    <span class="text-light">Upload foto</span>
                                    <input type="file" class="form-control-file" id="upload_image_wanita" style="display:none">
                                </label>
                            </div>
                        </div>
                        <hr>
                        <form action="mempelai/save" class="form-submit" method="POST">
                            <input type="hidden" name="form[jenis]" value="wanita">
                            <input type="hidden" name="form[id]" value="<?= @$content['id']; ?>">
                            <p class="lead"> Nama Lengkap </p>
                            <input type="text" class="form-control" name="form[nama_lengkap]" placeholder="nama lengkap" value="<?= @$content['nama_wanita']; ?>">

                            <p class="lead"> Nama Panggilan </p>
                            <input type="text" class="form-control" name="form[nama_panggilan]" placeholder="nama panggilan" value="<?= @$content['nama_panggilan_wanita']; ?>">

                            <p class="lead"> Nama Ayah </p>
                            <input type="text" class="form-control" name="form[nama_ayah]" placeholder="nama ayah" value="<?= @$content['nama_ayah_wanita']; ?>">

                            <p class="lead"> Nama Ibu </p>
                            <input type="text" class="form-control" name="form[nama_ibu]" placeholder="nama ibu" value="<?= @$content['nama_ibu_wanita']; ?>">

                            <br><br>
                            <button class="btn btn-primary" type="submit">
                                <span class="btn-label">
                                    <i class="icon-action-redo"></i>
                                </span>
                                Simpan
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card full-height">
                    <div class="card-header">
                        <div class="card-title">Foto Sampul</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card card-post card-round">
                                    <img class="card-img" src="<?= @$content['foto_sampul']; ?>" onerror="this.onerror=null;this.src='<?= base_url() . '/assets/img/couple.jpg' ?>'" alt="Card image cap">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="upload_image_sampul" class="btn btn-primary">
                                    <span class="btn-label text-light">
                                        <i class="icon-cloud-upload"></i>
                                    </span>
                                    <span class="text-light">Upload foto</span>
                                    <input type="file" class="form-control-file" id="upload_image_sampul" style="display:none">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Croping image -->
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <form method="post" class="imageSubmit" action="mempelai/upload">
            <input type="hidden" name="jenis" id="jenis">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Sesuaikan gambar sebelum di upload</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="img-container">
                        <div class="row">
                            <div class="col-md-8">
                                <img src="" id="sample_image" />
                            </div>
                            <div class="col-md-4">
                                <div class="preview"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" id="crop" class="btn btn-primary">Crop</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection(); ?>

<?= $this->section('js'); ?>
<script>
    $(document).ready(function() {

        var $modal = $('#modal');

        var image = document.getElementById('sample_image');

        var cropper;

        $('#upload_image').change(function(event) {
            $('#jenis').val('pria');
            var files = event.target.files;
            var done = function(url) {
                image.src = url;
                $modal.modal('show');
            };

            if (files && files.length > 0) {
                reader = new FileReader();
                reader.onload = function(event) {
                    done(reader.result);
                };
                reader.readAsDataURL(files[0]);
            }
        });

        $('#upload_image_wanita').change(function(event) {
            $('#jenis').val('wanita');
            var files = event.target.files;
            var done = function(url) {
                image.src = url;
                $modal.modal('show');
            };

            if (files && files.length > 0) {
                reader = new FileReader();
                reader.onload = function(event) {
                    done(reader.result);
                };
                reader.readAsDataURL(files[0]);
            }
        });
        $('#upload_image_sampul').change(function(event) {
            $('#jenis').val('sampul');
            var files = event.target.files;
            var done = function(url) {
                image.src = url;
                $modal.modal('show');
            };

            if (files && files.length > 0) {
                reader = new FileReader();
                reader.onload = function(event) {
                    done(reader.result);
                };
                reader.readAsDataURL(files[0]);
            }
        });

        $modal.on('shown.bs.modal', function() {
            var jns = $('#jenis').val();
            if (jns === 'sampul') {
                cropper = new Cropper(image, {
                    aspectRatio: 2/1,
                    viewMode: 1,
                    preview: '.preview'
                });
            } else {
                cropper = new Cropper(image, {
                    aspectRatio: 1,
                    viewMode: 1,
                    preview: '.preview'
                });
            }

        }).on('hidden.bs.modal', function() {
            cropper.destroy();
            cropper = null;
        });

        $('.imageSubmit').submit(function(e) {
            e.preventDefault();
            var jns = $('#jenis').val();
            if (jns === 'sampul') {
                canvas = cropper.getCroppedCanvas({
                    width: 600,
                    height: 400
                });
            } else {
                canvas = cropper.getCroppedCanvas({
                    width: 400,
                    height: 400
                });
            }

            canvas.toBlob(function(blob) {
                url = URL.createObjectURL(blob);
                var reader = new FileReader();
                reader.readAsDataURL(blob);
                var id = <?= @$content['id']; ?>;
                reader.onloadend = function() {
                    var base64data = reader.result;
                    $modal.modal('hide');
                    uploadimage(base64data, jns, id);
                };
            });
        });
    });

    $('.form-submit').submit(function(e) {
        e.preventDefault();
        saveData(this);
    });
</script>
<?= $this->endSection(); ?>
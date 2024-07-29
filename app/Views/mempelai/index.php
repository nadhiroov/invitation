<?= $this->extend('layouts/template'); ?>

<?= $this->section('css'); ?>
<link href="https://unpkg.com/cropperjs/dist/cropper.css" rel="stylesheet" />
<style>
    .image_area {
        position: relative;
    }

    #sample_image {
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
<div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
    <div class="card-body px-4 py-3">
        <div class="row align-items-center">
            <div class="col-9">
                <h4 class="fw-semibold mb-8">Pengaturan Data Mempelai</h4>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a class="text-muted text-decoration-none" href="dashboard">Home</a>
                        </li>
                        <li class="breadcrumb-item" aria-current="page">Mempelai</li>
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
<!-- mempelai pria -->
<div class="row">
    <div class="card-body">
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-account" role="tabpanel" aria-labelledby="pills-account-tab">
                <div class="row">
                    <div class="col-lg-6 d-flex align-items-stretch">
                        <div class="card w-100 border position-relative overflow-hidden">
                            <div class="card-body p-4">
                                <h4 class="card-title">Mempelai Pria</h4>
                                <div class="text-center">
                                    <img src="<?= base_url('image/serveImage/') . @$content['foto_pria'] ?>" onerror="this.onerror=null;this.src='<?= base_url(); ?>cms/images/profile/user-1.jpg'" alt="modernize-img" class="img-fluid rounded-circle" width="240" height="240">
                                    <div class="d-flex align-items-center justify-content-center my-4 gap-6">
                                        <button class="btn btn-primary" id="btnUploadPria">Upload</button>
                                        <input class="form-control" type="file" style="display:none" id="upload_image" accept="image/png, image/jpeg, image/jpg" />
                                    </div>
                                    <p class="mb-0">Allowed JPG, JPEG or PNG. Max size of 800K</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex align-items-stretch">
                        <div class="card w-100 border position-relative overflow-hidden">
                            <div class="card-body p-4">
                                <h4 class="card-title">Identitas Mempelai Pria</h4>
                                <form action="mempelai/save" method="post" class="form-pria">
                                    <input type="hidden" name="form[jenis]" value="pria">
                                    <input type="hidden" name="form[id]" value="<?= @$content['id']; ?>">
                                    <div class="col-12">
                                        <label class="form-label mt-3">Nama Lengkap</label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Masukkan nama lengkap" name="form[nama_lengkap]" value="<?= $content['nama_pria'] ?? ''; ?>">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label mt-3">Nama Panggilan</label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Masukkan nama panggilan" name="form[nama_panggilan]" value="<?= $content['nama_panggilan_pria'] ?? ''; ?>">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label mt-3">Nama Ayah</label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Masukkan nama ayah" name="form[nama_ayah]" value="<?= $content['nama_ayah_pria'] ?? ''; ?>">
                                        </div>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label class="form-label mt-3">Nama Ibu</label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Masukkan nama ayah" name="form[nama_ibu]" value="<?= $content['nama_ibu_pria'] ?? ''; ?>">
                                        </div>
                                    </div>
                                    <div class="d-md-flex align-items-center">
                                        <div class="mt-3 mt-md-0 ms-auto">
                                            <button type="submit" class="justify-content-center w-100 btn mb-1 btn-rounded btn-primary d-flex align-items-center" id="btnSave">
                                                Simpan
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- mempelai wanita -->
<div class="row">
    <div class="card-body">
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-account" role="tabpanel" aria-labelledby="pills-account-tab">
                <div class="row">
                    <div class="col-lg-6 d-flex align-items-stretch">
                        <div class="card w-100 border position-relative overflow-hidden">
                            <div class="card-body p-4">
                                <h4 class="card-title">Mempelai Wanita</h4>
                                <div class="text-center">
                                    <img src="<?= base_url('image/serveImage/') . @$content['foto_wanita'] ?>" onerror="this.onerror=null;this.src='<?= base_url(); ?>cms/images/profile/user-2.jpg'" alt="modernize-img" class="img-fluid rounded-circle" width="240" height="240">
                                    <div class="d-flex align-items-center justify-content-center my-4 gap-6">
                                        <button class="btn btn-primary" id="btnUploadWanita">Upload</button>
                                        <input class="form-control" type="file" style="display:none" id="upload_image_wanita" accept="image/png, image/jpeg, image/jpg" />
                                    </div>
                                    <p class="mb-0">Allowed JPG, JPEG or PNG. Max size of 800K</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex align-items-stretch">
                        <div class="card w-100 border position-relative overflow-hidden">
                            <div class="card-body p-4">
                                <h4 class="card-title">Identitas Mempelai Wanita</h4>
                                <form action="mempelai/save" method="post" class="form-wanita">
                                    <input type="hidden" name="form[jenis]" value="wanita">
                                    <input type="hidden" name="form[id]" value="<?= @$content['id']; ?>">
                                    <div class="col-12">
                                        <label class="form-label mt-3">Nama Lengkap</label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Masukkan nama lengkap" name="form[nama_lengkap]" value="<?= $content['nama_wanita'] ?? ''; ?>">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label mt-3">Nama Panggilan</label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Masukkan nama panggilan" name="form[nama_panggilan]" value="<?= $content['nama_panggilan_wanita'] ?? ''; ?>">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label mt-3">Nama Ayah</label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Masukkan nama ayah" name="form[nama_ayah]" value="<?= $content['nama_ayah_wanita'] ?? ''; ?>">
                                        </div>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label class="form-label mt-3">Nama Ibu</label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Masukkan nama ayah" name="form[nama_ibu]" value="<?= $content['nama_ibu_wanita'] ?? ''; ?>">
                                        </div>
                                    </div>
                                    <div class="d-md-flex align-items-center">
                                        <div class="mt-3 mt-md-0 ms-auto">
                                            <button type="submit" class="justify-content-center w-100 btn mb-1 btn-rounded btn-primary d-flex align-items-center" id="btnSaveFemale">
                                                Simpan
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- foto sampul -->
<div class="row">
    <div class="card-body">
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-account" role="tabpanel" aria-labelledby="pills-account-tab">
                <div class="row">
                    <div class="col-lg-6 d-flex align-items-stretch">
                        <div class="card w-100 border position-relative overflow-hidden">
                            <div class="card-body p-4">
                                <h4 class="card-title">Foto Sampul</h4>
                                <div class="text-center">
                                    <div class="card overflow-hidden mt-9">
                                        <img class="rounded" src="<?= base_url('image/serveImage/') . @$content['foto_sampul'] ?>" onerror="this.onerror=null;this.src='<?= base_url(); ?>cms/images/backgrounds/profilebg.jpg'" alt="bg-card" height="220">
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center my-4 gap-6">
                                        <button class="btn btn-primary" id="btnUploadSampul">Upload</button>
                                        <input class="form-control" type="file" style="display:none" id="upload_image_sampul" accept="image/png, image/jpeg, image/jpg" />
                                    </div>
                                    <p class="mb-0">Allowed JPG, JPEG or PNG. Max size of 800K</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-xlg" tabindex="-1" aria-labelledby="bs-example-modal-lg" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <form method="post" class="imageSubmit" action="mempelai/upload">
            <input type="hidden" name="jenis" id="jenis">
            <div class="modal-content">
                <div class="modal-header d-flex align-items-center">
                    <h4 class="modal-title" id="myLargeModalLabel">
                        Extra Large modal
                    </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="img-container">
                        <div class="row">
                            <div class="col-md-8">
                                <img alt="mempelai pria" src="" id="sample_image" />
                            </div>
                            <div class="col-md-4">
                                <div class="preview"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bg-danger-subtle text-danger  waves-effect text-start" data-bs-dismiss="modal">
                        Batal
                    </button>
                    <button type="submit" class="btn bg-primary-subtle text-primary  waves-effect text-start" data-bs-dismiss="modal">
                        Potong
                    </button>
                </div>
            </div>
        </form>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<?= $this->endSection(); ?>

<?= $this->section('js'); ?>
<script src="https://unpkg.com/cropperjs"></script>
<script>
    $('#btnUploadPria').click(function() {
        $('#upload_image').trigger('click');
    });
    $('#btnUploadWanita').click(function() {
        $('#upload_image_wanita').trigger('click');
    });
    $('#btnUploadSampul').click(function() {
        $('#upload_image_sampul').trigger('click');
    });
    $(document).ready(function() {
        let modal = $('#modal-xlg');
        let image = document.getElementById('sample_image');
        let cropper;
        let btn;

        $('#upload_image').change(function(event) {
            btn = 'btnUploadPria';
            $('#jenis').val('pria')
            let files = event.target.files;
            let done = function(url) {
                image.src = url;
                modal.modal('show');
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
            btn = 'btnUploadWanita';
            $('#jenis').val('wanita');
            let files = event.target.files;
            let done = function(url) {
                image.src = url;
                modal.modal('show');
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
            btn = 'btnUploadSampul';
            $('#jenis').val('sampul');
            let files = event.target.files;
            let done = function(url) {
                image.src = url;
                image.style.display = 'block';
                modal.modal('show');
            };

            if (files && files.length > 0) {
                const file = files[0];
                reader = new FileReader();
                reader.onload = function(event) {
                    done(reader.result);
                };
                reader.readAsDataURL(file);
            }
        });

        modal.on('shown.bs.modal', function() {
            let jns = $('#jenis').val();
            if (jns === 'sampul') {
                cropper = new Cropper(image, {
                    aspectRatio: 2 / 1,
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
            let jns = $('#jenis').val();
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

            canvas.toBlob((blob) => {
                const formData = new FormData();
                const file = new File([blob], 'croppedImage.jpg', {
                    type: 'image/jpeg'
                });
                formData.append('image', file);
                formData.append('jenis', jns);
                formData.append('aidi', '<?= @$content['id'] ?>');
                uploadImageV2(formData, 'mempelai/upload', btn)
            }, 'image/jpeg');
        })
    })

    $('.form-pria').submit(function(e) {
        e.preventDefault();
        saveDataV2(this)
    });

    $('.form-wanita').submit(function(e) {
        e.preventDefault();
        saveDataV2(this, 'btnSaveFemale')
    });
</script>
<?= $this->endSection(); ?>
<?= $this->extend('layout/template'); ?>

<?= $this->section('css'); ?>
<link rel="stylesheet" href="<?= base_url(); ?>/public/template/css/bootstrap4-toggle.css">
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<div class="content">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Pengaturan</h4>
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
                    <a href="#">Pengaturan</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Fitur undangan</h4>
                    </div>
                    <div class="card-body">
                        <form action="pengaturan/save" class="form-submit" method="POST">
                            <div class="form-check pl-0">
                                <input type="checkbox" id="sampul" name="form[sampul]" value="1" <?= @$content['sampul'] == 1 ? 'checked' : ''; ?> data-toggle="toggle" data-size="xs" disabled>
                                <label for="sampul" class="form-check-label"> Halaman Sampul</label>
                            </div>
                            <div class="form-check pl-0">
                                <input type="checkbox" id="mempelai" name="form[mempelai]" value="1" <?= @$content['mempelai'] == 1 ? 'checked' : ''; ?> data-toggle="toggle" data-size="xs" disabled>
                                <label for="mempelai" class="form-check-label"> Halaman mempelai</label>
                            </div>
                            <div class="form-check pl-0">
                                <input type="checkbox" id="acara" name="form[acara]" value="1" <?= @$content['acara'] == 1 ? 'checked' : ''; ?> data-toggle="toggle" data-size="xs" disabled>
                                <label for="acara" class="form-check-label"> Halaman acara</label>
                            </div>
                            <div class="form-check pl-0">
                                <input type="checkbox" id="ucapan" name="form[ucapan]" value="1" <?= @$content['ucapan'] == 1 ? 'checked' : ''; ?> data-toggle="toggle" data-size="xs">
                                <label for="ucapan" class="form-check-label"> Halaman ucapan</label>
                            </div>
                            <div class="form-check pl-0">
                                <input type="checkbox" id="galeri" name="form[galeri]" value="1" <?= @$content['galeri'] == 1 ? 'checked' : ''; ?> data-toggle="toggle" data-size="xs">
                                <label for="galeri" class="form-check-label"> Halaman galeri</label>
                            </div>
                            <div class="form-check pl-0">
                                <input type="checkbox" id="cerita" name="form[cerita]" value="1" <?= @$content['cerita'] == 1 ? 'checked' : ''; ?> data-toggle="toggle" data-size="xs">
                                <label for="cerita" class="form-check-label"> Halaman cerita</label>
                            </div>
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
        </div>
    </div>
</div>
<?= $this->endSection(); ?>


<?= $this->section('js'); ?>
<script src="<?= base_url(); ?>/public/template/js/bootstrap4-toggle.js"></script>
<script>
    $(document).ready(function() {
        $('.form-submit').submit(function(e) {
            e.preventDefault();
            saveData(this);
        });
    });
</script>
<?= $this->endSection(); ?>
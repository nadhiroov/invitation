<?= $this->extend('layout/template'); ?>

<?= $this->section('css'); ?>
<link rel="stylesheet" type="css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css.map">
<link rel="stylesheet" type="css" href="https://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
<!-- <link rel="stylesheet" type="css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css.map"> -->
<link rel="stylesheet" type="css" href="<?= base_url() ?>/public/template/css/datetimepicker.css">
<style>
    body {
        background-color: beige;
        direction: ltr;
    }
</style>
<style>
    .datepicker td,
    .datepicker th {
        width: 2rem;
        height: 2rem;
        font-size: 0.85rem;
    }

    .datepicker {
        margin-bottom: 3rem;
    }

    body {
        min-height: 100vh;
        background-color: #fafafa;
    }

    .input-group {
        border-radius: 30rem;
    }

    input.form-control {
        border-radius: 30rem 0 0 30rem;
        border: none;
    }

    input.form-control:focus {
        box-shadow: none;
    }

    input.form-control::placeholder {
        font-style: italic;
    }

    .input-group-text {
        border-radius: 0 30rem 30rem 0;
        border: none;
    }

    .datepicker-dropdown {
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
    }
</style>
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
                        <h4 class="card-title">Data Akad Nikah</h4>
                    </div>
                    <div class="card-body">
                        <form action="acara/save" class="form-submit" method="POST">
                            <input type="hidden" name="form[jenis]" value="akad">
                            <input type="hidden" name="form[id]" value="<?= @$content['id']; ?>">
                            <div class="form-group">
                                <label for="reservationDate">Tanggal</label>
                                <div class="datepicker date input-group shadow-sm">
                                    <input type="text" name="form[tanggal]" placeholder="Pilih tanggal" class="form-control" value="<?= @$content['tanggal_akad']; ?>">
                                    <div class="input-group-append"><span class="input-group-text"><i class="fas fa-clock"></i></span></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Waktu</label>
                                <input type="text" class="form-control" name="form[jam]" placeholder="Masukkan waktu" value="<?= @$content['jam_akad']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Tempat/Lokasi</label>
                                <input type="text" name="form[tempat]" class="form-control" placeholder="Masukkan lokasi" value="<?= @$content['tempat_akad']; ?>">
                                <small id="emailHelp2" class="form-text text-muted">Contoh: Kediaman memepelai wanita</small>
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" name="form[alamat]" class="form-control" placeholder="Masukkan alamat lokasi" value="<?= @$content['alamat_akad']; ?>">
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

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Data Resepsi</h4>
                    </div>
                    <div class="card-body">
                        <form action="acara/save" class="form-submit" method="POST">
                            <input type="hidden" name="form[jenis]" value="resepsi">
                            <input type="hidden" name="form[id]" value="<?= @$content['id']; ?>">
                            <div class="form-group">
                                <label for="reservationDate">Tanggal</label>
                                <div class="datepicker date input-group shadow-sm">
                                    <input type="text" name="form[tanggal]" placeholder="Pilih tanggal" class="form-control" value="<?= @$content['tanggal_resepsi']; ?>">
                                    <div class="input-group-append"><span class="input-group-text"><i class="fas fa-clock"></i></span></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Waktu</label>
                                <input type="text" class="form-control" name="form[jam]" placeholder="Masukkan waktu" value="<?= @$content['jam_resepsi']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Tempat/Lokasi</label>
                                <input type="text" name="form[tempat]" class="form-control" placeholder="Masukkan lokasi" value="<?= @$content['tempat_resepsi']; ?>">
                                <small id="emailHelp2" class="form-text text-muted">Contoh: Kediaman memepelai wanita</small>
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" name="form[alamat]" class="form-control" placeholder="Masukkan alamat lokasi" value="<?= @$content['alamat_resepsi']; ?>">
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment-with-locales.min.js" integrity="sha512-LGXaggshOkD/at6PFNcp2V2unf9LzFq6LE+sChH7ceMTDP0g2kn6Vxwgg7wkPP7AAtX+lmPqPdxB47A0Nz0cMQ==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js" integrity="sha256-5YmaxAwMjIpMrVlK84Y/+NjCpKnFYa8bWWBbUHSBGfU=" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script src="<?= base_url() ?>/template/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="<?= base_url() ?>/template/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
<script>
    $('.datepicker').datepicker({
        format: "dd M, yyyy",
        autoclose: true
    });

    $(document).ready(function() {
        $('.form-submit').submit(function(e) {
            e.preventDefault();
            saveData(this);
        });
    });
</script>
<?= $this->endSection(); ?>
<?= $this->extend('layout/template'); ?>

<?= $this->section('css'); ?>
<link rel="stylesheet" type="css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css.map">
<link rel="stylesheet" type="css" href="https://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
<link rel="stylesheet" href="<?= base_url() ?>/assets/datetime/css/bootstrap-datetimepicker.min.css" type="text/css" media="all" />
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
                        <h4 class="card-title">Jadwal Akad Nikah</h4>
                    </div>
                    <div class="card-body">
                        <form action="acara/save" class="form-submit" method="POST">
                            <?= csrf_field() ?>
                            <input type="hidden" name="form[jenis]" value="akad">
                            <input type="hidden" name="form[id]" value="<?= @$content['id']; ?>">
                            <div class="form-group">
                                <label for="reservationDate">Tanggal</label>
                                <div class="datepicker date input-group shadow-sm">
                                    <input type="text" name="form[tanggal]" placeholder="Pilih tanggal" class="form-control" value="<?= @$content['tanggal_akad']; ?>">
                                    <div class="input-group-append"><span class="input-group-text"><i class="fas fa-calendar-alt"></i></span></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="id_end_time">Waktu</label>
                                <div class="input-group date timepicker">
                                    <input type="text" name="end_time" placeholder="pilih waktu" class="form-control" placeholder="End time" title="" required id="id_end_time" />
                                    <div class="input-group-addon input-group-append">
                                        <div class="input-group-text">
                                            <i class="fas fa-clock"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Tempat/Lokasi</label>
                                <input type="text" name="form[tempat]" class="form-control" placeholder="Masukkan lokasi" value="<?= @$content['tempat_akad']; ?>">
                                <small id="emailHelp2" class="form-text text-muted">Contoh: Kediaman memepelai wanita</small>
                            </div>
                            <div class="form-group">
                                <label>Koordinat logtitude dan latitude</label>
                                <input type="text" name="form[alamat]" class="form-control" placeholder="Masukkan alamat lokasi" value="<?= @$content['longlat_akad']; ?>">
                                <small id="emailHelp2" class="form-text text-muted">Contoh: 6473824432, -843927434</small>
                            </div>
                            <button class="btn btn-primary" type="submit" id="btnSave">
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
                        <h4 class="card-title">Jadwal Resepsi</h4>
                    </div>
                    <div class="card-body">
                        <form action="acara/save" class="form-submit" method="POST">
                            <?= csrf_field() ?>
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
                            <button class="btn btn-primary" type="submit" id="btnSave">
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

        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Jadwal Unduh Mantu</h4>
                    </div>
                    <div class="card-body">
                        <form action="acara/save" class="form-submit" method="POST">
                            <?= csrf_field() ?>
                            <input type="hidden" name="form[jenis]" value="akad">
                            <input type="hidden" name="form[id]" value="<?= @$content['id']; ?>">
                            <div class="form-group">
                                <label for="reservationDate">Tanggal</label>
                                <div class="datepicker date input-group shadow-sm">
                                    <input type="text" name="form[tanggal]" placeholder="Pilih tanggal" class="form-control" value="<?= @$content['tanggal_akad']; ?>">
                                    <div class="input-group-append"><span class="input-group-text"><i class="fas fa-calendar-alt"></i></span></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="id_end_time">Waktu</label>
                                <div class="input-group date timepicker">
                                    <input type="text" name="end_time" placeholder="pilih waktu" class="form-control" placeholder="End time" title="" required id="id_end_time" />
                                    <div class="input-group-addon input-group-append">
                                        <div class="input-group-text">
                                            <i class="fas fa-clock"></i>
                                        </div>
                                    </div>
                                </div>
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
                            <button class="btn btn-primary" type="submit" id="btnSave">
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
<script src="<?= base_url() ?>/template/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="<?= base_url() ?>/template/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
<script src="<?= base_url(); ?>/assets/datetime/js/bootstrap-datetimepicker.min.js"></script>
<script>
    $('.datepicker').datetimepicker({
        allowInputToggle: true,
        format: "DD MMMM YYYY",
        locale: 'id',
        keepOpen: false
    });

    $('.timepicker').datetimepicker({
        allowInputToggle: true,
        "format": "HH:mm",
    });

    $(document).ready(function() {
        $('.form-submit').submit(function(e) {
            e.preventDefault();
            saveData(this);
        });
    });
</script>
<?= $this->endSection(); ?>
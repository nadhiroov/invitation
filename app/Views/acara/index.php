<?= $this->extend('layouts/template'); ?>

<?= $this->section('css'); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-datetimepicker/2.7.1/css/bootstrap-material-datetimepicker.min.css">
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
    <div class="card-body px-4 py-3">
        <div class="row align-items-center">
            <div class="col-9">
                <h4 class="fw-semibold mb-8">Pengaturan Acara</h4>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a class="text-muted text-decoration-none" href="dashboard">Home</a>
                        </li>
                        <li class="breadcrumb-item" aria-current="page">Acara</li>
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
<div class="row">
    <div class="col-md-6 col-lg-6 d-flex align-items-stretch">
        <div class="card">
            <div class="border-bottom title-part-padding">
                <h4 class="card-title mb-0">Jadwal Akad Nikah</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <form action="acara/save" class="formAkad" method="post">
                        <?= csrf_field() ?>
                        <input type="hidden" name="form[jenis]" value="akad">
                        <input type="hidden" name="form[id]" value="<?= @$content['id']; ?>">
                        <div class="col-12">
                            <label class="form-label mt-3">Tanggal</label>
                            <input type="text" class="form-control" placeholder="Pilih tanggal" name="form[tanggal]" id="tanggalAkad" value="<?= isset($akad['tanggal']) ? date('d F Y', strtotime($akad['tanggal'])) : '' ?>" />
                        </div>
                        <div class="col-12">
                            <label class="form-label mt-3">Waktu</label>
                            <input class="form-control" placeholder="Pilih waktu" name="form[jam]" id="waktuAkad" value="<?= $akad['jam'] ?? ''; ?>" />
                        </div>
                        <div class="col-12">
                            <label class="form-label mt-3">Tempat/Lokasi</label>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Masukkan lokasi" name="form[tempat]" value="<?= $akad['tempat'] ?? ''; ?>">
                                <small id="name" class="form-text text-muted">Contoh: Kediaman memepelai wanita, gedung serbaguna</small>
                            </div>
                        </div>
                        <div class="col-12 mb-3">
                            <label class="form-label mt-3">Koordinat logtitude dan latitude</label>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Masukkan koordinat lokasi" name="form[alamat]" value="<?= $akad['alamat'] ?? ''; ?>">
                                <small id="name" class="form-text text-muted">Contoh: 6473824432, -843927434</small>
                                <small id="name" class="form-text text-muted">, pastikan benar karena untuk lokasi di Google map</small>
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

    <div class="col-md-6 col-lg-6 d-flex align-items-stretch">
        <div class="card">
            <div class="border-bottom title-part-padding">
                <h4 class="card-title mb-0">Jadwal Resepsi</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <form action="acara/save" class="formResepsi" method="post">
                        <?= csrf_field() ?>
                        <input type="hidden" name="form[jenis]" value="resepsi">
                        <input type="hidden" name="form[id]" value="<?= @$content['id']; ?>">
                        <div class="col-12">
                            <label class="form-label mt-3">Tanggal</label>
                            <input type="text" class="form-control" placeholder="Pilih tanggal" name="form[tanggal]" id="tanggalResepsi" value="<?= isset($resepsi['tanggal']) ? date('d F Y', strtotime($resepsi['tanggal'])) : '' ?>" />
                        </div>
                        <div class="col-12">
                            <label class="form-label mt-3">Waktu</label>
                            <input class="form-control" placeholder="Pilih waktu" name="form[jam]" id="waktuResepsi" value="<?= $resepsi['jam'] ?? ''; ?>" />
                        </div>
                        <div class="col-12">
                            <label class="form-label mt-3">Tempat/Lokasi</label>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Masukkan lokasi" name="form[tempat]" value="<?= $resepsi['tempat'] ?? ''; ?>">
                                <small id="name" class="form-text text-muted">Contoh: Kediaman memepelai wanita, gedung serbaguna</small>
                            </div>
                        </div>
                        <div class="col-12 mb-3">
                            <label class="form-label mt-3">Koordinat logtitude dan latitude</label>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Masukkan koordinat lokasi" name="form[alamat]" value="<?= $resepsi['alamat'] ?? ''; ?>">
                                <small id="name" class="form-text text-muted">Contoh: 6473824432, -843927434</small>
                                <small id="name" class="form-text text-muted">, pastikan benar karena untuk lokasi di Google map</small>
                            </div>
                        </div>
                        <div class="d-md-flex align-items-center">
                            <div class="mt-3 mt-md-0 ms-auto">
                                <button type="submit" class="justify-content-center w-100 btn mb-1 btn-rounded btn-primary d-flex align-items-center" id="btnSaveResepsi">
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

<div class="row">
    <div class="col-md-6 col-lg-6 d-flex align-items-stretch">
        <div class="card">
            <div class="border-bottom title-part-padding">
                <h4 class="card-title mb-0">Jadwal Unduh Mantu</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <form action="acara/save" class="formUnduh" method="post">
                        <?= csrf_field() ?>
                        <input type="hidden" name="form[jenis]" value="unduh">
                        <input type="hidden" name="form[id]" value="<?= @$content['id']; ?>">
                        <div class="col-12">
                            <label class="form-label mt-3">Tanggal</label>
                            <input type="text" class="form-control" placeholder="Pilih tanggal" name="form[tanggal]" id="tanggalUnduh" value="<?= isset($unduh['tanggal']) ? date('d F Y', strtotime($unduh['tanggal'])) : '' ?>" />
                        </div>
                        <div class="col-12">
                            <label class="form-label mt-3">Waktu</label>
                            <input class="form-control" placeholder="Pilih waktu" name="form[jam]" id="waktuUnduh" value="<?= $unduh['jam'] ?? ''; ?>" />
                        </div>
                        <div class="col-12">
                            <label class="form-label mt-3">Tempat/Lokasi</label>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Masukkan lokasi" name="form[tempat]" value="<?= $unduh['tempat'] ?? ''; ?>">
                                <small id="name" class="form-text text-muted">Contoh: Kediaman memepelai wanita, gedung serbaguna</small>
                            </div>
                        </div>
                        <div class="col-12 mb-3">
                            <label class="form-label mt-3">Koordinat logtitude dan latitude</label>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Masukkan koordinat lokasi" name="form[alamat]" value="<?= $unduh['alamat'] ?? ''; ?>">
                                <small id="name" class="form-text text-muted">Contoh: 6473824432, -843927434</small>
                                <small id="name" class="form-text text-muted">, pastikan benar karena untuk lokasi di Google map</small>
                            </div>
                        </div>
                        <div class="d-md-flex align-items-center">
                            <div class="mt-3 mt-md-0 ms-auto">
                                <button type="submit" class="justify-content-center w-100 btn mb-1 btn-rounded btn-primary d-flex align-items-center" id="btnSaveUnduh">
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
<?= $this->endSection(); ?>



<?= $this->section('js'); ?>
<script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
<script src="<?= base_url(); ?>cms/js/extra-libs/moment/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-datetimepicker/2.7.1/js/bootstrap-material-datetimepicker.min.js"></script>
<script>
    $(document).ready(function() {
        $("#tanggalAkad, #tanggalResepsi, #tanggalUnduh").bootstrapMaterialDatePicker({
            format: "DD MMMM YYYY",
            weekStart: 0,
            time: false,
            language: "id",
        });
        $("#waktuAkad, #waktuResepsi, #waktuUnduh").bootstrapMaterialDatePicker({
            format: "HH:mm",
            time: true,
            date: false,
        });
        $('.formAkad').submit(function(e) {
            e.preventDefault();
            saveDataV2(this)
        });
        $('.formResepsi').submit(function(e) {
            e.preventDefault();
            saveDataV2(this, 'btnSaveResepsi')
        });
        $('.formUnduh').submit(function(e) {
            e.preventDefault();
            saveDataV2(this, 'btnSaveUnduh')
        });
    });
</script>
<?= $this->endSection(); ?>
<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<div class="row">
    <div class="col-sm-6 col-xl-3">
        <div class="card bg-primary-subtle shadow-none">
            <div class="card-body p-4">
                <div class="d-flex align-items-center">
                    <div class="text-primary d-flex align-items-center justify-content-left">
                        <i class="ti ti-friends text-primary fs-10 me-1"></i>
                    </div>
                    <h6 class="mb-0 ms-3">Total Undangan</h6>
                </div>
                <div class="d-flex align-items-center justify-content-between mt-4">
                    <h3 class="mb-0 fw-semibold fs-7"><?= $totalGuest; ?></h3>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-xl-3">
        <div class="card bg-primary-subtle shadow-none">
            <div class="card-body p-4">
                <div class="d-flex align-items-center">
                    <div class="text-primary d-flex align-items-center justify-content-left">
                        <i class="ti ti-message text-primary fs-10 me-1"></i>
                    </div>
                    <h6 class="mb-0 ms-3">Total Ucapan</h6>
                </div>
                <div class="d-flex align-items-center justify-content-between mt-4">
                    <h3 class="mb-0 fw-semibold fs-7"><?= $totalComment ?? '-'; ?></h3>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-8 d-flex align-items-strech">
        <div class="card w-100">
            <div class="card-body p-4">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <h4 class="card-title fw-semibold">5 Ucapan Terakhir</h4>
                    </div>
                </div>
                <div class="card mt-4 mb-0 shadow-none">
                    <div class="table-responsive">
                        <table class="table mb-0 align-middle text-nowrap">
                            <thead>
                                <tr>
                                    <th class="ps-0">Nama</th>
                                    <th>Ucapan</th>
                                    <th>Respon Saya</th>
                                    <th>Tanggal</th>
                                </tr>
                            </thead>
                            <tbody class="text-dark ">
                                <?php if (empty($lastComment)) : ?>
                                    <tr>
                                        <td colspan="4">Tidak ada data</td>
                                    </tr>
                                <?php endif; ?>
                                <?php foreach ($lastComment as $key) : ?>
                                    <tr>
                                        <td><?= $key['name']; ?></td>
                                        <td><?= $key['komen']; ?></td>
                                        <td><?= $key['resp']; ?></td>
                                        <td><?= date('d m Y', strtotime($key['date'])); ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
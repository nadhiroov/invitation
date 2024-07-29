<?= csrf_field() ?>
<div class="modal-header no-bd">
    <h5 class="modal-title">
        <span class="fw-mediumbold">
            Tambah tamu</span>
    </h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <label for="inputFloatingLabel">Nama Lengkap</label>
                <input type="text" name="param[name]" class="form-control" id="inputFloatingLabel" placeholder="Masukkan nama lengkap" required>
            </div>
            <div class="form-check">
                <label>Kepada</label><br />
                <?php foreach ($to['data'] as $row) : ?>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="<?= $row; ?>" name="param[optionTo]" class="custom-control-input" value="<?= $row; ?>" required>
                        <label class="custom-control-label" for="<?= $row; ?>"><?= $row; ?></label>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="form-check">
                <label>Acara</label><br />
                <div class="form-check-label">
                    <?php foreach ($acara as $row) : ?>
                        <input type="checkbox" class="form-check-input" id="<?= $row[0]; ?>" name="param[acara][<?= $row[0]; ?>]" checked>
                        <label class="form-check-sign" for="<?= $row[0]; ?>"><?= $row[0]; ?></label>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="form-check">
                <label>Hadiah</label><br />
                <label class="form-radio-label">
                    <input class="form-radio-input" type="radio" name="param[hadiah]" value="0" required checked>
                    <span class="form-radio-sign">Tidak</span>
                </label>
                <label class="form-radio-label">
                    <input class="form-radio-input" type="radio" name="param[hadiah]" value="1" required>
                    <span class="form-radio-sign">Ya</span>
                </label>
            </div>
        </div>
    </div>
    <input type="hidden" name="id" value="<?= $id; ?>">
    <div class="modal-footer no-bd">
        <button type="submit" id="btnSave" class="btn btn-primary">Add</button>
        <button type="button" id="close_modal" class="btn btn-danger" data-dismiss="modal">Close</button>
    </div>
</div>
<div class="modal-header no-bd">
    <h5 class="modal-title">
        <span class="fw-mediumbold">
            New</span>
        <span class="fw-light">
            Guest
        </span>
    </h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <p class="small">Add a new invitation to attend your event</p>
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <div class="form-group form-floating-label">
                    <input id="inputFloatingLabel" name="param[name]" type="text" class="form-control input-border-bottom" required autofocus>
                    <label for="inputFloatingLabel" class="placeholder">Nama Lengkap</label>
                </div>
            </div>
            <div class="form-check">
                <label>Kepada</label><br />
                <?php foreach ($to['data'] as $row) : ?>
                    <label class="form-radio-label">
                        <input class="form-radio-input" type="radio" name="param[optionTo]" value="<?= $row[0]; ?>" checked="" required>
                        <span class="form-radio-sign"><?= $row[0]; ?></span>
                    </label>
                <?php endforeach; ?>
            </div>
            <div class="form-check">
                <label>Acara</label><br />
                <?php foreach ($acara as $row) : ?>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="<?= $row[0]; ?>" name="param[acara][<?= $row[0]; ?>]    " checked>
                        <label class="custom-control-label" for="<?= $row[0]; ?>"><?= $row[0]; ?></label>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="form-check">
                <label>Hadiah</label><br />
                <label class="form-radio-label">
                    <input class="form-radio-input" type="radio" name="param[hadiah]" value="0" required>
                    <span class="form-radio-sign">Tidak</span>
                </label>
                <label class="form-radio-label">
                    <input class="form-radio-input" type="radio" name="param[hadiah]" value="1" required checked>
                    <span class="form-radio-sign">Ya</span>
                </label>
            </div>
        </div>
    </div>
    <input type="hidden" name="id" value="<?= $id; ?>">
    <div class="modal-footer no-bd">
        <button type="submit" id="addRowButton" class="btn btn-primary">Add</button>
        <button type="button" id="close_modal" class="btn btn-danger" data-dismiss="modal">Close</button>
    </div>
</div>
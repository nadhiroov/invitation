<p class="small">Edit an invitation to attend your event</p>
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            <div class="form-group form-floating-label">
                <input id="inputFloatingLabel" name="param[name]" type="text" class="form-control input-border-bottom" required value="<?= $content['name']; ?>">
                <label for="inputFloatingLabel" class="placeholder">Nama Lengkap</label>
            </div>
        </div>
        <div class="form-check">
            <label>Kepada</label><br />
            <?php foreach ($to['data'] as $row) : ?>
                <label class="form-radio-label">
                    <input class="form-radio-input" type="radio" name="param[optionTo]" value="<?= $row[0]; ?>" <?= $content['to'] == $row['0'] ? 'checked' : ''; ?> required>
                    <span class="form-radio-sign"><?= $row[0]; ?></span>
                </label>
            <?php endforeach; ?>
        </div>
        <div class="form-check">
            <label>Acara</label><br />
            <?php foreach ($acara as $row) : ?>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="<?= $row[0]; ?>" name="param[acara][<?= $row[0]; ?>]" <?= in_array($row[0], $dt_to) ? 'checked' : ''; ?>>
                    <label class="custom-control-label" for="<?= $row[0]; ?>"><?= $row[0]; ?></label>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="form-check">
            <label>Hadiah</label><br />
            <label class="form-radio-label">
                <input class="form-radio-input" type="radio" name="param[hadiah]" value="0" required <?= $content['gift'] == '0' ? 'checked' : ''; ?>>
                <span class="form-radio-sign">Tidak</span>
            </label>
            <label class="form-radio-label">
                <input class="form-radio-input" type="radio" name="param[hadiah]" value="1" required <?= $content['gift'] == '1' ? 'checked' : ''; ?>>
                <span class="form-radio-sign">Ya</span>
            </label>
        </div>
    </div>
</div>
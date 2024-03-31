<?= csrf_field() ?>
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            <input name="param[id_guest]" type="hidden" value="<?= $id_guest; ?>">
            <label for="inputFloatingLabel">Nama Lengkap</label>
            <input type="text" name="param[name]" class="form-control" id="inputFloatingLabel" placeholder="Masukkan nama lengkap" required value="<?= $content['name']; ?>">
        </div>
        <div class="form-check">
            <label>Kepada</label><br />
            <?php foreach ($to['data'] as $row) : ?>
                <label class="form-radio-label">
                    <input class="form-radio-input " type="radio" name="param[optionTo]" value="<?= $row[0]; ?>" <?= $content['to'] == $row['0'] ? 'checked' : ''; ?> required>
                    <span class="form-radio-sign"><?= $row[0]; ?></span>
                </label>
                <!-- <div class="custom-control custom-radio">
                    <input class="custom-control-input" type="radio" name="param[optionTo]" value="<?= $row[0]; ?>" <?= $content['to'] == $row['0'] ? 'checked' : ''; ?> required id="<?= $row[0]; ?>">
                    <label class="custom-control-label" for="<?= $row[0]; ?>"><?= $row[0]; ?></label>
                </div> -->
            <?php endforeach; ?>
        </div>
        <div class="form-check">
            <label for="">Acara</label><br>
            <?php foreach ($acara as $row) : ?>
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" value="<?= $row[0]; ?>" name="param[acara][<?= $row[0]; ?>]" <?= in_array($row[0], $dt_to) ? 'checked' : ''; ?>>
                    <span class="form-check-sign"><?= $row[0]; ?></span>
                </label>
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
<div class="col-12">
    <label class="form-label mt-3">Nama Lengkap</label>
    <div class="form-group">
        <input type="text" class="form-control" placeholder="Masukkan nama lengkap" name="param[name]" value="<?= $content['name'] ?? ''; ?>">
    </div>
</div>
<div class="col-md-12">
    <label class="form-label mt-3">Kepada</label>
    <div class="form-group">
        <?php foreach ($to['data'] as $row) : ?>
            <div class="form-check form-check-inline">
                <input class="form-check-input primary check-light-primary" type="radio" name="param[optionTo]" id="<?= $row; ?>" value="<?= $row; ?>" <?= isset($content['to']) ? ($content['to'] == $row ? 'checked' : '') : '' ?> required>
                <label class="form-check-label" for="<?= $row; ?>"><?= $row; ?></label>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<div class="col-md-12">
    <label class="form-label mt-3">Acara</label>
    <div class="form-group">
        <?php foreach ($acara as $row) : ?>
            <div class="form-check form-check-inline">
                <input class="form-check-input primary check-light-primary" type="checkbox" id="<?= $row[0]; ?>" name="param[acara][<?= $row[0]; ?>]" value="<?= $row[0]; ?>"  <?= isset($content['event']) ? (strpos($content['event'], $row[0]) !== false ? 'checked' : '') : 'checked'; ?>>
                <label class="form-check-label" for="<?= $row[0]; ?>"><?= $row[0]; ?></label>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<div class="col-md-12">
    <label class="form-label mt-3">Hadiah</label>
    <div class="form-group">
        <div class="form-check form-check-inline">
            <input class="form-check-input primary check-light-primary" type="radio" name="param[hadiah]" id="hadiahYa" value="1" required <?= isset($content['gift']) ? ($content['gift'] == 1 ? 'checked' : '') : '' ?>>
            <label class="form-check-label" for="hadiahYa">Ya</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input primary check-light-primary" type="radio" name="param[hadiah]" id="hadiahTidak" value="0" required <?= isset($content['gift']) ? ($content['gift'] == 0 ? 'checked' : '') : 'checked' ?>>
            <label class="form-check-label" for="hadiahTidak">Tidak</label>
        </div>
    </div>
</div>

<?= isset($content['id']) ? '<input type="hidden" name="id" value="' . $content['id'] . '">' : ''; ?>
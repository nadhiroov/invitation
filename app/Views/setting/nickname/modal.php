<div class="col-md-12">
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="namaDepan" placeholder="Masukkan nama depan" name="name" value="<?= $content['data'] ?? ''; ?>">
        <label for="namaDepan">Nama depan</label>
    </div>
</div>

<?= isset($content['index']) ? '<input type="hidden" name="index" value="'.$content['index'].'">' : ''; ?>

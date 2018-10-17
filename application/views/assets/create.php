<form action="<?= base_url(); ?>index.php/asset/store" method="POST" role="form">
    <legend>Buat Asset</legend>

    <div class="form-group">
        <label for="nik">NIK</label>
        <input type="text" class="form-control <?php echo (form_error('nik') ? 'is-invalid' : '') ?>" id="nik" name="nik" placeholder="Isikan nik" value="<?= set_value('nik'); ?>">
        <small class="block text-danger"><?= form_error('nik'); ?></small>
    </div>

    <div class="form-group">
        <label for="employee_name">EMPLOYEE_NAME</label>
        <input type="text" class="form-control <?php echo (form_error('employee_name') ? 'is-invalid' : '') ?>" id="employee_name" name="employee_name" placeholder="Isikan employee_name" value="<?= set_value('employee_name'); ?>">
        <small class="block text-danger"><?= form_error('employee_name'); ?></small>
    </div>

    <div class="form-group">
        <label for="location">LOCATION</label>
        <input type="text" class="form-control <?php echo (form_error('location') ? 'is-invalid' : '') ?>" id="location" name="location" placeholder="Isikan location" value="<?= set_value('location'); ?>">
        <small class="block text-danger"><?= form_error('location'); ?></small>
    </div>

    <div class="form-group">
        <label for="device">DEVICE</label>
        <input type="text" class="form-control <?php echo (form_error('device') ? 'is-invalid' : '') ?>" id="device" name="device" placeholder="Isikan device" value="<?= set_value('device'); ?>">
        <small class="block text-danger"><?= form_error('device'); ?></small>
    </div>

    <div class="form-group">
        <label for="brand">BRAND</label>
        <input type="text" class="form-control <?php echo (form_error('brand') ? 'is-invalid' : '') ?>" id="brand" name="brand" placeholder="Isikan brand" value="<?= set_value('brand'); ?>">
        <small class="block text-danger"><?= form_error('brand'); ?></small>
    </div>

    <div class="form-group">
        <label for="type">TYPE</label>
        <input type="text" class="form-control <?php echo (form_error('type') ? 'is-invalid' : '') ?>" id="type" name="type" placeholder="Isikan type" value="<?= set_value('type'); ?>">
        <small class="block text-danger"><?= form_error('type'); ?></small>
    </div>

    <div class="form-group">
        <label for="no_asset">NO_ASSET</label>
        <input no_asset="text" class="form-control <?php echo (form_error('no_asset') ? 'is-invalid' : '') ?>" id="no_asset" name="no_asset" placeholder="Isikan no_asset" value="<?= set_value('no_asset'); ?>">
        <small class="block text-danger"><?= form_error('no_asset'); ?></small>
    </div>

    <button type="submit" class="btn btn-primary">Tambah</button>
    <button type="reset" class="btn btn-warning">Reset</button>

</form>
<form action="<?= base_url(); ?>index.php/asset/update/<?= $asset['nik'] ?>" method="POST" role="form">
    <legend>Edit assets</legend>


    <div class="form-group <?php echo (form_error('nik') ? 'has-error' : '') ?>">
        <label for="nik">NIK</label>
        <input type="text" class="form-control" id="nik" name="nik" placeholder="Isikan nik" value="<?= $asset['nik'] ?>" readonly>
        <small class="block text-danger"><?= form_error('nik'); ?></small>
    </div>

    <div class="form-group <?php echo (form_error('employee_name') ? 'has-error' : '') ?>">
        <label for="employee_name">EMPLOYEE_NAME</label>
        <input type="text" class="form-control" id="employee_name" name="employee_name" placeholder="Isikan employee_name" value="<?= $asset['employee_name'] ?>">
        <small class="block text-danger"><?= form_error('employee_name'); ?></small>
    </div>

    <div class="form-group <?php echo (form_error('location') ? 'has-error' : '') ?>">
        <label for="location">LOCATION</label>
        <input type="text" class="form-control" id="location" name="location" placeholder="Isikan location" value="<?= $asset['location'] ?>">
        <small class="block text-danger"><?= form_error('location'); ?></small>
    </div>

    <div class="form-group <?php echo (form_error('brand') ? 'has-error' : '') ?>">
        <label for="brand">BRAND</label>
        <input type="text" class="form-control" id="brand" name="brand" placeholder="Isikan brand" value="<?= $asset['brand'] ?>">
        <small class="block text-danger"><?= form_error('brand'); ?></small>
    </div>

    <div class="form-group <?php echo (form_error('device') ? 'has-error' : '') ?>">
        <label for="device">DEVICE</label>
        <input type="text" class="form-control" id="device" name="device" placeholder="Isikan device" value="<?= $asset['device'] ?>">
        <small class="block text-danger"><?= form_error('device'); ?></small>
    </div>

    <div class="form-group <?php echo (form_error('type') ? 'has-error' : '') ?>">
        <label for="type">TYPE</label>
        <input type="text" class="form-control" id="type" name="type" placeholder="Isikan type" value="<?= $asset['type'] ?>">
        <small class="block text-danger"><?= form_error('type'); ?></small>
    </div>

    <div class="form-group <?php echo (form_error('no_asset') ? 'has-error' : '') ?>">
        <label for="no_asset">no_asset</label>
        <input type="text" class="form-control" id="no_asset" name="no_asset" placeholder="Isikan no_asset" value="<?= $asset['no_asset'] ?>">
        <small class="block text-danger"><?= form_error('no_asset'); ?></small>
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
    <button type="reset" class="btn btn-warning">Reset</button>

</form>
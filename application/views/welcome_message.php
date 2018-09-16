<link rel="stylesheet" href="<?= base_url() ?>assets/css/datatables.css">
<link rel="stylesheet" href="<?= base_url() ?>assets/css/dataTables.bootstrap4.css">

<br><br><br>
<div class="container">
	<table class="table" id="myTable">
		<thead>
			<th>NIK</th>
			<th>Employee Name</th>
			<th>Location</th>
			<th>Device</th>
			<th>Brand</th>
			<th>Type</th>
			<th>No Asset</th>
		</thead>
		<tbody>
			<?php foreach ($assets as $asset): ?>
				<tr>
					<td><?= $asset->nik ?></td>
					<td><?= $asset->employee_name ?></td>
					<td><?= $asset->location ?></td>
					<td><?= $asset->device ?></td>
					<td><?= $asset->brand ?></td>
					<td><?= $asset->type ?></td>
					<td><?= $asset->no_asset ?></td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</div>

<br><br>

<script src="<?= base_url() ?>assets/js/datatables.js"></script>
<script src="<?= base_url() ?>assets/js/dataTables.bootstrap4"></script>
<script>
	$(document).ready( function () {
	    $('#myTable').DataTable();
	} );
</script>
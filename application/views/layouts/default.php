<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<title>Codeigniter RPL</title>

		<!-- Bootstrap core CSS -->
		<link href="<?= base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
		<script src="<?= base_url() ?>assets/js/jquery-2.2.0.js"></script>

	</head>

	<body>

		<nav class="navbar navbar-expand-md navbar-dark bg-dark">
			<div class="container">
				<a class="navbar-brand" href="#">Codeigniter RPL</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarsExample04">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a class="nav-link" href="#">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Link</a>
						</li>
					</ul>
				</div>				
			</div>
		</nav>

		<div class="container">
			<?= $template['body'] ?>
		</div>

		<script src="<?= base_url() ?>assets/js/popper.min.js"></script>
		<script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
	</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?= $data['title']; ?></title>
	<meta viewport="width=device-width, initail-sclae=1">
	<link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>css/bootstrap.min.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
			<a class="navbar-brand" href="<?= BASEURL; ?>">PHP MVC</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarCollapse">
				<div class="navbar-nav">
					<a class="nav-item nav-link" href="<?= BASEURL; ?>">Home</a>
					<a class="nav-item nav-link" href="<?= BASEURL; ?>mahasiswa">Mahasiswa</a>
					<a class="nav-item nav-link" href="<?= BASEURL; ?>about">About</a>
				</div>
			</div>
		</div>
	</nav>
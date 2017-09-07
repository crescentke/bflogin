<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Social Login</title>

	<link rel="stylesheet" href="<?= base_url('dist/css/bootstrap.min.css'); ?>">

</head>
<body>

	<div class="container text-center">
		<h1>Welcome to Login!</h1>

		<div id="body">
			<a href="<?= $authUrl ?>" class="btn btn-sm btn-primary">Twitter</a>
		</div>

	</div>

</body>
</html>

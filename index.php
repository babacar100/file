<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Systeme Imagerie Médicale</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel = "stylesheet" type="text/css" href="admin/css/bootstrap.css" />
		<link rel = "stylesheet" type="text/css" href="admin/css/style.css" />
	</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
		<div class="container-fluid">
			<label class="navbar-brand"> Systeme Imagerie Médicale</label>
			<a href="admin/index.php" class="navbar-brand">Admin Log-In</a>
		</div>
	</nav>
	<?php include 'login.php'?>
	<div id = "footer">
		<label class = "footer-title">&copy; Copyright File Management System <?php echo date("Y", strtotime("+8 HOURS"))?></label>
	</div>
</body>
</html>
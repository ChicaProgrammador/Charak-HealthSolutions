<?php
include_once('controller/user.php');
if($type != "patient") {
    echo "Patient allowed!";
    die();
} else {
?>
<html>
	<head>
		<title>Patient</title>
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<script src="assets/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container">
			<div class="row">
                <h1>Patient <?php echo $name ?></h1>
                <a href="logout.php">Logout</a>
			</div>
		</div>
	</body>
</html>
<?php } ?>

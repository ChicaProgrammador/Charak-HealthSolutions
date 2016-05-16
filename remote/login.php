<?php
	include('controller/session.php');
?>
<html>
	<head>
		<title>Login</title>
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<script src="assets/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<?php
						if(isset($_SESSION['error']))
							echo "<p class='bg-danger'>{$_SESSION['error']}</p>";
					?>
					<form action="controller/login.php" method="post">
						<input type="text" name="username" />
						<input type="password" name="password" />
						<input type="submit" name="loginSubmit" value="Login">
					</form>
					<a href="register.php">Register</a>
				</div>
			</div>
		</div>
	</body>
</html>

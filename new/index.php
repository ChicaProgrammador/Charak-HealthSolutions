<html>
	<head>
		<title>Remote patient</title>
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<script src="assets/js/bootstrap.min.js"></script>
	</head>
	<body>
		<h1>Doctor</h1>
		
	</body>
</html>

<?php 
require 'connect.inc.php';
require 'core.inc.php';
if(loggedin())
{
$username = getuserfield('username');

echo 'You\'re are logged in DOCTOR,'.$username.' .<a href="logout.php"> LOGOUT </a><br>';
}
else
{
include 'loginform.inc.php';
}
?>
 <br/>
<BR/>




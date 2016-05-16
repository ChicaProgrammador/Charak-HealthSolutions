<html>
	<head>
		<title>Register</title>
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<script src="assets/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container">
			<div class="row">
                <div class="col-lg-3"></div>
				<div class="col-lg-6">
                    <h1>Register</h1>
                    <form action="controller/register.php" method="post">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" required="">
                        </div>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required="">
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="address" name="address" placeholder="Address" required="">
                        </div>
                        <div class="form-group">
                            <label for="username">Date of birth</label>
                            <input type="date" class="form-control" id="dob" name="dob" placeholder="Date of birth" required="">
                        </div>
                        <div class="form-group">
                            <div class="radio">
                                <label><input type="radio" name="sex" value="male">Male</label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" name="sex" value="female">Female</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Username" required="">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required="">
                        </div>
                        <div class="form-group">
                            <label for="confirm_password">Confirm Password</label>
                            <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm Password" required="">
                        </div>
                        <button type="submit" name="registerSubmit" class="btn btn-default">Submit</button>
                    </form>
				</div>
                <div class="col-lg-3"></div>
			</div>
		</div>
	</body>
</html>

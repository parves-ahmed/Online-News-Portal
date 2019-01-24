<?php  include('config.php'); ?>
<?php  include('includes/registration_login.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>user ragistration</title>
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
    <div class="header-register">
    	<h2>Register</h2>
    </div>

    <form method="post" action="register.php">
    	<!-- display error message here -->
    	<?php include('errors.php'); ?>

    	<div class="input-group">
    		<label>username</label>
    		<input type="text" name="username" value="<?php echo $username; ?>">
    	</div>

    	<div class="input-group">
    		<label>Email</label>
    		<input type="text" name="email" value="<?php echo $email; ?>">
    	</div>

    	<div class="input-group">
    		<label>password</label>
    		<input type="password" name="password_1">
    	</div>

    	<div class="input-group">
    		<label>confirm password</label>
    		<input type="password" name="password_2">
    	</div>
    	<div class="input-group">
    		<button type="submit" name="register" class="btn">Registration</button>
    	</div>
    	<p>
    		Already a member?<a href="login.php">sign in</a>
    	</p>
    </form>
</body>
</html>
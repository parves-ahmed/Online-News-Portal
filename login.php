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

    <form method="post" action="login.php">
        <!-- display error message here -->
        <?php include('errors.php'); ?>
    	<div class="input-group">
    		<label>username</label>
    		<input type="text" name="username">
    	</div>
    	<div class="input-group">
    		<label>password</label>
    		<input type="password" name="password">
    	</div>
    	<div class="input-group">
    		<button type="submit" name="login" class="btn">Log In</button>
    	</div>
    	<p>
    		Not yet a member?<a href="register.php">sign up</a>
    	</p>
    </form>
</body>
</html>
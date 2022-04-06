<?php include('../registratie/server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <!-- Meta tags -->
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS link -->
    <link rel="stylesheet" type="text/css" href="style.css">

    <!-- Favicon icoon -->
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">

    <!-- Website titel -->
    <title>AmuseNews | Register</title>
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form action="register.php" method="post">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Log in</a>
  	</p>
  </form>
</body>
</html>
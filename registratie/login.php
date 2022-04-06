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
    <title>AmuseNews | Login</title>
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Subcribe Now!</a>
  	</p>
  </form>
</body>
</html>
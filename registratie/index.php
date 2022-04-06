<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
      $_SESSION['msg'] = "You must log in first";
      header('location: login.php');
  }
  if (isset($_GET['logout'])) {
      session_destroy();
      unset($_SESSION['username']);
      header("location: login.php");
  }
?>
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
    <title>AmuseNews | Logged in</title>
</head>
<body>

<div class="header">
    <h2>welkom!</h2>
</div>
<div class="content">
      <!-- notificatie bericht -->
      <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
          <h3>
          <?php 
              echo $_SESSION['success']; 
              unset($_SESSION['success']);
          ?>
          </h3>
      </div>
      <?php endif ?>

    <!--ingelogde info van gebruiker -->
    <?php  if (isset($_SESSION['username'])) : ?>
        <p>Welkom <strong><?php echo $_SESSION['username']; ?></strong></p>
        <?php 
            header("Refresh: 3; ../logedin.php")
        ?>
    <?php endif ?>
</div>

</body>
</html>
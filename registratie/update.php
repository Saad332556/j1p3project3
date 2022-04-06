<?php 
  include('../registratie/server.php');
  
  $id = $_GET['edit'];

  $query = 'SELECT * FROM `users` WHERE id = '. $id . ';';

  $result = mysqli_query($db, $query);

  $record = mysqli_fetch_assoc($result);
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
    <title>AmuseNews | Update user</title>
</head>
<body>
  <div class="header">
  	<h2>Update</h2>
  </div>
	
  <form action="update.php" method="post">
  	<div class="input-group">  
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $record['username']; ?>" >
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $record['email']; ?>">
  	</div>
    <label class="form-label" for="inputSelect">Choose the role</label>
    <select name="userrole" class="form-select mb-2" id="inputSelect" required>
        <option value="" disabled selected>Role</option>
        <option value="moderator" <?php if ($record['userrole'] == "moderator") { echo "selected"; } ?>>Moderator</option>
        <option value="user" <?php if ($record['userrole'] == "user") { echo "selected"; } ?>>User</option>
        </option>
    </select>

    <input type="hidden" value="<?php echo $id; ?>" name="id">

  	<div class="input-group">
  	  <button type="submit" class="btn" name="update_user">Update</button>
  	</div>
  </form>
</body>
</html>
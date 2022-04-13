<?php
    include("../registratie/server.php");

    $sql = "SELECT * FROM `users`";

    $result = mysqli_query($db, $sql);

    $row = "";
    while ($record = mysqli_fetch_assoc($result)){
        $row = $row . "<tr>
                    <td>{$record['username']}</td>
                    <td>{$record['email']}</td>
                    <td>{$record['userrole']}</td>
                    <td>
                        <a href='../registratie/update.php?edit={$record['id']}'>
                            <i class='fa fa-pencil-square-o' style='color: black;'></i>
                        </a>
                    </td>
                    <td>
                        <a href='../registratie/delete.php?del={$record['id']}'>
                            <i class='fa fa-trash' style='color: black;'></i>
                        </a>
                    </td>
                </tr>";
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Meta tags -->
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="all">
        <meta name="language" content="English">
        <meta name="author" content="Saad, Pharell">
        <meta name="description" content="">
        <meta name="keywords" content="AmuseNews, News, Anime, Gaming, Basketball">
        <meta name="copyright" content="copyright">

        <!-- CSS link -->
        <link rel="stylesheet" href="./style.css">

        <!-- Edit- and delete icon link -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <!-- Favicon icoon -->
        <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">

        <!-- Website titel -->
        <title>AmuseNews | Users</title>
    </head>
    <body>
        <div class="topnav">
            <img src="../img/default.png" class="responsive">
            <div class="topnav" id="myTopnav">
                <ul>
                    <a href="../dashboard/post_news.php">Post news</a>
                    <div class="topnav-right">
                        <a href="../logedin.php">Return</a>
                    </div>
                </ul>
            </div>
        </div>
        <main>
            <div id="begin_dashboard">
                <h1 id="t_users">Users</h1>
                <p id="txt_users">This is an overview of all current users.</p>
            </div>
            <div class="container">
                <div class="row">
                    <div>
                        <table>
                            <thead>
                                <tr>
                                    <th>Username</th>
                                    <th>E-mail</th>
                                    <th>Userrole</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php echo $row; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>
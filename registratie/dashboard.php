<script type="text/javascript" src="https://code.jquery.com/jquery-1.8.2.js"></script>
<?php
    // We maken contact met de mysql-database
    include("../registratie/server.php");

    // We maken met de taal SQL een select-query, deze selecteert alle records uit de users tabel
    $sql = "SELECT * FROM `users`";

    // De functie mysqli_query() haalt het resultaat van de query op uit de database en zet het in $result
    $result = mysqli_query($db, $sql);

    // De functie mysqli_fetch_assoc() maakt van de waarde in $result een associatief array
    $row = "";
    while ($record = mysqli_fetch_assoc($result)){
        $row = $row . "<tr>
                    <td>{$record['username']}</td>
                    <td>{$record['email']}</td>
                    <td>{$record['userrole']}</td>
                    <td>
                        <a href='./update.php?id={$record['id']}'>
                            <i class='bi bi-pencil-square'></i>
                        </a>
                    </td>
                    <td>
                        <a href='./delete.php?id={$record['id']}'>
                            <i class='bi bi-trash-fill'></i>
                        </a>
                    </td>
                </tr>";
    }
?>
<!DOCTYPE html>
<html>
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
    <link rel="stylesheet" href="../dashboard/style.css">

    <!-- Hamburger link for small screens -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!-- Favicon icoon -->
    <link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon">

    <!-- Website titel -->
    <title>AmuseNews | Users</title>
</head>
<body>
    <div class="topnav">
        <img src="img/default.png" class="responsive">
        <div class="topnav" id="myTopnav">
            <ul>
                <a href="../dashboard/post_news.php">Post news</a>
                <div class="topnav-right">
                    <a href="../registratie/login.php">Logout</a>
                    <p></p>
                </div>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i></a>
            </ul>
        </div>
    </div>
    <main>
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
<script src="./js/nav.js"></script>
<script src="./js/slideshow.js"></script>
</body>
</html>
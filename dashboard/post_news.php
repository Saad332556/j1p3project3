<?php include('../registratie/server.php'); ?>
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
        <link rel="stylesheet" href="./snackbar.css">

        <!-- Edit- and delete icon link -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- link to turn textarea to a WYSIWYG HTML Editor -->
        <script src="https://cdn.tiny.cloud/1/369imi5czjrpeg3zotgsqh3foitvdqggjdgtdsq8v9mqqzi6/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
        
        <!-- Favicon icoon -->
        <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">

        <!-- Website titel -->
        <title>AmuseNews | Dashboard</title>
    </head>
    <body>
        <div class="topnav">
            <img src="../img/default.png" class="responsive">
            <div class="topnav" id="myTopnav">
                <ul>
                    <a href="../dashboard/dashboard.php">Users</a>
                    <div class="topnav-right">
                        <a href="../logedin.php">Return</a>
                    </div>
                </ul>
            </div>
        </div>
        <main>
            <div id="begin_dashboard">
                <h1 id="t_dashboard">Dashboard</h1>
                <p class="txt_dashboard">Please provide the news that you would like to publish.</p>
                <p class="txt_dashboard">Keep the rules for publishing news in mind, you can find them <a href="https://www.urbancreativity.org/rules-for-publication.html" target="_BLANK">here</a>.</p>
            </div>
            <form action="./post_news.php" method="post" id="dashboard">
                <textarea name="editor" id="editor" placeholder="Please write here..."></textarea>
                <button type="submit" name="submit" value="submit" class="submit_dashboard" onclick="myFunction()">Submit</button>
            </form>
        </main>
        <script>
            tinymce.init({
                selector: '#editor'
            });
        </script>
<script src="tinymce/tinymce.min.js"></script>
<script src="./snackbar.js"></script>
    </body>
</html>
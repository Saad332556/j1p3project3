<?php

    include ('../registratie/server.php');
    include ('../registratie/update.php');

    var_dump('test');

    $id = $_POST['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $userrole = $_POST['userrole'];
    
    $sql = "UPDATE `users` 
                SET `username` = '$username',
                    `email` = '$email',
                    `userrole` = '$userrole', 
                WHERE `id` = $id;";

    mysqli_query($db, $sql);

    $_SESSION['message'] = "Information updated!"; 

    // header("Location: ../dashboard/dashboard.php");

?>
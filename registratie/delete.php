<?php
    include('../registratie/server.php');

    if (isset($_GET['del'])) {
        $id = $_GET['del'];
        mysqli_query($db, "DELETE FROM users WHERE id=$id");
        header("Location: ../dashboard/dashboard.php");
    }
?>
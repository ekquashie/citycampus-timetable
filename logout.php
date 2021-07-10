<?php 
    session_start();
    if(isset($_SESSION['username'])) {
        session_destroy();
        header("location: index.php");

        exit();
    }else {
        echo "Error logging out! Redirect to <a href='index.php'>Login Page</a>";
    }
?>
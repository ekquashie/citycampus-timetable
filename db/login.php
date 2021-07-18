<?php
    require_once('conn.php');
    
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM login WHERE username='$username' AND password='$password'";

    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $id = $row["id"];
            $username = $row['username'];
            session_start();
            $_SESSION['username'] = $username;
        }
        header("Location: ../dashboard.php");
    } else {
        echo "Invalid username or password!";
    }
?>
    
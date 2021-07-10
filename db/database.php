<?php
    require_once('conn.php');
    
    //Query database
    //login code
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

    //Insert into database
    if(isset($_POST['hallsubmit'])) {
        $name = $_POST['hallname'];
        $capacity = $_POST['hallcapacity'];
        
        $sql = "INSERT INTO halls (name,capacity) VALUES ('$name', '$capacity')";
    }
    if(mysqli_query($conn, $sql)) {
        echo "Hall added succesfully";
    }
    


?>

<?php 
    require_once('conn.php');

    if(isset($_POST['hallsubmit'])) {
        $name = $_POST['hallname'];
        $capacity = $_POST['hallcapacity'];

        $sql = "INSERT INTO halls (name, capacity) VALUES ('$name', '$capacity')";
    }
    if (mysqli_query($conn, $sql)) {
        echo $name." has been added successfully";
        header("location: ../halls.php");   
    }
?>
<?php
  session_set_cookie_params(0);
  session_start();
  if(!isset($_SESSION['username'])) {
    header('location: ../index.php');
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8' name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel="stylesheet" href="css/style.css">
    <link href="assets/fontawesome - 5.15.3/css/all.css" rel="stylesheet">
    <link rel="icon" href="assets/img/ug logo.png">
    <link rel="stylesheet" href="components/DataTables/datatables.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script type="text/javascript" charset="utf8" src="js/jquery36.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script type="text/javascript" charset="utf8" src="components/DataTables/datatables.js"></script>
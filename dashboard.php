<?php 
require_once("db/conn.php");
//$courses = mysqli_query($conn, "SELECT * FROM courses");
//$coursesRow = mysqli_num_rows($courses);
$halls = mysqli_query($conn, "SELECT * FROM halls");
$hallsRow = mysqli_num_rows($halls);
?>

<?php require('components/header.php') ?>
  <title>Dashboard</title>
</head>

  <body>
      <?php require('components/nav.html') ?>
      <div class="body-content dashboard">

        <div class="db-analytics">
          <div class="db-analytic">
            <div class="analytic-icon">
              <i class="fas fa-book"></i>
            </div>
            <div class="analytic-text">
              <span class="number"><?php //echo $coursesRow ?></span>
              <p>Courses</p>
            </div>
          </div>

          <div class="db-analytic">
            <div class="analytic-icon">
              <i class="fas fa-home"></i>
            </div>
            <div class="analytic-text">
              <span class="number"><?php echo $hallsRow ?></span>
              <p>Halls</p>
            </div>
          </div>
        </div>
        
      </div>
    
  <script src='script.js'></script>
  </body>
</html>
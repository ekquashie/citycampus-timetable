<?php require('components/header.php') ?>
  <title>Settings</title>
</head>

  <body>
      <?php require('components/nav.html') ?>
      <div class="body-content settings">

        <div class="settings-container">

        <nav class="nav-tab">
          <button class="tablinks active" onclick="openContent(event, 'Academic')">Academic</button>
          <button class="tablinks" onclick="openContent(event, 'Schedule')">Schedule</button>
        </nav>

        <div id="Academic" class="tabcontent">
          <form action="database.php" method="POST">
            <h4>Academic Year</h4>

            <!-- Academic Year Settings -->
            <section class="settings-section academic-container">
              <select name="year" id="year-select" onchange="academicYear()">
                <option selected="selected" value="Not Selected">Select Year</option>
                <option value="<?php echo date('Y', strtotime('-1 year')); ?>"><?php echo date('Y', strtotime('-1 year')); ?></option>
                <option value="<?php echo date('Y'); ?>"><?php echo date('Y'); ?></option>
              </select>
              <input type="text" id="year-end" disabled="disabled">
            </section>

            <!-- Select Semester -->
            <label for="semester"><h4>Select Semester</h4></label>
            <section class="settings-section semester-container">
              <select name="semester-select" id="semester-select">
                <option value="First Semester">First Semester</option>
                <option value="Second Semester">Second Semester</option>
              </select>
            </section>
          </form>
        </div>
      

        <div id="Schedule" class="tabcontent" style="display:none;">
          <form action="database.php" method="POST">

          </form>
        </div>

        </div>

      </div>
    
  <script src='js/functions.js'></script>
  </body>
</html>
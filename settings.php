<?php require('components/header.php') ?>
  <title>Settings</title>
</head>

  <body>
      <?php require('components/nav.html') ?>
      <div class="body-content settings">

        <div class="settings-container">

          <nav class="nav-tab">
            <button class="tablinks active" onclick="openContent(event, 'academic')">Academic</button>
            <button class="tablinks" onclick="openContent(event, 'schedule')">Schedule</button>
          </nav>

          <div id="academic" class="tabcontent">
            <form action="database.php" method="POST">

              <!-- Academic Year Settings -->
              <section class="settings-section">

                <!-- Sleect Academic year -->
                <div class="academic-year">
                  <h4>Academic Year</h4>
                  <select name="year" id="year-select">
                    <option selected="selected" value="Not Selected">--select year--</option>
                    <option value="<?php echo date('Y', strtotime('-1 year')) . '/' . date('Y'); ?>"><?php echo date('Y', strtotime('-1 year')) . '/' . date('Y'); ?></option>
                    <option value="<?php echo date('Y') . '/' . date('Y', strtotime('+1 year')); ?>"><?php echo date('Y') . '/' . date('Y', strtotime('+1 year')); ?></option>
                  </select>
                </div>

                <div class="semester-container">
                  <label for="semester"><h4>Select Semester</h4></label>
                  <select name="semester-select" id="semester-select">
                    <option value="First Semester">First Semester</option>
                    <option value="Second Semester">Second Semester</option>
                  </select>
                </div>

                <!-- Select Semester -->
              </section>

              <section id="submit">
                <input type="submit" value="Save">
              </section>

            </form>
          </div>

          <!-- Schedule -->
          <div id="schedule" class="tabcontent" style="display:none;">
            <form action="database.php" method="POST">

            </form>
          </div>

        </div>

      </div>
    
  <script src='js/functions.js'></script>
  </body>
</html>
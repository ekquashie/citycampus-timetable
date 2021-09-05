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
            <section class="academic-year">
              <h3>Academic Year</h3>
              <label for="year">From</label>
              <select name="year" id="1st-year">
                <option value="<?php echo date('Y', strtotime('-1 year')); ?>"><?php echo date('Y', strtotime('-1 year')); ?></option>
                <option value="<?php echo date('Y'); ?>"><?php echo date('Y'); ?></option>
              </select>
            </section>
          </form>
        </div>

        <div id="Schedule" class="tabcontent" style="display:none;">
          Hi
        </div>

        </div>

      </div>
    
  <script src='js/functions.js'></script>
  </body>
</html>
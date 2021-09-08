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

          <!------------------- Academic Year Settings ------------------->
          <div id="academic" class="tabcontent">
            <form action="database.php" method="POST">

              <section class="academics-section">

                <!-- Select Academic year -->
                <div class="academic-year">
                  <h4>Academic Year</h4>
                  <select name="year" id="year-select">
                    <option selected="selected" value="Not Selected">--select year--</option>
                    <option value="<?php echo date('Y', strtotime('-1 year')) . '/' . date('Y'); ?>"><?php echo date('Y', strtotime('-1 year')) . '/' . date('Y'); ?></option>
                    <option value="<?php echo date('Y') . '/' . date('Y', strtotime('+1 year')); ?>"><?php echo date('Y') . '/' . date('Y', strtotime('+1 year')); ?></option>
                  </select>
                </div>

                <!-- Semester Select -->
                <div class="semester-container">
                  <label for="semester"><h4>Select Semester</h4></label>
                  <select name="semester-select" id="semester-select">
                    <option value="First Semester">First Semester</option>
                    <option value="Second Semester">Second Semester</option>
                  </select>
                </div>

              </section>

              <section id="submit">
                <input type="submit" value="Save">
              </section>

            </form>
          </div>

          <!------------------- Schedule ------------------->
          <div id="schedule" class="tabcontent" style="display:none;">
            <form action="database.php" method="POST">
              <section class="duration">
                <h4>Exam Duration</h4>
                <div class="timetable-schedule">
                  <div>
                    <input name="startdate" type="text" id="startdate" class="datepicker" value="<?php // ?>" placeholder="Start date">
                  </div>
                  <div>
                    <input name="enddate" id="enddate" type="text" class="datepicker" value="<?php // ?>" placeholder="End date">
                  </div>
                </div>
              </section>
              
              <section class="sessions">
                <h4>Exam Sessions</h4>
                <?php //for loop ?>
                <div class="sessions-container">
                  Hi
                </div>
                <?php //end loop ?>
              </section>

              <section id="submit">
                <input type="submit" value="Save">
              </section>
            </form>
          </div>

        </div>

      </div>
    
  <script>
      $( function() {
        var
          from = $( "#startdate" )
            .datepicker({
              defaultDate: "+1w",
              dateFormat: 'dd MM, yy',
              changeMonth: true,
              numberOfMonths: 3
            })
            .on( "change", function() {
              to.datepicker( "option", "minDate", getDate( this ) );
            }),
          to = $( "#enddate" ).datepicker({
            defaultDate: "+1w",
            changeMonth: true,
            dateFormat: 'dd MM, yy',
            numberOfMonths: 3
          })
          .on( "change", function() {
            from.datepicker( "option", "maxDate", getDate( this ) );
          });
    
        function getDate( element ) {
          var date;
          try {
            date = $.datepicker.parseDate( 'dd MM, yy', element.value );
          } catch( error ) {
            date = null;
          }
    
          return date;
        }
      });
	</script>
  <script src='js/functions.js'></script>
  </body>
</html>
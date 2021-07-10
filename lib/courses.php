<?php //$results = mysqli_query($conn, "SELECT * FROM courses") ?>

<?php require('../components/header.php') ?>
  <title>Courses</title
</head>

  <body>
      <?php require('../components/nav.html') ?>

      <div class="body-content courses">

        <div class="course-container">
          <table class="course-table">
            <thead>
              <tr class="table-headings">
                <th class="course-headings" id="course-code">Course Code</th>
                <th class="course-headings" id="course-name">Course Name</th>
                <th class="course-headings" id="course-reg">Students</th>
                <th class="course-headings" id="course-modify">Modify</th>
              </tr>
            </thead>
            <tbody>

            <?php #while($row = mysqli_fetch_array($results)) { ?>

              <tr class="course-data">
                <td><?php #echo $row['code'] ?>UGRC 110</td>
                <td><?php #echo $row['course'] ?>Academic Writing I</td>
                <td><?php #echo $row['students'] ?>250</td>
                <td class="course-modify">
                  <a href="#"><div class="modifyBtn" id="course-update">Update</div></a>
                  <a href="#"><div class="modifyBtn" id="course-delete">Delete</div></a>
                </td>
              </tr>
            <?php #} ?>
            </tbody>
          </table>
        </div>

        <div id="modalBG">
          <div class="modal">
            <h2 class="modalHeading">Upload Course File</h2>
            <form class="fileSubmit" action="../db.php">
              <input type="file" id="myFile" name="filename">
              <input type="submit" class="modalBtn">
            </form>
          </div>
        </div>

        <button id="add-link">
            <div class="add-course">
              <i class="fas fa-plus"></i>
              <span>Add Course</span>
            </div>
        </button>

      </div>

  <script>
    $('.course-table').DataTable({});
  </script>
  <script src="../js/functions.js"></script>
  </body>
</html>
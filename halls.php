<?php //$results = mysqli_query($conn, "SELECT * FROM halls") ?>

<?php require('components/header.php') ?>
  <title>Exam Halls</title>
</head>

  <body>
      <?php require('components/nav.html') ?>
      <div class="body-content halls">

        <div class="hall-container">
          <table class="hall-table">
            <thead>
              <tr class="table-headings">
                <th class="hall-headings" id="hall-name">Hall Name</th>
                <th class="hall-headings" id="hall-capacity">Hall Capacity</th>
                <th class="hall-headings" id="hall-modify">Modify</th>
              </tr>
            </thead>
            <tbody>

            <?php //while($row = mysqli_fetch_array($results)) { ?>

              <tr class="hall-data">
                <td><?php #echo $row['hall'] ?>NLC Left Wing</td>
                <td><?php #echo $row['capacity'] ?>210</td>
                <td class="hall-modify">
                  <a href="#"><div class="modifyBtn" id="hall-update">Update</div></a>
                  <a href="#"><div class="modifyBtn" id="hall-delete">Delete</div></a>
                </td>
              </tr>
            <?php //} ?>
            </tbody>
          </table>
        </div>

        <div id="modalBG">
          <div class="modal">
            <h2 class="modalHeading">Add New Exam Hall</h2>
            <form class="fileSubmit" id="hallForm" method="POST" action="db/database.php">
              <input type="text" placeholder="Name" name="hallname" class="hallInput" required>
              <input type="number" placeholder="Capacity" name="hallcapacity" class="hallInput" required>
              <input type="submit" class="modalBtn">
            </form>
          </div>
        </div>

        <a id="add-link" href="#">
            <div class="add-hall">
              <i class="fas fa-plus"></i>
              <span>Add Hall</span>
            </div>
        </a>
        
      </div>
    
  <script>
    $('.hall-table').DataTable({});
  </script>
  <script src="js/functions.js"></script>
  </body>
</html>
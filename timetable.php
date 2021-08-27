<?php # ?>
<?php include('components/header.php') ?>
  <title> Schedule Timetable</title>
</head>
<body>
	<?php require('components/nav.html') ?>

	<div class="body-content timetable">

		<p>Date: <input type="text" id="datepicker" size="30"></p>

	</div>

	<script>
		$( function() {
    		$( "#datepicker" ).datepicker({dateFormat: 'dd MM, yy'});
  		});
	</script>
	<script src='js/functions.js'></script>
</body>
</html>
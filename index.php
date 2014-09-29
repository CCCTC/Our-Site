<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>CCCTC Computer Science</title>
		<link href="css/base.css" rel="stylesheet">
		<link href="css/home.css" rel="stylesheet">
		<script type="text/javascript" src="js/back.js"></script>
	</head>
	<body>
		<header>
			<h1>Computer Science</h1>
			<h2>Home</h2>
		</header>
		<?php include("includes/header.php"); ?>
		<section id="container">
			<h3>Agenda</h3>
			
<?php
$get_content_rows = mysql_query("SELECT * FROM  `content`");

while($row = mysql_fetch_assoc($get_content_rows)){
	$my_content_db_rows[] = $row;
}

$todayfound = false;

foreach($my_content_db_rows as $row){
	if ((date('M j Y') == date('M j Y', strtotime($row["Date"]))) && ($todayfound == false)){
		echo "<div id='today-agenda'>";
			echo "<h4>". $row["Date"] ."</h4>";
			if ($row["Main_Point1"] != "") {
				echo "<ul>";
					echo "<li>". $row["Main_Point1"] ."</li>";
				}if ($row["Main_Point2"] != "") {
					echo "<li>". $row["Main_Point2"] ."</li>";
				}if ($row["Main_Point3"] != "") {
					echo "<li>". $row["Main_Point3"] ."</li>";
				}
			echo "</ul>";
			echo "<ul>";
				
				echo "<li>". $row["Reference_Page1"] ."</li>";
				echo "<li>". $row["Reference_Page2"] ."</li>";
				echo "<li>". $row["Reference_Page3"] ."</li>";

			echo "</ul>";
			if ($row["Additional_Link1"] != "") {
				echo "<ul>";
					echo "<li>". $row["Additional_Link1"] ."</li>";
				}if ($row["Additional_Link2"] != "") {
					echo "<li>". $row["Additional_Link2"] ."</li>";
				}if ($row["Additional_Link3"] != "") {
					echo "<li>". $row["Additional_Link3"] ."</li>";
				}
			echo "</ul>";
		echo "</div>";
		
		$todayfound = true;
}
	elseif($todayfound == true){
		echo "<div class='day'>";
			echo "<h4>". $row["Date"] ."</h4>";
			echo "<h5>Main Points</h5>";
			echo "<ul>";
			
				if ($row["Main_Point1"] != "") {
					echo "<li>". $row["Main_Point1"] ."</li>";
				}if ($row["Main_Point2"] != "") {
					echo "<li>". $row["Main_Point2"] ."</li>";
				}if ($row["Main_Point3"] != "") {
					echo "<li>". $row["Main_Point3"] ."</li>";
				}
			echo "</ul>";
			echo "<h5>Reference Pages</h5>";
			echo "<ul>";
			
				echo "<li>". $row["Reference_Page1"] ."</li>";
				echo "<li>". $row["Reference_Page2"] ."</li>";
				echo "<li>". $row["Reference_Page3"] ."</li>";
				
			echo "</ul>";
			echo "<h5>Additional Links</h5>";
			echo "<ul>";
			
				if ($row["Additional_Link1"] != "") {
					echo "<li>". $row["Additional_Link1"] ."</li>";
				}if ($row["Additional_Link2"] != "") {
					echo "<li>". $row["Additional_Link2"] ."</li>";
				}if ($row["Additional_Link3"] != "") {
					echo "<li>". $row["Additional_Link3"] ."</li>";
				}
			echo "</ul>";
		echo "</div>";
	}
}
?>
			</section>
	</body>
</html>

<?php include("includes/db_connect.php"); ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Curriculum Editor - CCCTC Computer Science</title>
		<link href="css/base.css" rel="stylesheet">
		<link href="css/agenda_editor.css" rel="stylesheet">
		<script type="text/javascript" src="js/postCheck.js"></script>
		<script type="text/javascript" src="js/back.js"></script>
	</head>
	<body>
		<header>
			<h1>Computer Science</h1>
			<h2>Administration</h2>
		</header>
		<?php include("includes/header.php"); ?>
		<section id="container">
			<h3>Curriculum Editor</h3>
			<form method="post" action="lesson_maker.php">
				<h4>Unit Creator</h4>
				<label>Name: <input type="text" name="unit" placeholder="Name of Unit"></label>
				<input type="submit" value="Create" id="unitCreatorBtn">
				<span id="errorText1"></span>
			</form>
			<form method="post" action="lesson_maker.php">
				<h4>Unit Deleter</h4>
				<p>Note: this will delete the unit and all lessons inside.</p>
				<select name="deletedUnit">
<?php
foreach($my_db_rows as $row){
	echo "<option value='". $row['Name'] ."'>". $row['Name'] ."</option>";
}
?>
				</select>
				<input type="submit" value="Delete">
			</form>
			<form method="post" action="lesson_maker.php">
				<h4>Lesson Creator</h4>
				<label>Unit</label>
				<select name="lessonUnit">
<?php
foreach($my_db_rows as $row){
	echo "<option value='". $row['Name'] ."'>". $row['Name'] ."</option>";
}
?>
				</select>
				<label>Name: <input type="text" name="lesson" placeholder="Name of Lesson"></label>
				</br>
				<textarea name="lessonContent" placeholder="Please enter page content"></textarea>
				<input type="submit" value="Create">
			</form>
			<form method="post" action="lesson_maker.php">
				<h4>Lesson Deleter</h4>
				<label>Unit</label>
				<select name="deletedLessonUnit">
<?php
foreach($my_db_rows as $row){
	echo "<option value='". $row['Name'] ."'>". $row['Name'] ."</option>";
}
?>
				</select>
				<label>Lesson</label>
				<select name="deletedLessonName">
					<option value="Filler">Filler</option>
					<option value="More Filler">More Filler</option>
					<option value="All I do is fill no matter what">All I do is fill no matter what</option>
				</select>
				<input type="submit" value="Delete">
			</form>
			<!--
			<form method="post" action="lesson_maker.php">
			<h4>Lesson Editor</h4>
				<p>HTML is encouraged for the Lesson editor. Header tags start from h4.</p>
				<label>Unit</label>
				<select name="deletedLessonUnit">
					<option value="Classes">Classes</option>
					<option value="Loops">Loops</option>
					<option value="Conditionals">Conditionals</option>
					<option value="Methods">Methods</option>
					<option value="Applets">Applets</option>
					<option value="Scrubbery">Scrubbery</option>
					<option value="Interfaces">Interfaces</option>
					<option value="Arrays">Arrays</option>
				</select>
				<label>Lesson</label>
				<select name="deletedLessonName">
					<option value="Filler">Filler</option>
					<option value="More Filler">More Filler</option>
					<option value="All I do is fill no matter what">All I do is fill no matter what</option>
				</select>
				<textarea name="lessonContent" placeholder="Please enter page content">
				</textarea>
				<input type="submit" value="Save Lesson" id="lessonEditorBtn">
				<span id="errorText2" />
			</form>
			-->
		</section>
	</body>
</html>
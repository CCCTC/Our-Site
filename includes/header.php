<?php include("Do_not_upload/db_connect.php"); ?>

<nav>
			<ol type="1">
				<a href="#" id="backBtn">Back</a>
				<a href="index.php">Home</a>
<?php

$get_rows = mysql_query("SELECT * FROM  `Units`");

while($row = mysql_fetch_assoc($get_rows)){
	$my_db_rows[] = $row;
}

foreach($my_db_rows as $row){
	echo "<li>\n";
		echo $row["Name"];
			echo "<ol type='I'>\n";
			$get_other_rows = mysql_query("SELECT * FROM  `Lessons` WHERE  `Unit` LIKE  '". $row["Name"] ."'");

			while($other_row = mysql_fetch_assoc($get_other_rows)){
				$my_other_db_rows[] = $other_row;
			}

			foreach($my_other_db_rows as $row){
				echo "<li>". $row["Name"] ."</li>\n";
			}
				echo "<li class='generic'>Assignments</li>\n";
				echo "<li class='generic'>Tutorials</li>\n";
				echo "<li class='generic'>Videos</li>\n";
			echo "</ol>\n";
	echo "</li>\n";
	$get_other_rows = 0;
	$my_other_db_rows = 0;
}

$get_rows = 0;
$my_db_rows = 0;

?><!--
				<li>
					Loops
					<ol type="I">
						<li>The While Loop</li>
						<li>The For Loop</li>
						<li>Implementing Loops</li>
						<li>Recursion</li>
						<li class="generic">Assignments</li>
						<li class="generic">Tutorials</li>
						<li class="generic">Videos</li>
					</ol>
				</li>
				<li>
					Conditionals
					<ol type="I">
						<li>Booleans</li>
						<li>An If Statement</li>
						<li>An Else Statement</li>
						<li>An If/Else Statement</li>
						<li class="generic">Assignments</li>
						<li class="generic">Tutorials</li>
						<li class="generic">Videos</li>
					</ol>
				</li>
				<li>
					Methods
					<ol type="I">
						<li>Ricky is a scrub</li>
						<li>Ricky = Scrub</li>
						<li>Why wouldn't he be a scrub?</li>
						<li class="generic">Assignments</li>
						<li class="generic">Tutorials</li>
						<li class="generic">Videos</li>
					</ol>
				</li>
				<li>
					Applets
					<ol type="I">
						<li>Web Applications</li>
						<li>Embedding</li>
						<li>Problems</li>
						<li class="generic">Assignments</li>
						<li class="generic">Tutorials</li>
						<li class="generic">Videos</li>
					</ol>
				</li>
				<li>
					Scrubbery
					<ol type="I">
						<li>Repenting Your Scrub Sins</li>
						<li>What's Next?</li>
						<li>Consequences of Relapse</li>
						<li class="generic">Assignments</li>
						<li class="generic">Tutorials</li>
						<li class="generic">Videos</li>
					</ol>
				</li>
				<li>
					Interfaces
					<ol type="I">
						<li>GUI</li>
						<li>Filler</li>
						<li class="generic">Assignments</li>
						<li class="generic">Tutorials</li>
						<li class="generic">Videos</li>
					</ol>
				</li>
				<li>
					Arrays
					<ol type="I">
						<li>Uses</li>
						<li>Multidimensional Arrays</li>
						<li class="generic">Assignments</li>
						<li class="generic">Tutorials</li>
						<li class="generic">Videos</li>
					</ol>
				</li>
			</ol>-->
			<a href="#">All Videos</a>
			<a href="#">All Tutorials</a>
			<a href="agenda_editor.php">Agenda Editor</a>
			<a href="post_editor.php">Update and Add Content</a>
		</nav>

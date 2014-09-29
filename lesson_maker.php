<?php
include("Do_not_upload/db_connect.php");

if (isset($_POST["unit"]) && !empty($_POST["unit"])) {

	$name= htmlspecialchars($_POST["unit"]);

	mysql_query("INSERT INTO  `comptech`.`Units` (`ID`,`Name`)VALUES (NULL ,  '" . $name . "');");

} elseif (isset($_POST["lessonUnit"]) && !empty($_POST["lessonUnit"])) {

	$unit= htmlspecialchars($_POST["lessonUnit"]);
	$name= htmlspecialchars($_POST["lesson"]);
	$unit_content = htmlspecialchars($_POST["lessonContent"]);

	mysql_query("INSERT INTO  `comptech`.`Lessons` (`ID`,`Name`,`Unit`,`Lesson_text`)VALUES (NULL ,  '" . $name. "','" . $unit . "','" . $unit_content . "');");

} elseif (isset($_POST["deletedUnit"]) && !empty($_POST["deletedUnit"])) {

	$unit= htmlspecialchars($_POST["deletedUnit"]);

	mysql_query("DELETE FROM `comptech`.`Units` WHERE `Units`.`Name` = '". $unit ."';");
	mysql_query("DELETE FROM `comptech`.`Lessons` WHERE `Lessons`.`Unit` = '". $unit ."';");

} elseif (isset($_POST["deletedLessonUnit"]) && !empty($_POST["deletedLessonUnit"])) {

	$unit = htmlspecialchars($_POST["deletedLessonUnit"]);
	$name = htmlspecialchars($_POST["deletedLessonName"]);

	mysql_query("DELETE FROM `comptech`.`Lessons` WHERE `Lessons`.`Name` = '". $name ."';");

}
header('Location: index.php');

?>

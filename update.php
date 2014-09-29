<?php
include("Do_not_upload/db_connect.php");

$date = htmlspecialchars($_POST["month"]) . " " . htmlspecialchars($_POST["day"]) . " " . htmlspecialchars($_POST["year"]);
$main_point1 = htmlspecialchars($_POST["point1"]);
$main_point2 = htmlspecialchars($_POST["point2"]);
$main_point3 = htmlspecialchars($_POST["point3"]);
$referance_point1 = htmlspecialchars($_POST["lectureUnit1"]);
$referance_point2 = htmlspecialchars($_POST["lectureUnit2"]);
$referance_point3 = htmlspecialchars($_POST["lectureUnit3"]);
$link1 = htmlspecialchars($_POST["link1"]);
$link2 = htmlspecialchars($_POST["link2"]);
$link3 = htmlspecialchars($_POST["link3"]);

mysql_query("INSERT INTO  `comptech`.`content` (`ID`,`Date`,`Main_Point1`,`Main_Point2`,`Main_Point3`,`Reference_Page1`,`Reference_Page2`,`Reference_Page3`,`Additional_Link1`,`Additional_Link2`,`Additional_Link3`)VALUES (NULL ,  '" . $date ."',  '" . $main_point1 ."',  '" . $main_point2 ."',  '" . $main_point3 ."',  '" . $referance_point1 ."',  '" . $referance_point2 ."',  '" . $referance_point3 ."',  '" . $link1 ."',  '" . $link2 ."',  '" . $link3 ."');");

header('Location: index.php');

?>

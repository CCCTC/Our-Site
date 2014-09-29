<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Agenda Editor - CCCTC Computer Science</title>
		<link href="css/base.css" rel="stylesheet">
		<link href="css/agenda_editor.css" rel="stylesheet">
		<script type="text/javascript" src="js/back.js"></script>
	</head>
	<body>
		<header>
			<h1>Computer Science</h1>
			<h2>Administration</h2>
		</header>
		<?php include("includes/header.php"); ?>
		<section id="container">
			<h3>Agenda Editor</h3>
			<form method="post" action="update.php">
				<div id="date">
					<label>Date</label>
					<select name="month">
						<option value="Sep">September</option>
						<option value="Oct">October</option>
						<option value="Nov">November</option>
						<option value="Dec">December</option>
						<option value="Jan">January</option>
						<option value="Feb">February</option>
						<option value="Mar">March</option>
						<option value="Apr">April</option>
						<option value="May">May</option>
					</select>
					<select name="day">
						<option value="1">1</option><option value="2">2</option><option value="3">3</option>
						<option value="4">4</option><option value="5">5</option><option value="6">6</option>
						<option value="7">7</option><option value="8">8</option><option value="9">9</option>
						<option value="10">10</option><option value="11">11</option><option value="12">12</option>
						<option value="13">13</option><option value="14">14</option><option value="4">15</option>
						<option value="16">16</option><option value="17">17</option><option value="18">18</option>
						<option value="19">19</option><option value="20">20</option><option value="21">21</option>
						<option value="22">22</option><option value="23">23</option><option value="24">24</option>
						<option value="25">25</option><option value="26">26</option><option value="27">27</option>
						<option value="28">28</option><option value="29">29</option><option value="30">30</option>
						<option value="31">31</option>
					</select>
					<select name="year">
						<option value="2014">2014</option>
						<option value="2015">2015</option>
					</select>
				</div>
				<div id="main-points">
					<label>Main Points</label>
					<ul>
						<li><input type="text" name="point1" placeholder="Point 1"></li>
						<li><input type="text" name="point2" placeholder="Point 2"></li>
						<li><input type="text" name="point3" placeholder="Point 3"></li>
					</ul>
				</div>
				<div id="references">
					<label>Referenced Pages</label>
					<ul>
						<li><label>Unit<input type="number" min="1" max="9" value="1" name="lectureUnit1"></label><label>Lesson<input type="number" min="1" max="10" value="1" name="lectureNum1"></label></li>
						<li><label>Unit<input type="number" min="1" max="9" value="1" name="lectureUnit2"></label><label>Lesson<input type="number" min="1" max="10" value="1" name="lectureNum2"></label></li>
						<li><label>Unit<input type="number" min="1" max="9" value="1" name="lectureUnit3"></label><label>Lesson<input type="number" min="1" max="10" value="1" name="lectureNum3"></label></li>
					</ul>
				</div>
				<div id="links">
					<label>Additional Links</label>
					<ul>
						<li><label>Link<input type="url" name="link1"></label><label>Name of Link<input type="text" name="linkName1"></label></li>
						<li><label>Link<input type="url" name="link2"></label><label>Name of Link<input type="text" name="linkName2"></label></li>
						<li><label>Link<input type="url" name="link3"></label><label>Name of Link<input type="text" name="linkName3"></label></li>
						<li><label>Link<input type="url" name="link4"></label><label>Name of Link<input type="text" name="linkName4"></label></li>
					</ul>
				</div>
				<input type="submit" value="Save Change to Agenda">
			</form>
		</section>
	</body>
</html>

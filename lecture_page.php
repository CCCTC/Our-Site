<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>CCCTC Computer Science</title>
		<link href="css/base.css" rel="stylesheet">
		<script type="text/javascript" src="js/back.js"></script>
		<style>
			section#container p {
				font-family: serif;
				font-size: 1.5em;
				text-align: left;
				text-indent: .5in;
				width: 70%;
				margin: 0 auto;
			}
			section#container code pre {
				text-align: left;
				width: 70%;
				background: #fffca7;
				color: #5e2525;
				margin: 0 auto;
				font-size: 2em;
				font-family: 'Consolas', 'Courier New', monotype;
				overflow-y: auto;
			}
		</style>
	</head>
	<body>
		<header>
			<h1>Computer Science</h1>
			<h2>Scrubbery</h2>
		</header>
		<?php include("includes/header.php"); ?>
		<section id="container">
			<h3>Repenting Your Scrub Sins</h3>
			<p>One of the easiest ways of repenting scrubbery is to call the following function in Python.</p>
			<code><pre>
def descrub(the_scrub):
	the_scrub.scrub_clean()
	for sin in the_scrub.sins:
		print sin
	
	the_scrub = "Not a scrub"
	return the_scrub
		</pre></code>
			<p>There are some drawbacks of course, one including trying to descrub a person that is not a scrub. It will return a recursion error.
		</section>
	</body>
</html>
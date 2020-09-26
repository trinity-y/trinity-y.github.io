<!DOCTYPE html>
<html>
	<!-- title defines website title, link applies css -->
	<head>
		<title>Trinity's Website - PHP</title>
		<link rel="stylesheet" type="text/css" href="basic.css">
	</head>
	<!-- body -->
	<body>
		<!-- JAVASCRIPT -->
		<script type="text/javascript">
			function getInput(id) {
				return document.getElementById(id).value;
			}
			function editText(id, message) {
				var element = document.getElementById(id);
				element.innerHTML = message;
			}
		</script>
		<!-- top part -->
		<header>
			<div class="headDiv">
				<H1 class="websiteTitle">Trinity Yip</H1>
			</div>
		</header>
		<!-- links -->
		<nav>
			<div class="navLinkContainer">
				<a href="home.html" class="navLink" data-content="HOME">HOME</a>
				<a href="resume.html" class="navLink" data-content="RESUME">RESUME</a>
				<a href="projects.html" class="navLink" data-content="PROJECTS">PROJECTS</a>
			</div>
		</nav>
		<!-- main site -->
		<H2>This is a page for me to test PHP!</H2>
		<!-- PHP! -->
		<?php
			echo "<H3>  this was printed in php </H3>";
		?>
	</body>
</html>
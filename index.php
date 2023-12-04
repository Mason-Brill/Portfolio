<!DOCTYPE html>
<head>
	<link rel="stylesheet" href="./index.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
</head>
<body>

	<img class="background" src="background.svg" alt="space"/>

	<h1 class="intro">Welcome!</h1>

	<div class="welcome-container">
	  <div class="welcome-left">
	    <h1 class="heading-left">I am Mason Brill</h1>
	    <p class="text-left">
		I'm a versatile front-end engineer ready to
		complete any task. I have relavent expierence with
		the MERN and LAMP web stacks along with related
		technologies. Ever since I was young I have always
		had a curiosity for technology. I always wanted to
		know what was going on behind the scenes. What made
		computers tick? How was I able to play incredible
		video games? How can these computers display graphics
		on the screen? These are the questions I asked myself
		and was determined to find the answer to. This is
		what lead me to my pursuit of a degree in computer
		science. I also took personal endevours to discover
		topics I wanted to find answers to. Now I can
		confidently say I am finding those answers and
		the journey will never stop in this ever-changing
		field.
	    </p>
	  </div>
	  <img src="./images/Mason.Webp" class="me"/>
	  <div class="contact-container">
		<h1 class="heading-left">Contact Me</h1>
		    <p class="Email">
			mason.brill@spartans.ut.edu
			masonjamesbrill@yahoo.com
			</p>
		<h1 class="heading-left">GitHub</h1>
		    <p class="Email">
			<a href="https://github.com/Mason-Brill" target="_blank">https://github.com/Mason-Brill</a>
			</p>
	  </div>
	</div>

	<?php

	// Get the database URL from the environment variable
	$databaseUrl = getenv("JAWSDB_URL");

	// Parse the URL
	$dbUrl = parse_url($databaseUrl);

	// Extract the connection details
	$host = $dbUrl["host"];
	$user = $dbUrl["user"];
	$pass = $dbUrl["pass"];
	$dbname = substr($dbUrl["path"], 1);  // Remove leading slash

	// Use these details to connect to the MySQL database
	$mysqli = new mysqli($host, $user, $pass, $dbname);

	$query = 'SELECT * FROM projects';
	$result = $mysqli->query($query);
	$counter = 0;

	if ($mysqli->connect_error) {
		die('Connect Error: ' . $mysqli->connect_error);
	} else {
		echo 'Connected successfully';
	}

	$checkTableQuery = 'SHOW TABLES LIKE "projects"';
	$result = $mysqli->query($checkTableQuery);

	if ($result->num_rows > 0) {
		echo 'Table "projects" exists.';
	} else {
		echo 'Table "projects" does not exist.';
	}

	while ($record = mysqli_fetch_assoc($result)) {
		echo '<div class="extra-space"></div>';
		echo '<p>'. $record[0] . $record[1] .'<p>';

		// Determine the CSS class based on the counter
		$cssClass = ($counter % 2 == 0) ? 'even-class' : 'odd-class';

		// Output the container with the dynamic CSS class
		echo '<div class="' . $cssClass . '">';
		//displaying respective picture on left side of screen if even class
		if ($cssClass == 'even-class') {
			echo '<img src="./images/' . $counter . '.webp" class="even-image"/>';
		}
		echo '<h2 class="project-title">' . $record['title'] . '</h2>';
		echo '<h3 class="skills">' . $record['skills'] . '</h3>';
		echo '<p class="desc">' . $record['description'] . '</p>';

		if ($cssClass == 'odd-class') {
			echo '<img src="./images/' . $counter . '.webp" class="odd-image"/>';
		}
		echo '</div>';

		// Increment the counter for the next iteration
		$counter++;
	}

	?>
	<div class="extra-space"></div>
</body>

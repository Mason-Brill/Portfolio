<!DOCTYPE html>
<head>
	<link rel="stylesheet" href="./index.css">

	<h1 class="intro">Hello, I am Mason Brill</h1>
</head>
<body>

	<img class="background" src="background.svg" alt="space"/>
	<?php
	$connect = mysqli_connect(
		'db',
		'lamp_docker',
		'password',
		'lamp_docker'
	);

	$query = 'SELECT * FROM projects';
	$result = mysqli_query($connect, $query);

	while($record = mysqli_fetch_assoc($result))
	{
		echo '<h2>'.$record['title'].'</h2>';
		echo '<h3>'.$record['skills'].'</h3>';
		echo '<p>'.$record['description'].'</p>';
	}
	?>
</body>
<h1>a</h1>
<h1>a</h1>
<h1>a</h1>
<h1>a</h1>
<h1>a</h1>

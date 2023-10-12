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
	echo '<hr>';
}

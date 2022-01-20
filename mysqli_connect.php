<?php
//file opens a connection to DB

DEFINE ('DB_USER', 'brsmith');
DEFINE ('DB_PASSWORD', '9eeShT');
DEFINE ('DB_HOST', 'dbsrv2.cs.fsu.edu');
DEFINE ('DB_NAME', 'brsmithdb');

$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die('Could not connect to MySQL: ' . mysqli_connect_error());

?>
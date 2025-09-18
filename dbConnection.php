<?php
$databaseHost = 'localhost';
$databaseName = 'test;';
$databaseUsername = 'root';
$databasePassword = '1234';

// Open a new connection to the MySQL server
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 

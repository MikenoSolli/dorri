<?php

$host = "localhost"; //IP of your database
$user = "postgres"; //Username for database login
$pass = "Yesupekee"; //Password associated with the username
$database = "postgres"; //Your database name

$connectQuery = new PDO("pgsql:host=$host;dbname=$database", $user, $pass);

?>
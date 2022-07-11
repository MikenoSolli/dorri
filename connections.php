<?php

$host = "ec2-54-159-22-90.compute-1.amazonaws.com"; //IP of your database
$user = "gqcadqoagowdjf"; //Username for database login
$pass = "f1f30ab292770253e7f0ce37aa2720a605a5660569134ed03287002bbf01d59f"; //Password associated with the username
$database = "d3lu7kruu6l1ni"; //Your database name

$connectQuery = new PDO("pgsql:host=$host;dbname=$database", $user, $pass);

?>

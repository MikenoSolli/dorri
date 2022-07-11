<?php
$dsn = "pgsql:"
    . "host=ec2-54-159-22-90.compute-1.amazonaws.com;"
    . "dbname=d3lu7kruu6l1ni;"
    . "user=gqcadqoagowdjf;"
    . "port=5432;"
    . "sslmode=require;"
    . "password=f1f30ab292770253e7f0ce37aa2720a605a5660569134ed03287002bbf01d59f";

$connectQuery = new PDO($dsn);
//$connectQuery = new PDO("pgsql:host=$host;dbname=$database", $user, $pass);

?>


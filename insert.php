<?php



require('connections.php');

session_start();
$id=$_SESSION['varName'];
echo"<script>console.log('".$id."');</script>";

echo $d=$_SESSION['fine'];



if (!$connectQuery) {
      die("Connection failed: " . pg_connect_error());
}
 
echo "Connected successfully";
 
$sql = "INSERT INTO payment(fine,cost) VALUES (".$d.",'20000');";




    $result = $connectQuery->prepare($sql);
    $result->execute();
       
 
  


$sql2 = "SELECT id from payment where payment.fine='".$d."';";



$result = $connectQuery->prepare($sql2);
    $result->execute();


while($row = $result->fetch(\PDO::FETCH_ASSOC)){

$sql3 = "UPDATE fine set payment=".$row['id']." where id=".$d.";";
$result = $connectQuery->prepare($sql3);
$result->execute();
    }

header( "Location: payment.php");
?>
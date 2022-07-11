<?php 

require('connections.php');


echo $json= file_get_contents('php://input');

//$json='{"Number":"xxxx","Cost":"xxxx","Mistake":"xxxxx"}';
$yummy = json_decode($json);

echo $Number=$yummy->Number;
$Cost=$yummy->Cost;
$mistak=$yummy->Mistake;

$sql3= "SELECT id from person where Name='".$Number."'"; 
$result=mysqli_query($conn,$sql3);

if(mysqli_num_rows($result) > 0){
}else{
    $msg = "No Record found";
}

while($row = mysqli_fetch_assoc($result)){


$sql2 = "INSERT INTO fine(fine,person,cost) VALUES ('" . $Mistake . "',".$row['id'].",'".$cost."')";
try {

    if (mysqli_query($conn, $sql2)) {
   
        echo "New record created successfully";
       
  } else {
        echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
  }
  
    throw new Exception("This is an exception");
  } catch(Exception $e) {
    echo $e->getMessage();
  }
}

?>
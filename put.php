<html>
<head>
<title>ThaiCreate.Com Tutorial</title>
</head>
<body>
<?php
 $t1=$_POST['t1'];
 $t2=$_POST['t2'];
include ("connections.php");


    
    $sql = "INSERT INTO person VALUES ('','" . $t1 . "','car')";
    $result = $connectQuery->prepare($sql);
    $result->execute();

    $sql3= "SELECT id from person where Name='".$t1."'"; 
    $result = $connectQuery->prepare($sql3);
    $result->execute();


    while($row = $result->fetch(\PDO::FETCH_ASSOC)){


    $sql2 = "INSERT INTO credentials VALUES ('" . $t1 . "', '" . $t2 . "',".$row['id'].")";
    try {

      $result = $connectQuery->prepare($sql2);
      $result->execute();

        throw new Exception("This is an exception");
      } catch(Exception $e) {
        echo $e->getMessage();
      }
    }
?>
</body>
</html>
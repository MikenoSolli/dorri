
<?php
require('connections.php');

if(mysqli_connect_errno()){
    echo mysqli_connect_error();
    exit();
}else{
 //$result = $this->pdo->query("");
   // $result = pg_query($connectQuery,$selectQuery) or die('Error message: ' . pg_last_error());
   $selectSQL = "SELECT * from validat();";
   $stmt = $connectQuery->prepare($selectSQL);
   $stmt->execute();

   echo $name=$_POST['username'];
   echo $pass=$_POST['pass']; 
}
    

while($row = $stmt->fetch(\PDO::FETCH_ASSOC)){
        
        
           
             
            
  if ($name == $row['username']&& 
     $pass == $row['password']) {
         echo"<script>
       function showMessage(message) {
           if (!('Notification' in window)) {
             // Code to run if notifications are not
             // supported by the visitor's browser
           } else {
             if (Notification.permission === 'granted') {
               var notification = new Notification(message);
             } else if (Notification.permission !== 'denied') {
               Notification.requestPermission().then(function (permission) {
                 if (permission === 'granted') {
                   var notification = new Notification(message);
                 }
           });
             }
           }
         }
         
         showMessage('You have logged in.');
         </script>";
     echo $page = $row['level'];
   session_start();
     $_SESSION['valid'] = true;
     $_SESSION['timeout'] = time();
    $_SESSION['varName'] = $row['id'];
    $_SESSION['name'] = $row['name'];
     
    header( 'Location: '.$page.'.php' );
     
     echo 'You have entered valid use name and password';
     echo $row['name'];
  }else {
    
  echo 'Wrong username or password';
   
  }
}
            
?>

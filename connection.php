<?php 
   
   session_start();
   
  $servername = "localhost";
  $username = "root";
  $password = "Rahaman@2";
  $databasename = "BUYLO";
  

  $connection = mysqli_connect($servername, 
    $username, $password, $databasename);

?>

<?php
  
  $host ="localhost";
  $user_name ="root";
  $password ="";
  $database_name ="laundry";
  
  $db_link =mysqli_connect($host,$user_name,$password,$database_name);
  if(!$db_link) {
    echo"Gagal Terhubung ke Server";
    }
?>

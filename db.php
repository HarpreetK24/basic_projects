<?php
   $host = "localhost";
   $username = "root";
   $password = "";
   $dbname="e-learning";
   
   $connection = mysqli_connect($host, $username, $password,$dbname);
   if (!$connection) 
   {
       die("Connection Unsucessful: " . mysqli_connect_error());
   }
?>

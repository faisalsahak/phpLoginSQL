<?php 
  $connection = mysqli_connect('localhost', 'root', '', 'myLogin');
  if($connection){
    echo 'connected to the database';
  }else {
    die("coonection to database FAILED");
  }

  $query = "SELECT * FROM USERS";
  $result = mysqli_query($connection, $query);


 ?>

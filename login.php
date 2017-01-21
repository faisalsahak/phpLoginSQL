<?php
  if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $connection = mysqli_connect('localhost', 'root', '', 'myLogin');
    if($connection){
      echo 'connected to the database';
    }else {
      die("coonection to database FAILED");
    }

    $query = "INSERT INTO USERS(username, password)";
    $query .= "VALUES('$username', '$password')";
    $result = mysqli_query($connection, $query);

    if(!$result){
      echo "something went wrong";
    }else {
      echo 'Account Created';
    }

  }
 ?>




<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <style>
      body{
        background-color: rgb(59, 135, 110)
      }
      form {
        max-width: 20%;
        margin-left: 41%;
        margin-top: 18%;
      }
    </style>
  </head>
  <body>
    <form action="login.php" method="post">
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" name = 'username' id="username" placeholder="Username">
      </div>
      <div class="form-group">
        <label for="passowrd">Password</label>
        <input type="password" class="form-control" name = 'password' id="password" placeholder="Password">
      </div>
      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
  </body>
</html>

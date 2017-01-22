<?php
 include 'db.php'
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>database read</title>
  </head>
  <body>
    <div class="container">
      <?php
        while($users = mysqli_fetch_all($result)) {
      ?>
        <pre>
          <?php
            print_r($users);
          ?>
        </pre>
        <?php
      }
      ?>
    </div>
  </body>
</html>

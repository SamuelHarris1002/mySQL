<?php
  $db_host = 'localhost';
  $db_user = 'root';
  $db_password = 'root';
  $db_db = 'information_schema';
  $db_port = 3306;
  $mysqli = new mysqli(
    $db_host,
    $db_user,
    $db_password,
    $db_db
  );
  if ($mysqli->connect_error) {
    echo 'Errno: '.$mysqli->connect_errno;
    echo '<br>';
    echo 'Error: '.$mysqli->connect_error;
    exit();
  }
  if(isset($_POST["submitBtn"]) && $_POST["submitBtn"]!="") {
      $name = $_POST["fName"];
      $last_name = $_POST["last_name"];
      $age = $_POST["age"];
  if(mysqli_query($mysqli, "INSERT INTO `users` (`id`, `name`, `last_name`, `age`)
        VALUES (NULL, '$name', '$last_name', '$age')")) {
            echo "User successfully added";
        }
  }
  $mysqli->close();
?>
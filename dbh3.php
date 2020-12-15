<?php
$db_host = 'localhost';
$db_user = 'root';
$db_password = 'root';
$db_db = 'sessionOneStudents';
$db_port = 8889;
$mysqli = new mysqli(
    $db_host,
    $db_user,
    $db_password,
    $db_db
);
if ($mysqli->connect_error) {
    echo 'Errno' . $mysqli->connect_errno;
    echo '<br>';
    echo 'Error: ' . $mysqli->connect_error;
    exit();
}
mysqli_query($mysqli, "INSERT INTO users (name,last_name,age)
    VALUES('Mr', 'G', '24')");
$mysqli->close();
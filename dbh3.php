<?php
$db_host = 'localhost';
$db_user = 'root';
$db_password = 'root';
$db_db = 'sessiononestudents';
$db_port = 3306;
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
mysqli_query($mysqli, "INSERT INTO users (first_name,last_name,age)
        VALUES('Nicole', 'G', '17')");
$mysqli->close();
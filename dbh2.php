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
$query = "CREATE TABLE users(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
first_name VARCHAR( 25 ) NOT NULL ,
last_name VARCHAR( 25 )NOT NULL ,
)";
if (mysqli_query($mysqli,$query)){
    echo" Table created successfully";
}else {
    echo "Error in creating table: " . mysqli_error($mysqli);
}
$mysqli->close();
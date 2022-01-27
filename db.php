<?php
session_start();
$conn = mysqli_connect(
    'localhost:3333',
    'root',
    '',
    'php_crud_mysql'

);

/*if (isset($conn)){
    echo "database is connected";
}*/
?>
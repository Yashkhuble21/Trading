<?php
// error_reporting(0);
ob_start();
session_start();

DEFINE('DB_USER', 'root');
DEFINE('DB_PASSWORD', '');
DEFINE('DB_HOST', 'localhost'); //host name depends on server
DEFINE('DB_NAME', 'trade_b2b');
// function ConnectToDatabase()
// {

//     header("Content-Type: text/html;charset=UTF-8");

//     $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

//     if (!$conn) {
//         die("connection lost" . mysqli_connect_errno());
//     }

//     return $conn;
// }


header("Content-Type: text/html;charset=UTF-8");

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if (!$conn) {
    die("connection lost" . mysqli_connect_errno());
}

mysqli_query($conn, "SET NAMES 'utf8'");

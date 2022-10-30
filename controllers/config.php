<?php
session_start();
$errors = array();

$connection = mysqli_connect("localhost", "root", "", "cebra");

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
?>
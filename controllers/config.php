<?php
session_start();

$connection = mysqli_connect("localhost", "root", "", "cebra");

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
?>
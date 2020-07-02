<?php
require_once('connection.php');

//print_r($_GET);

if (isset($_GET['l'])){
    $query = "INSERT INTO directions (direction) VALUES ('l')"; 
    mysqli_query($conn, $query);
    echo 'l';}

if (isset($_GET['r'])){
        $query = "INSERT INTO directions (direction) VALUES ('r')"; 
    mysqli_query($conn, $query);
    echo 'r';}


if (isset($_GET['f'])){
    $query = "INSERT INTO directions (direction) VALUES ('f')"; 
    mysqli_query($conn, $query);
    echo 'f';}

if (isset($_GET['b'])){
    $query = "INSERT INTO directions (direction) VALUES ('b')"; 
    mysqli_query($conn, $query);
    echo 'b';}

if (isset($_GET['s'])){
    $query = "INSERT INTO directions (direction) VALUES ('s')"; 
    mysqli_query($conn, $query);
    echo 's';}


echo "<script>location='robot.php';</script>";

     ?>

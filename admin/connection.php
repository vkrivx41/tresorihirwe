<?php

    $SERVER = 'localhost';
    $USER = 'root';
    $PASS = '';
    $DB = 'tresorihirwe';

    $conn = mysqli_connect($SERVER,$USER,$PASS,$DB);

    if(!$conn){
        header('location:./error.php');
    }
<?php

    $SERVER = '127.0.0.1';
    $USER = 'bmsmystyvb';
    $PASS = 'p3uJAFah25';
    $DB = 'bmsmystyvb';

    $conn = mysqli_connect($SERVER,$USER,$PASS,$DB);

    if(!$conn){
        header('location:./error.php');
    }

<?php

    require_once('./../../../connection.php');
    session_start();
    if(!isset($_SESSION['identification']) || !isset($_SESSION['authenticated'])){
        header('location:./../../../../');
    }
    if(!isset($_GET['id'])){
        header('location:./../../');
    }else{
        $messageId = $_GET['id'];
    }

    $messageRemoveQuery = "DELETE FROM `messages` WHERE `id`='$messageId'";
    $messageRemovalResult = mysqli_query($conn,$messageRemoveQuery);

    if($messageRemovalResult){
        header('location:./../');
    }else{
        header('location:./../../../error.php?error=deletion');
    }
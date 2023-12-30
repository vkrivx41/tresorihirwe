<?php
    require_once('./../../connection/connection.php');
    if(!isset($_GET['id'])){
        header('location:./../');
    }

    $id= $_GET['id'];

    $sql = "UPDATE `payments` SET `approved`=-1 WHERE paymentId='$id'"; 
    $result = mysqli_query($conn,$sql);

    if($result){
        header('location:./../');
    }
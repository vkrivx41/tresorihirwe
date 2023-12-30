<?php
    require_once('./../../connection/connection.php');
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE FROM `reviews` WHERE id='$id'";
        $result = mysqli_query($conn,$sql);
        if($result){
            header('location:./../');
        }
    }else{
        header('location:./../');
    }
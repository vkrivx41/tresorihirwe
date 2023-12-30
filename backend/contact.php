<?php

    require_once('connection.php');

    if(isset($_POST['submit'])){
        $id = uniqid();
        $telephone = $_POST['telephone'];
        $names = $_POST['names'];
        $message = $_POST['message'];

        $query = "INSERT INTO `messages` (`id`,`names`,`telephone`,`message`) VALUES('$id','$names','$telephone','$message')";
        $result = mysqli_query($conn,$query);

        if($result){
            header('location:./../');
        }
    }
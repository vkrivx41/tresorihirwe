<?php
    require_once('./../../connection/connection.php');

    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $price = $_POST['price'];

        $image = $_FILES['image'];

        $fileName = $image['name'];
        $fileTmpName = $image['tmp_name'];
        $fileSize = $image['size'];
        $fileError = $image['error'];

        $fileUniqueName = uniqid() . '_' . $fileName;

        $uploadDir = './../../../../uploads/';

        

        if (move_uploaded_file($fileTmpName, $uploadDir . $fileUniqueName)) {
            $fileLink = $fileUniqueName;
            $sql = "UPDATE `services` SET `name`='$name',`imageLink`='$fileLink',`price`='$price' WHERE `id`='$id'" ;
            $result = mysqli_query($conn,$sql);
            if($result){
                header('location:./../');
            }else{
                echo 'error upating a record';
            }
        } else {
            echo "Error uploading the file.";
        }

    }



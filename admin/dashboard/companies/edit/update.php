<?php
    require_once('./../../connection/connection.php');

    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $name = $_POST['name'];

        $image = $_FILES['image'];

        $fileName = $image['name'];
        $fileTmpName = $image['tmp_name'];
        $fileSize = $image['size'];
        $fileError = $image['error'];

        $fileUniqueName = uniqid() . '_' . $fileName;

        $uploadDir = './../../../../uploads/';

        

        if (move_uploaded_file($fileTmpName, $uploadDir . $fileUniqueName)) {
            $fileLink = $fileUniqueName;
            $sql = "UPDATE `company` SET `name`='$name',`image`='$fileLink' WHERE `id`='$id'" ;
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



<?php
    require_once('./../../connection/connection.php');

    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $content = $_POST['content'];
        $sociallink = $_POST['sociallink'];

        $signaturelink = $_FILES['signaturelink'];

        $fileName = $signaturelink['name'];
        $fileTmpName = $signaturelink['tmp_name'];
        $fileSize = $signaturelink['size'];
        $fileError = $signaturelink['error'];

        $fileUniqueName = uniqid() . '_' . $fileName;

        $uploadDir = './../../../../uploads/';



        $profilelink = $_FILES['profilelink'];

        $fileName2 = $profilelink['name'];
        $fileTmpName2 = $profilelink['tmp_name'];
        $fileSize2 = $profilelink['size'];
        $fileError2 = $profilelink['error'];

        $fileUniqueName2 = uniqid() . '_' . $fileName;

        

        if (move_uploaded_file($fileTmpName, $uploadDir . $fileUniqueName) and move_uploaded_file($fileTmpName2, $uploadDir . $fileUniqueName2)) {
            $fileLink = $fileUniqueName;
            $fileLink2 = $fileUniqueName2;
            $sql = "UPDATE `reviews` SET `name`='$name',`content`='$content',`profilelink`='$fileLink2',`signaturelink`='$fileLink',`sociallink`='$sociallink' WHERE `id`='$id'" ;
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



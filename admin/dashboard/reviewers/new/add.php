<?php
    require_once('./../../connection/connection.php');

    if(isset($_POST['submit'])){
        $id = uniqid();
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
            $sql = "INSERT INTO `reviews` (`id`,`name`,`content`,`profilelink`,`signaturelink`,`sociallink`) VALUES ('$id','$name','$content','$fileLink2','$fileLink','$sociallink')";
            $result = mysqli_query($conn,$sql);
            if($result){
                header('location:./../');
            }else{
                echo 'error inserting a record';
            }
        } else {
            echo "Error uploading the file.";
        }

    }

// Check if a file was submitted
// if (isset($_FILES['file'])) {
//     $file = $_FILES['file'];

//     // File details
//     $fileName = $file['name'];
//     $fileTmpName = $file['tmp_name'];
//     $fileSize = $file['size'];
//     $fileError = $file['error'];

//     // Generate a unique filename to avoid conflicts
//     $fileUniqueName = uniqid() . '_' . $fileName;

//     // File upload directory
//     $uploadDir = './../../../../uploads/';

//     // Move the uploaded file to the desired directory
//     if (move_uploaded_file($fileTmpName, $uploadDir . $fileUniqueName)) {
//         // File uploaded successfully, store the file link in the database
//         $fileLink = $uploadDir . $fileUniqueName;

//         // Insert the file link into the database
//         $sql = "INSERT INTO files (file_link) VALUES ('$fileLink')";
//         if ($conn->query($sql) === true) {
//             echo "File uploaded and link stored in the database successfully.";
//         } else {
//             echo "Error: " . $sql . "<br>" . $conn->error;
//         }
//     } else {
//         echo "Error uploading the file.";
//     }
// }


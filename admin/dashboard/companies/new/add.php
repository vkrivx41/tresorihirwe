<?php
    require_once('./../../connection/connection.php');

    if(isset($_POST['submit'])){
        $id = uniqid();
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
            $sql = "INSERT INTO `company` (`id`,`name`,`image`) VALUES ('$id','$name','$fileLink')";
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


<?php
require_once('connection.php');
session_start();
    if(isset($_SESSION['identification']) || isset($_SESSION['authenticated'])){
        header('location:./dashboard/');
    }
    if(isset($_POST['login'])){
        $id = $_POST['id'];
        $password = $_POST['password'];

        $query = "SELECT * FROM `admin` WHERE `id`='$id'";
        $result = mysqli_query($conn,$query);

        if($result){
            if(mysqli_num_rows($result)<1){
                header('location:./error/index.php?error=user ');
            }
            else{
                while($row = mysqli_fetch_assoc($result)){
                    if($password == $row['password']){
                        $_SESSION['identification'] = $row['id'];
                        $_SESSION['authenticated']=true;
                        header('location:./dashboard/');
                    }else{
                        header('location:./error/index.php?error=pass ');
                    }
                }
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css">
    <title>Admin</title>
</head>
<body>
    <div class="container">
        <div class="content">
            <div class="form">
                <span>login to proceed</span>
                <form action="" method="post">
                    <input type="text" name="id" id="" class="username" placeholder="your identification number" required>
                    <input type="text" name="password" id="" class="password" placeholder="password" required>
                    <input type="submit" value="login" name="login">
                </form>
            </div>
        </div>
    </div>
</body>
</html>
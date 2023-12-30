<?php
    require_once('./../../connection/connection.php');
    session_start();
    if(!isset($_SESSION['identification']) || !isset($_SESSION['authenticated'])){
        header('location:./../../../');
    }
    $admin_id = $_SESSION['identification'];
    $query = "SELECT * FROM `admin` WHERE `id`='$admin_id'";
    $result = mysqli_query($conn,$query);

    if($result){
        $row = mysqli_fetch_assoc($result);
        $admin_name = $row['username'];
    }

    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }else{
        header('location:./../');
    }

    if(isset($_POST['submit'])){
        if($_POST['page'] == 'logout'){
            unset($_SESSION['identification']);
            $_SESSION['authenticated'] = false;
            unset($_SESSION['authenticated']);
            session_unset();
            session_destroy();
            header('location:./../../../');
        }
    }

    if(isset($_POST['update'])){
        //update the review
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../../styles/style.css">
    <link rel="stylesheet" href="./../../styles/review-add.css">
    <title>Admin | Dashboard</title>
</head>
<body>
    <div class="container">
        <div class="nav-bar">
            <div class="links">
                <form action="./../../" method="post">
                    <input type="hidden" name="page" value="home">
                    <input type="submit" value="Home" name="submit">
                </form>
                <form action="./../../messages/" method="post">
                    <input type="hidden" name="page" value="messages">
                    <input type="submit" value="Messages" name="submit">
                </form>
                <form action="./../../reviewers/" method="post">
                    <input type="hidden" name="page" value="reviewers">
                    <input type="submit" value="Reviewers" name="submit">
                </form>
                <form action="./../../services/" method="post">
                    <input type="hidden" name="page" value="services">
                    <input type="submit" value="Services" name="submit">
                </form>
                <form action="./../../companies/" method="post">
                    <input type="hidden" name="page" value="companies">
                    <input type="submit" value="Companies" name="submit">
                </form>
            </div>
            <div class="info">
                <span>Admin  <?=$admin_name?></span>
                <form action="" method="post">
                    <input type="hidden" name="page" value="logout">
                    <input type="submit" value="logout" name="submit">
                </form>
            </div>
        </div>
        <div class="content">
            <div class="head-texts">
                <span>Update reviewer.</span>
            </div>
            <div class="form">
                <form action="update.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?=$id?>">
                    <input type="text" name="name" id="" placeholder="Enter the name" required>
                    <label for="">company image</label>
                    <input type="file" name="image" id="" required>
                    <input type="submit" value="update" name="update">
                </form>
            </div>
        </div>
        <div class="footer">
            <span>a Developer's Mind work</span>
        </div>
    </div>
</body>
</html>
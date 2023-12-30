<?php
    require_once('./../connection/connection.php');
    session_start();
    if(!isset($_SESSION['identification']) || !isset($_SESSION['authenticated'])){
        header('location:./../../../');
    }
    if(!isset($_POST['page'])){
        header('location:./../');
    }
    if(isset($_POST['page'])){
        if($_POST['page']=='Add'){
            header('location:./new/');
        }
    }
    $admin_id = $_SESSION['identification'];
    $query = "SELECT * FROM `admin` WHERE `id`='$admin_id'";
    $result = mysqli_query($conn,$query);

    if($result){
        $row = mysqli_fetch_assoc($result);
        $admin_name = $row['username'];
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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../styles/style.css">
    <link rel="stylesheet" href="./../styles/review.css">
    <title>Admin | Dashboard</title>
</head>
<body>
    <div class="container">
        <div class="nav-bar">
            <div class="links">
                <form action="./../" method="post">
                    <input type="hidden" name="page" value="home">
                    <input type="submit" value="Home" name="submit">
                </form>
                <form action="./../messages/" method="post">
                    <input type="hidden" name="page" value="messages">
                    <input type="submit" value="Messages" name="submit">
                </form>
                <form action="./../reviewers/" method="post">
                    <input type="hidden" name="page" value="reviewers">
                    <input type="submit" value="Reviewers" name="submit">
                </form>
                <form action="./../services/" method="post">
                    <input type="hidden" name="page" value="services">
                    <input type="submit" value="Services" name="submit">
                </form>
                <form action="./../companies/" method="post">
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
                <span>Services.</span>
            </div>
            <div class="action">
                <div class="add-new">
                    <form action="./new/index.php" method="post">
                        <input type="hidden" name="action" value="service">
                        <input type="submit" value="+ Add new service" name="service">
                    </form>
                </div>
            </div>
            <div class="list">
                <?php
                    $reviewQuery = "SELECT * FROM `services` WHERE 1";
                    $reviewResult = mysqli_query($conn,$reviewQuery);

                    if($reviewResult){
                        if(mysqli_num_rows($reviewResult) >0){
                            while($review = mysqli_fetch_assoc($reviewResult)){
                                echo '
                                <div class="review">
                                    <div>
                                        <span>'.$review['id'].'</span>
                                    </div>
                                    <div>
                                        <span>'.$review['name'].'</span>
                                    </div>
                                    <div>
                                        <span>'.$review['price'].'</span>
                                    </div>
                                    <div class="image">
                                        <a href="./edit/index.php?id='.$review['id'].'">
                                            <img src="./../icons/view.png">
                                        </a>
                                        <a href="./delete/index.php?id='.$review['id'].'">
                                            <img src="./../icons/trash.png">
                                        </a>
                                    </div>
                                </div>
                                ';
                            }
                        }else{
                            echo '<span>no content to show!</span>';
                        }
                    }else{
                        echo '<span>failed to get contents now</span>';
                    }
                ?>
            </div>
        </div>
        <div class="footer">
            <span>a Developer's Mind work</span>
        </div>
    </div>
</body>
</html>
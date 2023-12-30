<?php
    require_once('./connection/connection.php');
    session_start();
    if(!isset($_SESSION['identification']) || !isset($_SESSION['authenticated'])){
        header('location:./../../');
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
            header('location:./../../');
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="./styles/home.css">
    <title>IT Sam | Dashboard</title>
</head>
<body>
    <div class="container">
        <div class="nav-bar">
            <div class="links">
                <form action="./" method="post">
                    <input type="hidden" name="page" value="home">
                    <input type="submit" value="Home" name="submit">
                </form>
                <form action="./messages/" method="post">
                    <input type="hidden" name="page" value="messages">
                    <input type="submit" value="Messages" name="submit">
                </form>
                <form action="./reviewers/" method="post">
                    <input type="hidden" name="page" value="reviewers">
                    <input type="submit" value="Reviewers" name="submit">
                </form>
                <form action="./services/" method="post">
                    <input type="hidden" name="page" value="services">
                    <input type="submit" value="Services" name="submit">
                </form>
                <form action="./companies/" method="post">
                    <input type="hidden" name="page" value="companies">
                    <input type="submit" value="Companies" name="submit">
                </form>
            </div>
            <div class="info">
                <span>Owner  <?=$admin_name?></span>
                <form action="" method="post">
                    <input type="hidden" name="page" value="logout">
                    <input type="submit" value="logout" name="submit">
                </form>
            </div>
        </div>
        <div class="content">
            <div class="head-texts">
                <span>IT Sam dashboard</span>
            </div>
            <div class="informations">
                <div class="message">
                    <span>Messages</span>
                    <form action="./messages/" method="post">
                        <input type="submit" value="View All" name="page">
                    </form>
                </div>
                <div class="message">
                    <span>payments</span>
                    <form action="./payments/" method="post">
                        <input type="submit" value="View" name="page">
                    </form>
                </div>
                <div class="reviewers">
                    <span>reviewers</span>
                    <form action="./reviewers/" method="post">
                        <input type="submit" value="View All" name="page">
                        <input type="submit" value="Add" name="page">
                    </form>
                </div>
                <div class="services">
                    <span>services</span>
                    <form action="./services/" method="post">
                        <input type="submit" value="View All" name="page">
                        <input type="submit" value="Add" name="page">
                    </form>
                </div>
                <div class="companies">
                    <span>companies</span>
                    <form action="./companies/" method="post">
                        <input type="submit" value="View All" name="page">
                        <input type="submit" value="Add" name="page">
                    </form>
                </div>
                <div class="report">
                    <span>report</span>
                    <form action="./report/" method="post">
                        <input type="submit" value="Generate" name="page">
                        <input type="submit" value="Change settings" name="page">
                    </form>
                </div>
            </div>
        </div>
        <div class="footer">
            <span>My dashboard</span>
        </div>
    </div>
</body>
</html>
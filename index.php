<?php
require_once('./backend/connection.php');
$popUp=false;
if(isset($_GET['serviceId'])){
    $popUp=true;
    $serviceId = $_GET['serviceId'];
}else{
    $popUp=false;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./styles/main.css">
    <link rel="stylesheet" href="./styles/nav-controller.css">
    <link rel="stylesheet" href="./styles/section-controller.css">
    <link rel="stylesheet" href="./styles/footer-controller.css">
    <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
    <title>Tresor IHIRWE</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="mobile-links">
                <div class="close">
                    <img src="./images/logo/close.png" alt="" class="logo">
                </div>
                <ul>
                    <li><a href="" title="home">home</a></li>
                    <li><a href="./about/" title="about">about</a></li>
                    <li><a href="./contact/" title="contact">contact</a></li>
                    <li><a href="./biography/" title="biography">biography</a></li>
                    <li><a href="./reviewers/" title="reviewers">reviewers</a></li>
                </ul>
                <div class="social-media">
                    <div class="instagram">
                        <a href="https://instagram.com/tresorihirwe">
                            <img src="./images/logo/instagramlogo.png" alt="" class="logo">
                        </a>
                    </div>
                    <div class="twitter">
                        <a href="https://twitter.com/TresorIHIRWE">
                            <img src="./images/logo/x.png" alt="" class="logo">
                        </a>
                    </div>
                    <div class="tik-tok">
                        <a href="https://tiktok.com/@tresorihirwe">
                            <img src="./images/logo/tiktok.png" alt="" class="logo">
                        </a>
                    </div>
                </div>
            </div>
            <nav class="nav-bar">
                <div class="logo">
                    <span>IT SAM.</span>
                </div>
                <div class="links">
                    <ul>
                        <li><a href="" title="home">home</a></li>
                        <li><a href="./about/" title="about">about</a></li>
                        <li><a href="./contact/" title="contact">contact</a></li>
                        <li><a href="./biography/" title="biography">biography</a></li>
                        <li><a href="./reviewers/" title="reviewers">reviewers</a></li>
                    </ul>
                </div>
                <div class="social-media-view">
                    <img src="./images/logo/forward.png" alt="" class="logo">
                </div>
                <div class="social-media">
                    <div class="instagram">
                        <a href="https://instagram.com/tresorihirwe">
                            <img src="./images/logo/instagramlogo.png" alt="" class="logo">
                        </a>
                    </div>
                    <div class="twitter">
                        <a href="https://twitter.com/TresorIHIRWE">
                            <img src="./images/logo/x.png" alt="" class="logo">
                        </a>
                    </div>
                    <div class="tik-tok">
                        <a href="https://tiktok.com/@tresorihirwe">
                            <img src="./images/logo/tiktok.png" alt="" class="logo">
                        </a>
                    </div>
                </div>
                <div class="burger">
                    <img src="./images/logo/menu.png" alt="" class="logo">
                </div>
            </nav>
        </div>
        <div class="content">
            <div class="services">
                <?php 

                    $query = "SELECT * FROM `services` WHERE 1";
                    $result = mysqli_query($conn,$query);
                    if($result){
                        if(mysqli_num_rows($result)){
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '

                                <div class="service">
                                    <img src="./uploads/'.$row['imageLink'].'" alt="" class="back-ground">
                                    <button class="pay-service"><a href="./index.php?serviceId='.$row['id'].'">Pay</a></button>
                                    <div class="name-price">
                                        <span>'.$row['name'].'</span>
                                        <span class="price">
                                            $'.$row['price'].'
                                        </span>
                                    </div>
                                </div>

                                ';
                            }
                        }
                    }
                
                ?>
            </div>
            <?php
            if($popUp){
                echo "
                <div class='confirm'>
                <h1>Confirm Payment</h1>
                <span>read before confirmation</span>
                <p>the form below is the going to get your data. your data is stored in our databases. the telephone numbers you provide withus is the one we send you the negotiation link so, make sure to provide the right one.</p>
                <form action='./pay/' method='post'>
                    <input type='hidden' name='serviceId' value='".$serviceId."'>
                    <input type='text' name='names' required placeholder='names'>
                    <input type='tel' name='telephone' required placeholder='telephone'>
                    <input type='submit' value='Confirm' name='submit'>
                </form>
            </div>
                ";
            } 
            ?>
        </div>
        <div class="footer">
            <div class="top">
                <p>
                As a marketer I’ve also helped companies like 1 55 AM, ROCKY ENTERTNEMENT, SEKA MINISTRIES, and KOS grow their revenue.
                </p>
            </div>
            <div class="lower">
                <div class="links">
                    <ul>
                        <li><a href="" title="home">home</a></li>
                        <li><a href="./about/" title="about">about</a></li>
                        <li><a href="./contact/" title="contact">contact</a></li>
                        <li><a href="./biography/" title="biography">biography</a></li>
                        <li><a href="./reviewers/" title="reviewers">reviewers</a></li>
                    </ul>
                </div>
                <span>&copy; IT SAM 2024</span>
                <span class="creator">created by Developer's Mind</span>
            </div>
        </div>
    </div>
</body>
<script src="./scripts/nav.controller.js"></script>
</html>
<?php
require_once('./../backend/connection.php');
$sql="SELECT * FROM `reviews`";
$result=mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./../styles/main.css">
    <link rel="stylesheet" href="./../styles/nav-controller.css">
    <link rel="stylesheet" href="./../styles/review-controller.css">
    <link rel="stylesheet" href="./../styles/footer-controller.css">
    <link rel="shortcut icon" href="./../images/favicon.png" type="image/x-icon">
    <title>My Reviewers</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="mobile-links">
                <div class="close">
                    <img src="./../images/logo/close.png" alt="" class="logo">
                </div>
                <ul>
                    <li><a href="./../" title="home">home</a></li>
                    <li><a href="./../about/" title="about">about</a></li>
                    <li><a href="./../contact/" title="contact">contact</a></li>
                    <li><a href="./../biography/" title="biography">biography</a></li>
                    <li><a href="./../reviewers/" title="reviewers">reviewers</a></li>
                </ul>
                <div class="social-media-view">
                    <img src="./images/logo/forward.png" alt="" class="logo">
                </div>
                <div class="social-media">
                    <div class="instagram">
                        <a href="https://instagram.com/tresorihirwe">
                            <img src="../images/logo/instagramlogo.png" alt="" class="logo">
                        </a>
                    </div>
                    <div class="twitter">
                        <a href="https://twitter.com/TresorIHIRWE">
                            <img src="../images/logo/x.png" alt="" class="logo">
                        </a>
                    </div>
                    <div class="tik-tok">
                        <a href="https://tiktok.com/@tresorihirwe">
                            <img src="../images/logo/tiktok.png" alt="" class="logo">
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
                        <li><a href="./../" title="home">home</a></li>
                        <li><a href="./../about/" title="about">about</a></li>
                        <li><a href="./../contact/" title="contact">contact</a></li>
                        <li><a href="./../biography/" title="biography">biography</a></li>
                        <li><a href="./../reviewers/" title="reviewers">reviewers</a></li>
                    </ul>
                </div>
                <div class="social-media-view">
                    <img src="./../images/logo/forward.png" alt="" class="logo">
                </div>
                <div class="social-media">
                <div class="instagram">
                        <a href="https://instagram.com/tresorihirwe">
                            <img src="./../images/logo/instagramlogo.png" alt="" class="logo">
                        </a>
                    </div>
                    <div class="twitter">
                        <a href="https://twitter.com/TresorIHIRWE">
                            <img src="./../images/logo/x.png" alt="" class="logo">
                        </a>
                    </div>
                    <div class="tik-tok">
                        <a href="https://tiktok.com/@tresorihirwe">
                            <img src="./../images/logo/tiktok.png" alt="" class="logo">
                        </a>
                    </div>
                </div>
                <div class="burger">
                    <img src="./../images/logo/menu.png" alt="" class="logo">
                </div>
            </nav>
        </div>
        <div class="content">
            <div class="reviewers">
                    <?php
                        if($result){
                            if(mysqli_num_rows($result)>0){
                                while($review=mysqli_fetch_assoc($result)){
                                    echo'
                                    <div class="review">
                                        <img src="./../images/logo/quoteOne.png" alt="" class="quote">
                                        <div class="cont">
                                            <div class="user">
                                                <img src="./../uploads/'.$review['profilelink'].'" alt="" class="user">
                                            </div>
                                            <div class="review-text">
                                                <span>'.$review['name'].'</span>
                                                <p>'.$review['content'].'</p>
                                            </div>
                                        </div>
                                        <div class="signature">
                                        <img src="./../uploads/'.$review['signaturelink'].'" alt="" class="signature">
                                        </div>
                                        <img src="./../images/logo/quoteTwo.png" alt="" class="quote">
                                    </div>
                                    ';
                                }
                            }
                        }
                    ?>
            </div>
            <div class="companies">
                <span>They work with Me.</span>
                <div class="companies-wrapper">
                    <?php
                        $sql2="SELECT * FROM `company`";
                        $result2=mysqli_query($conn,$sql2);
                        
                        if($result2){
                            if(mysqli_num_rows($result2)>0){
                                while($review2=mysqli_fetch_assoc($result2)){
                                    echo'
                                        <img src="./../uploads/'.$review2['image'].'" alt="" title="'.$review2['name'].'">
                                    ';
                                }
                            }
                        }
                                
                    ?>
                </div>
            </div>
            <div class="appretiations">
                <p><h6> </p>
                    </h6></div>
        </div>
        <div class="footer">
            <div class="top">
                <p>
                All brands, companies and professionals that appear on the <a href="https://tresorihirwe.com">tresorihirwe.com </a> <br></br> website and in my social network channels are carefully tested and chosen by me and my team of professional marketers.
                </p>

            </div>
            <div class="lower">
                <div class="links">
                    <ul>
                        <li><a href="./../" title="home">home</a></li>
                        <li><a href="./../about/" title="about">about</a></li>
                        <li><a href="./../contact/" title="contact">contact</a></li>
                        <li><a href="./../biography/" title="biography">biography</a></li>
                        <li><a href="./../reviewers/" title="reviewers">reviewers</a></li>
                    </ul>
                </div>
                <span>&copy; IT SAM 2024</span>
                <span class="creator">created by Developer's Mind</span>
            </div>
        </div>
    </div>
</body>
<script src="./../scripts/nav.controller.js"></script>
</html>
<?php



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
    <link rel="stylesheet" href="./../styles/contact-controller.css">
    <link rel="stylesheet" href="./../styles/footer-controller.css">
    <link rel="shortcut icon" href="./../images/favicon.png" type="image/x-icon">
    <title>Contact Me</title>
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
            <div class="contact">
                <div class="head">
                    <span>HIRE ME</span>
                    <div class="head-words">
                        <p>
                        <h5>Please remember to write down your email in message</h5>
                        </p>
                    </div>
                </div>
                <div class="form">
                    <form action="./../backend/contact.php" method="post">
                        <div class="top">
                            <input type="number" name="telephone" id="" placeholder="Telephone">
                            <input type="text" name="names" id="" placeholder="Names">
                        </div>
                        <div class="middle">
                            <textarea name="message" id="" cols="30" rows="10" placeholder="Message goes here..."></textarea>
                        </div>
                        <div class="bottom">
                            <input type="submit" value="Get in touch" name="submit">
                        </div>
                    </form>
                </div>
                <div class="bottom-appretiations">
                    <span><h1>Please remember to write down your email in your message</h1></span>
                </div>
            </div>
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
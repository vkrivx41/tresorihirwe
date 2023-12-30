<?php

    if(!isset($_POST['submit'])){
        header('location:./../');
    }
    $names = $_POST['names'];
    $telephone = $_POST['telephone'];
    $serviceid = $_POST['serviceId'];

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
    <link rel="stylesheet" href="./../styles/main.css">
    <link rel="stylesheet" href="./../styles/nav-controller.css">
    <link rel="stylesheet" href="./../styles/pay-controller.css">
    <link rel="stylesheet" href="./../styles/footer-controller.css">
    <link rel="shortcut icon" href="./../images/favicon.png" type="image/x-icon">
    <title>IT SAM</title>
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
                        <a href="https://instagram.com/itsam">
                            <img src="./../images/logo/instagram.png" alt="" class="logo">
                        </a>
                    </div>
                    <div class="twitter">
                        <a href="https://twitter.com/itsam">
                            <img src="./../images/logo/twitter.png" alt="" class="logo">
                        </a>
                    </div>
                    <div class="tik-tok">
                        <a href="https://tiktok.com/itsam">
                            <img src="./../images/logo/messenger.png" alt="" class="logo">
                        </a>
                    </div>
                </div>
                <div class="burger">
                    <img src="./../images/logo/menu.png" alt="" class="logo">
                </div>
            </nav>
        </div>
        <div class="content">
            <div class="content-header">
                <span class="greetings">Hey</span><span class="names"><?php echo $_POST['names'] ?></span>&nbsp;Choose your payment method!<span></span>
            </div>
            <form action="./paymentProcessor.php" method="post">
                <input type="hidden" name="names" value="<?=$names?>">
                <input type="hidden" name="telephone" value="<?=$telephone?>">
                <input type="hidden" name="serviceId" value="<?=$serviceid?>">
            <div class="payment-methods">
            <div class="payment">
                    <input type="radio" name="payment_type" id="" class="radios" value="momo"required>
                    <span>M-Money.</span>
                </div>
                <div class="payment">
                    <input type="radio" name="payment_type" id="" class="radios" value="Chipper"required>
                    <span>Chipper</span>
                </div>
                <div class="payment">
                    <input type="radio" name="payment_type" id="" class="radios" value="Equity"required>
                    <span>Equity</span>
                </div>
                <div class="payment">
                    <input type="radio" name="payment_type" id="" class="radios" value="Spenn"required>
                    <span>Spenn.</span>
                </div>
                <div class="payment">
                    <input type="radio" name="payment_type" id="" class="radios" value="BPR/KCB" required> 
                    <span>BPR/KCB</span>
                </div>
            </div>
            <div class="submit">
                <input type="submit" value="Pay" name="submit">
            </div>
        </div>
        </form>
        <div class="footer">
            <div class="top">
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta dolorum sint similique, autem rem ad ab iure odit accusantium sunt.
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
                <span>&copy; IT SAM 2023</span>
                <span class="creator">created by Developer's Mind</span>
            </div>
        </div>
    </div>
</body>
<script src="./../scripts/nav.controller.js"></script>
</html>
<?php

    require_once('./../backend/connection.php');

    if(isset($_POST['submit'])){
        $names =$_POST['names'];
        $telephone =$_POST['telephone'];
        $payment_type =$_POST['payment_type'];
        $serviceId =$_POST['serviceId'];
        $time= date('y:m:d:h:m:s');
        $id = uniqid();

        $query = "INSERT INTO `payments` (`paymentId`,`payer`,`telephone`,`service`,`paymentMethod`,`approved`,`time`) VALUES('$id','$names','$telephone','$serviceId','$payment_type','0','$time')";
        $result = mysqli_query($conn,$query);

        if(!$result){
            header('location:./../backend/error.php');
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="./../images/favicon.png" type="image/x-icon">
    <title>IT SAM</title>
</head>
<body>
    <div class="container">
        <?php 
        if(isset($_POST['payment_type'])){
            if($_POST['payment_type'] == 'Spenn'){
                echo '
                 <div class="spenn card">
                    <img src="./../images/Spenn.jpg">
                    <a href="./../">Home</a>
                 </div>
                ';
            }
            if($_POST['payment_type'] == 'Equity'){
                echo '
                 <div class="equity card">
                    <img src="./../images/equity.png">
                    <span>account no : 4003100975892</span>
                    <span>account Holder : Samuel Tresor IHIRWE</span>
                    <a href="./../">Home</a>
                 </div>
                ';
            }
            if($_POST['payment_type'] == 'momo'){
                echo '
                 <div class="momo card">
                    <img src="./../images/momo.jpeg">
                    <span>code : *182*8*1*180666#</span>
                    <span> name : Samuel Tresor</span>
                    <a href="./../">Home</a>
                 </div>
                ';
            }
            if($_POST['payment_type'] == 'Chipper'){
                echo '
                 <div class="Chipper card">
                    <img src="./../images/Chipper.png">
                    <a href="https://chipper.me/@SamuelTresor">pay With Chipper</a>
                    <a href="./../">Home</a>
                 </div>
                ';
            }
            if($_POST['payment_type'] == 'BPR/KCB'){
                echo '
                 <div class="bpr card">
                    <img src="./../images/bpr.png">
                    <span>account no : 4491436479</span>
                    <span>account Holder : Samuel Tresor IHIRWE</span>
                    <a href="./../">Home</a>
                 </div>
                ';
            }
        }
        ?>
    </div>
</body>
</html>
<?php
    require_once('./../connection/connection.php');
    $from = $_POST['fromDate']??'';
    $till = $_POST['tillDate']??'';;
    
    $sql="SELECT `paymentId`,`payer`,`telephone`,`service`,`name`,`paymentMethod`,`time`,`approved`,CONVERT(`time`,date) AS `date`
          FROM `payments`
          INNER JOIN `services`
          ON `payments`.`service`=`services`.`id`
          WHERE 1
        ";

    $result = mysqli_query($conn,$sql);

    if($result){
        echo '
        <style>
        *{
            font-family:"poppins";
        }
            button{
                border:none;
                background:none;
                background-color:rgb(0,0,30);
                color:white;
                padding:10px 20px;
                cursor:pointer;
                margin:20px;
            }
            h1{
                font-weight:300;
                font-size:1.3em;
                color:rgb(0,0,30);
            }
            table{
                padding:5px;
                border:1px solid rgb(0,0,30);
            }
            td{
                padding:10px;
                border-right:1px solid rgb(0,0,30);
            }
            span{
                color:rgb(0,0,30);
                font-size:.7em;
                font-weight:300;
            }
            a{
                color:white;
                text-decoration:none;
            }
            .dates{
                width:50%;
                height:40px;
            }
            .dates>form{
                display:flex;
                flex-direction:row;
                justify-content:space-between;
                align-items:flex-end;
                margin:0 20px;
                width:100%;
                height:100%;
            }
            .dates>form>input{
                outline:none;
                border-radius:0;
                border:none;
                border-bottom:2px solid rgb(0,0,30);
                height:100%;
                padding:0 10px;
            }
            .dates>form>input[type="submit"]{
                border:none;
                background:none;
                background-color:rgb(0,0,30);
                color:white;
                padding:10px 20px;
                cursor:pointer;
                align-self:flex-end;
            }
        </style>
        <button onclick="window.print()">print</button>
        <button><a href="./../">Home</a></button>
        <div class="dates">
            <form action="" method="POST">
                <span>From</span><input type="date" name="fromDate" placeholder="From">
                <span>Till</span><input type="date" name="tillDate" placeholder="Till">
                <input type="submit" name="submit" value="Generate">
            </form>
        </div>
        <h1>ITSAM payment report</h1>
        <table>
            <thead>
                <tr>
                    <td>paymentId</td>
                    <td>payer</td>
                    <td>telephone</td>
                    <td>serviceId</td>
                    <td>name</td>
                    <td>paymentMethod</td>
                    <td>time</td>
                    <td>approved</td>
                </tr>
            </thead>
            <tbody>
        ';
        if($till != '' and $till != ''){
            if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_assoc($result)){
                    if($row['approved']==-1){
                        $approval = 'No';
                    }else{
                        if($row['approved']==0){
                            $approval = 'Pending';
                        }
                        if($row['approved']==1){
                            $approval = 'Yes';
                        }
                    }
                    if($row['date']>=$from and $row['date']<=$till){
                        echo "
                        <tr>
                            <td>".$row['paymentId']."</td>
                            <td>".$row['payer']."</td>
                            <td>".$row['telephone']."</td>
                            <td>".$row['service']."</td>
                            <td>".$row['name']."</td>
                            <td>".$row['paymentMethod']."</td>
                            <td>".$row['time']."</td>
                            <td>".$approval."</td>
                        </tr>
                        ";
                    }else{
                        continue;
                    }
                }
                
            }
        }else{
            echo "
            <td colspan='8'>Please specify the time frame to capture</td>
            ";
        }
        echo "
                </tbody>
                </table>
                <span>powerd by Developer's Mind</span>
                ";
    }
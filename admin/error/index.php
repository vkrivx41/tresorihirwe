<?php

    if(!isset($_GET['error'])){
        header('location:./');
    }
    echo $_GET['error'];
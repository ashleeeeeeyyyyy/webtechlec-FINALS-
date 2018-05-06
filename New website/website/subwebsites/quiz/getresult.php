<?php
    session_start();

    if(!isset($_SESSION['username'])){
        header('Location: ../../index.php');
    }
    include '/getquiz.php';

    include '/showresult.php';
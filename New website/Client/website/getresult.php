<?php
    session_start();

    if(!isset($_SESSION['username'])){
        header('Location: ./index.php');
    }
    include './subwebsites/Includes/sidenav.php';
    include './subwebsites/Includes/header.php';
    include 'subwebsites/Includes/nav.php';
    include './subwebsites/quiz/getquiz.php';

    include './subwebsites/quiz/showresult.php';

    include './subwebsites/Includes/footer.php';
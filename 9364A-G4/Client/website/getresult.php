<?php

    include 'subwebsites/Includes/require_session.php';
    include './subwebsites/Includes/sidenav.php';
    include './subwebsites/Includes/header.php';
    include 'subwebsites/Includes/nav.php';
    if(isset($_GET['error'])==true){
        echo '<div class = "card">';
        echo '<p class = "center-align" style = "color:red; font-size:25px"> Please take the quiz first before viewing the results. <a href = "./quiz.php">Click here </a> to take the quiz';
        echo '</div>';
    }else{
        include './subwebsites/quiz/getquiz.php';
        include './subwebsites/quiz/showresult.php';
    }
    include './subwebsites/Includes/footer.php';
<?php
    include 'subwebsites/Includes/require_session.php';

    include 'subwebsites/Includes/header.php';
    include 'subwebsites/Includes/sidenav.php';
    include 'subwebsites/Includes/nav.php';
    if(isset($_GET['error'])==true){
        echo '<div class = "card">';
        echo '<p class = "center-align" style = "color:red; font-size:25px"> You have already taken the quiz </p>';
        echo '</div>';
    }else{
        include 'subwebsites/quiz/getquiz.php';
        include 'subwebsites/quiz/showquiz.php';
    }

    include 'subwebsites/Includes/footer.php';

    



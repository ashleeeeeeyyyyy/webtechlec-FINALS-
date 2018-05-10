<?php
    include 'subwebsites/Includes/require_session.php';

    include 'subwebsites/Includes/header.php';
    include 'subwebsites/Includes/sidenav.php';
    include 'subwebsites/Includes/nav.php';
    if(isset($_GET['changesuccess'])){
        echo '<p class = "center-align" style = "color:green; font-size:25px"> Change Password success </p>';
    }else if(isset($_GET['changeerror'])){
        echo '<p class = "center-align" style = "color:red; font-size:25px"> Error input password </p>';
    }
    include 'subwebsites/Profile/changepassword.html';
    include 'subwebsites/Profile/showupload.php';
    include 'subwebsites/Includes/footer.php';
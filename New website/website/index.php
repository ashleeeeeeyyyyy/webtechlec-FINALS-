<?php
    session_start();
    include "subwebsites/Includes/header.php";
    if(!isset($_SESSION['username'])){
        include "signup.php";
    } else {
        include "menu.html";
    }

    include "subwebsites/Includes/footer.php";
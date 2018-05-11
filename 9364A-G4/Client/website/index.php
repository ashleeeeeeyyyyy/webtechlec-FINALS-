<?php
    session_start();
    include "subwebsites/Includes/header.php";
    if(!isset($_SESSION['username'])){

        if(isset($_GET['error'])==true){
            
            echo '<p class = "center-align" style = "color:red; font-size:25px"> Wrong credentials </p>';
        }else if(isset($_GET['success'])==true){
            echo '<p class = "center-align" style = "color:green; font-size:25px"> Successfully Registered </p>';
        }
        include "signup.php";
    } else {
        include "menu.html";
    }

    include "subwebsites/Includes/footer2.php";
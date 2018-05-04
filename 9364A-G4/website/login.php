<?php
    $db = new mysqli("p:localhost", "root", "", "course_website");

    if(isset($_POST['login'])){
        session_start();
        $userName = mysqli_real_escape_string($db, $_POST['user_name_log']);
        $password = mysqli_real_escape_string($db, $_POST['pass_log']);

        $query = "SELECT user_name, password from user WHERE user_name = '$userName' AND password = '$password'";
        $result = mysqli_query($db, $query);
        if(mysqli_num_rows($result) == 1){
            $_SESSION['message'] = "You are now login";
            $_SESSION['username'] = $_POST['user_name_log'];
            $a = $_SESSION['username'];
            header("location: index.php");
        }else{
            echo "Wrong information";
        }
    }

<?php
    $db = new mysqli("p:localhost", "root", "", "course_website");
    session_start();
    if(isset($_POST['change'])){
        $userName = $_SESSION['username'];
        $oldPass = mysqli_real_escape_string($db, $_POST['old_password']);
        $newPass = mysqli_real_escape_string($db, $_POST['new_password']);
        $confirmPass = mysqli_real_escape_string($db, $_POST['confirm_password']);
        $query = "SELECT user_name, password from user WHERE user_name = '$userName' AND password = '$oldPass'";
        $result = mysqli_query($db, $query);
        if(mysqli_num_rows($result) == 1){
            if($newPass == $confirmPass){
                $query = "UPDATE user SET password ='$newPass' WHERE user_name = '$userName'";
                mysqli_query($db, $query);

            }
        }else{
            echo "Incorrect Password";
        }
    }
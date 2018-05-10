<?php
include 'includes/db.php';
include '../../subwebsites/Includes/require_session.php';
$username = $_SESSION['username'];
$query = "SELECT * from quiz";
$result = mysqli_query($db, $query);
if(isset($_POST['submit'])){

    for($i = 0; $i <= mysqli_num_rows($result); $i++){
        if(isset($_POST["$i"])){
            $choice =  $_POST["$i"];
            $query = "INSERT INTO user_quiz(user_name, quizNo, user_choice) VALUES('$username','$i', '$choice')";
            mysqli_query($db, $query);
        }else{
            $query = "INSERT INTO user_quiz(user_name, quizNo, user_choice) VALUES('$username','$i', null)";
            mysqli_query($db, $query);
        }
    }
}
header("location: ../../getresult.php");
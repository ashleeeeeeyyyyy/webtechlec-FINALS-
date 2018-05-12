<?php 
    include 'includes/db.php';
    session_start();
    $username = $_SESSION['username'];
    $query = "DELETE FROM user_quiz WHERE user_name = '$username'";
    $result = mysqli_query($db, $query);
    header("location: ../../quiz.php");
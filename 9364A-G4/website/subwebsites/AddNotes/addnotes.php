<?php
    if(isset($_POST["notes"])){
        $db = new mysqli("p:localhost", "root", "", "course_website");
        session_start();
        $notes = $_POST["notes"];
        $userName = $_SESSION['username'];
        $query = "INSERT INTO notes(user_notes, user_name) VALUES('$notes', '$userName')";
        mysqli_query($db, $query);
        header("Location: ../../addnotes.php");
}
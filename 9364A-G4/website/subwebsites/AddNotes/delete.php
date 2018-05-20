<?php
        $db = new mysqli("p:localhost", "root", "", "course_website");
        $note = $_POST["notes"];
        $query = "DELETE FROM `notes` WHERE `user_notes`='$note';";
        mysqli_query($db, $query);
        header("Location: ../../addnotes.php");

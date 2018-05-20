<style>
    p{
        font-size: 20px;
    }
</style>
<form action = "./subwebsites/AddNotes/addnotes.php" method = "post">
    <input type = "text" name = "notes">
    <button type = "submit">Add notes</button>
</form>


<?php
    $username = $_SESSION["username"];
    $query = "SELECT user_notes from notes where user_name = '$username'";
    $stmt = $db->stmt_init();
    $stmt->prepare($query);
    $stmt->execute();
    $stmt->bind_result($userNotes);  

        $note = [];

    while($stmt->fetch()){
        $note[] = $userNotes;
    }

    $stmt->close();

    if(count($note) != 0){
        for($i = 0; $i < sizeof($note); $i++){
            $a = $note[$i];
            echo "<form action = './subwebsites/AddNotes/delete.php' method = 'post'>";
            echo "<p>$a</p>";
            echo "<input type = 'hidden' name = 'notes' value = '$a'>";
            echo "<button type = 'submit'> Delete </button>";
            echo "</form>";
            
        }   
    }
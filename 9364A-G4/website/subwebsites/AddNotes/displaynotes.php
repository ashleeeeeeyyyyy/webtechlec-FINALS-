<style>
    #del{
        position: absolute;
        bottom: 0;
        right: 0;
    }
    #text{
        height: 150px;
        width: 200px;
    }
    #add{
        height: 160px;
        width:inherit;
        background-color: yellow;
        display: block;
        padding: 16px;
        margin-top: 10px;
        margin-bottom: 10px;
        box-shadow: 3px 3px 2px 0px rgba(33,33,33,.7);
    }
    #added{
        height: 200px;
        width:200px;
        background-color: lightgreen;
        display: block;
        padding: 16px;
        margin: 10px;
        box-shadow: 3px 3px 2px 0px rgba(33,33,33,.7);
        transform: rotate(-3deg);  
    }
    #added:nth-of-type(2n+0){
        height: 200px;
        width:200px;
        background-color: pink;
        display: block;
        padding: 16px;
        margin: 10px;
        box-shadow: 3px 3px 2px 0px rgba(33,33,33,.7);
        transform: rotate(-2deg);  
    }
    #added:nth-of-type(3n+0){
        height: 200px;
        width:200px;
        background-color: lightblue;
        display: block;
        padding: 16px;
        margin: 10px;
        box-shadow: 3px 3px 2px 0px rgba(33,33,33,.7);
        transform: rotate(3deg);  
    }
    #added:nth-of-type(4n+0){
        height: 200px;
        width:200px;
        background-color: lightcoral;
        display: block;
        padding: 16px;
        margin: 10px;
        box-shadow: 3px 3px 2px 0px rgba(33,33,33,.7);
        transform: rotate(-4deg);  
    }
     #added:nth-of-type(5n+0){
        height: 200px;
        width:200px;
        background-color: lightgray;
        display: block;
        padding: 16px;
        margin: 10px;
        box-shadow: 3px 3px 2px 0px rgba(33,33,33,.7);
        transform: rotate(4deg);  
    }
    #added:hover {
        transform: scale(1.1);
        transition: .15s linear;
    }
    
</style>
<div class="row">
    <div class="col s4"></div>
    <form action = "./subwebsites/AddNotes/addnotes.php" method = "post" id="add" class="col s4 center-align">
        <input type="text" name = "notes">
        <button type = "submit" class="waves-effect waves-teal btn-flat">Add note</button>
    </form>
    <div class="col s4"></div>
</div>
<div class="row">
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
            echo "<form action = './subwebsites/AddNotes/delete.php' method = 'post' id='added'class='col s2'>";
            echo "<p>$a</p>";
            echo "<input type = 'hidden' name = 'notes' value = '$a' id='text'>";
            echo "<button type = 'submit'class='waves-effect waves-teal btn-flat' id='del'> Delete </button>";
            echo "</form>";
            
        }   
    }
?>    
</div>    
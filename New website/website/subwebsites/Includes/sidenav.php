<?php 
    $db = new mysqli("p:localhost", "root", "", "course_website");
    $userName = $_SESSION['username'];
    $query = "SELECT concat(first_name,' ',last_name) as name from user WHERE user_name = '$userName'";
    $result = mysqli_query($db, $query);
    $value = mysqli_fetch_object($result);
    $name = $value->name;
?>
<ul class="sidenav" id="slide-out">
    <li>
        <div class="user-view">
            <div class="background">
                <img src="https://i.pinimg.com/originals/97/05/8f/97058f3862a301c176d0a7dae0edba2a.jpg">
            </div>
            <a><span class = "black-text name"><i class = "large material-icons">account_circle</i></span></a>
            <a><span class = "white-text name"><?php echo "Hello $name!"; ?></span></a>
    </li>
</div>
    <li>
        <a href="#">Profile</a>
    </li>
    <li>
        <a href="./index.html">Home</a>
    </li>
    <li>
        <a href="./quiz.php">Take the quiz!</a>
    </li>
</ul>
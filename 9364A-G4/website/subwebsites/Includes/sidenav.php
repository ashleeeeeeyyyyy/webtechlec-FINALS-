<?php 
    $db = new mysqli("p:localhost", "root", "", "course_website");
    $userName = $_SESSION['username'];
    $query = "SELECT concat(first_name,' ',last_name) as name from user WHERE user_name = '$userName'";
    $result = mysqli_query($db, $query);
    $value = mysqli_fetch_object($result);
    $name = $value->name;
?>
<ul class="sidenav #eeeeee grey lighten-3" id="slide-out">
    <li>
        <div class="user-view">
            <div class="background black">

            </div>
            <a><span class = "white-text name"><i class = "large material-icons black">account_circle</i></span></a>
            <a><span class = "white-text name" style = "font-size:20px;"><?php echo "Hello $name!"; ?></span></a>
    </li>
</div>

    <li>
        <a href="./menu.html" class = "waves-effect" style = "font-size: 20px;">Home<i class="material-icons medium">home</i></a>
    </li>
    <li>
        <a href="./quiz.php" class = "waves-effect" style = "font-size: 20px;">Take the quiz!<i class="material-icons medium">star_half</i></a>
    </li>
    <li>
        <ul class="collapsible collapsible-accordion">
          <li>
            <a class="collapsible-header" style = "font-size: 20px;">Topics<i class="material-icons">arrow_drop_down</i></a>
            <div class="collapsible-body">
              <ul>
                <li><a href="./java_servlet.php" style = "font-size: 15px;">Java Servlet</a></li>
                <li><a href="./php.php" style = "font-size: 15px;">PHP</a></li>
                <li><a href="./nodeJS.php" style = "font-size: 15px;">Node JS</a></li>
                <li><a href="./owasp.php" style = "font-size: 15px;">OWASP</a></li>
              </ul>
            </div>
          </li>
        </ul>
    </li>
    <li>
        <ul class="collapsible collapsible-accordion">
          <li>
            <a class="collapsible-header" style = "font-size: 20px;">Profile<i class="material-icons">arrow_drop_down</i></a>
            <div class="collapsible-body">
              <ul>
                <li><a href="profile.php" style = "font-size: 15px;">Additional Notes, Change Password</a></li>
                <li><a href="getresult.php" style = "font-size: 15px;">Review Quiz</a></li>
                <li><a href="logout.php" style = "font-size: 15px;">Logout</a></li>
              </ul>
            </div>
          </li>
        </ul>
    </li>
</ul>
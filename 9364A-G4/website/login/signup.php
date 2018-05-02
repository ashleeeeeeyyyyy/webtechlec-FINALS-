

<?php
    $db = new mysqli("p:localhost", "root", "", "course_website");
    if(isset($_POST['register'])){
        session_start();
        $lastName = mysqli_real_escape_string($db, $_POST['last_name']);
        $firstName = mysqli_real_escape_string($db, $_POST['first_name']);
        $userName = mysqli_real_escape_string($db, $_POST['user_name']);
        $password = mysqli_real_escape_string($db, $_POST['password']);
        $query = "INSERT INTO user(last_name, first_name, user_name, password) VALUES('$lastName', '$firstName', '$userName', '$password')";
        mysqli_query($db, $query);
        $_SESSION['message'] = "You are already log in";
        $_SESSION['username'] = $userName;

    }else{

    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="../css/materialize/css/materialize.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="stylesheet" href="../css/materialize/css/materialize.css">
    <title> Java Servlets </title>
</head>

<body>
    <div class="row">

        <div class="col s1 yellow">1</div>
        <div class="col s1">2</div>
        <div class="col s1 yellow">3</div>
        <div class="col s1">4</div>
        <div class="col s1 yellow">5</div>
        <div class="col s1">6</div>
        <div class="col s1 yellow">7</div>
        <div class="col s1">8</div>
        <div class="col s1 yellow">9</div>
        <div class="col s1">10</div>
        <div class="col s1 yellow">11</div>
        <div class="col s1">12</div>


        <ul class="tabs">
            <li class="tab col s6 m3 offset-m3">
                <a href="#login">Sign in</a>
            </li>
            <li class="tab col s6 m3">
                <a href="#signup">Sign up</a>
            </li>
        </ul>

        <div class="col m6 offset-m3">

            <div class="card">
                <div id="login">
                    <div class="input-field col s12 m7 offset-m2">
                        <i class="material-icons prefix">account_circle</i>
                        <input id="user_name_log" name = "user_name_log" type="text" class="validate">
                        <label for="user_name">User Name</label>
                    </div>
                    <div class="input-field col s12 m7 offset-m2">
                        <i class="material-icons prefix">security</i>
                        <input id="password" name = "pass_log" type="password" class="validate">
                        <label for="password">Password</label>

                    </div>
                    <a class="waves-effect waves-light btn col s10 m6 offset-m3">button</a>

                </div>
            </div>

            <div id="signup">
                <form action = "signup.php" method = "post">
                    <div class="input-field col s12 m4 offset-m2">
                        <input id="last_name" name = "last_name" type="text" class="validate">
                        <label for="last_name">Last Name</label>
                    </div>
                    <div class="input-field col s12 m4">
                        <input id="first_name" name = "first_name" type="text" class="validate">
                        <label for="first_name">First Name</label>
                    </div>

                    <div class="input-field col s12 m7 offset-m2">
                        <i class="material-icons prefix">account_circle</i>
                        <input id="user_name" name = "user_name" type="text" class="validate">
                        <label for="user_name">User Name</label>
                    </div>
                    <div class="input-field col s12 m7 offset-m2">
                        <i class="material-icons prefix">security</i>
                        <input id="password" name = "password" type="password" class="validate">
                        <label for="password">Password</label>

                    </div>
                    <input type = "submit" name = "register" class="waves-effect waves-light btn col s10 m6 offset-m3" value = "Create Account">
            </div>
            </form>
        </div>

    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="../css/materialize/js/materialize.js"></script>
    <script>
        $(document).ready(function () {
            $('.tabs').tabs();
        });
    </script>

</body>

</html>
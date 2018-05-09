

<?php
    $db = new mysqli("p:localhost", "root", "", "course_website");
    if(isset($_POST['register'])){

        $lastName = mysqli_real_escape_string($db, $_POST['last_name']);
        $firstName = mysqli_real_escape_string($db, $_POST['first_name']);
        $userName = mysqli_real_escape_string($db, $_POST['user_name']);
        $password = mysqli_real_escape_string($db, $_POST['password']);
        $query = "INSERT INTO user(last_name, first_name, user_name, password) VALUES('$lastName', '$firstName', '$userName', '$password')";
        mysqli_query($db, $query);



    }
?>
    <div class="row">
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
                    <form action = "login.php" method = "post">
                        <div class="input-field col s12 m7 offset-m2">
                            <i class="material-icons prefix">account_circle</i>
                            <input id="user_name_log" name = "user_name_log" type="text" class="validate">
                            <label for="user_name_log">User Name</label>
                        </div>
                        <div class="input-field col s12 m7 offset-m2">
                            <i class="material-icons prefix">security</i>
                            <input id="password" name = "pass_log" type="password" class="validate">
                            <label for="password">Password</label>

                        </div>
                        <button type = "submit" name = "login" value = "Login" class="waves-effect waves-light btn col s10 m6 offset-m3">
                    </form>
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
                    <button type = "submit" name = "register" class="waves-effect waves-light btn col s10 m6 offset-m3" value = "Create Account">Create Account </button>
            </div>
            </form>
        </div>

    </div>

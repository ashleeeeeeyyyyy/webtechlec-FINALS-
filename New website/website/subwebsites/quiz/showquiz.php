<form method = "post">
    <div class = "row">
        <div class = "col m8 offset-m2">
            <div class = "card center-align" style = "font-size: 50px;">Card Title </div>
                <div class = "card">
<?php

        $username = $_SESSION['username'];
        $score = 0;
        $max = sizeof($quizzes);
        $wrongAnswer = "";
        $query = "SELECT * FROM user_quiz where user_name = '$username'";
        $result = mysqli_query($db, $query);
        if(mysqli_num_rows($result) == 0){
            if(count($quizzes) != 0){
                for($i = 0; $i < $max;  $i++){
                    $quizNo = $quizzes[$i]->get_quizNo();
                    $question = $quizzes[$i]->get_question();
                    $choice1 = $quizzes[$i]->get_choice1();
                    $choice2 = $quizzes[$i]->get_choice2();
                    $choice3 = $quizzes[$i]->get_choice3();
                    $keyAnswer = $quizzes[$i]->get_keyAnswer();
                    $choices = [$choice1, $choice2, $choice3];
                    ?>
                    <div class ="card-content">
                        <p class = "questions"><?php echo "$quizNo" ?>. <?php echo "$question" ?> </p>
                            <p><label><input type = "radio" name =<?=$quizNo?> value = <?=$choice1?> style = "background: black"><span><?php echo $choice1?></span></label></p>
                            <p><label><input type = "radio" name =<?=$quizNo?> value = <?=$choice2?>><span> <?php echo $choice2?></span></label></p>
                            <p><label><input type = "radio" name =<?=$quizNo?> value = <?=$choice3?>><span><?php echo $choice3?></span></label></p> 
                    </div>
                    <?php

                    if(isset($_POST[$quizNo])){
                        $choice = $_POST[$quizNo];
                        $query = "INSERT INTO user_quiz(user_name, quizNo, user_choice) VALUES('$username','$quizNo', '$choice')";
                        mysqli_query($db, $query);
                        if($keyAnswer === $choice){
                            $score++;
                        }else{
                            $wrongAnswer[$i] = $quizNo;
                        }
                    }
                }
            }
        ?>
        <button type = "submit">Submit</button>
        <?php
        }else{ 
            
        }
        ?>
        <a href = "./getresult.php"> Review </a>
            </div>
        </div>
    </div>
</form>

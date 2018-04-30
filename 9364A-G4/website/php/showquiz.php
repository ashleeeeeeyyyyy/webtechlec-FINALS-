<!DOCTYPE html>
<html>
    <head>
</head>
<body>
<?php
    	header("HTTP/1.1 200 OK");
        header("Content-Type: text/html");
?>
<form method = "post">
<?php

        $score = 0;
        $max = sizeof($quizzes);
        $wrongAnswer = "";
        if(count($quizzes) == 0){
            echo "Add";
        } else{
            for($i = 0; $i < $max;  $i++){
                $quizNo = $quizzes[$i]->get_quizNo();
                $question = $quizzes[$i]->get_question();
                $choice1 = $quizzes[$i]->get_choice1();
                $choice2 = $quizzes[$i]->get_choice2();
                $choice3 = $quizzes[$i]->get_choice3();
                $keyAnswer = $quizzes[$i]->get_keyAnswer();
                ?>
                <p class = "questions"><?php echo "$quizNo" ?>. <?php echo "$question" ?> </p>
                <input type = "radio" name =<?=$quizNo?> value = <?=$choice1?> require>a. <?php echo $choice1?>
                <input type = "radio" name =<?=$quizNo?> value = <?=$choice2?>>b. <?php echo $choice2?>
                <input type = "radio" name =<?=$quizNo?> value = <?=$choice3?>>c. <?php echo $choice3?> 
                <?php
                    if($keyAnswer === $_POST[$quizNo]){
                        $score++;
                    }else {
                        $wrongAnswer[$i] = $quizNo;
                    }
            }
        }
        include("getresult.php");
        ?>
        <button type = "submit">
            
</form>
</body>
  </html>
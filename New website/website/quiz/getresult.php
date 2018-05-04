<?php
        $score = 0;
        $max = sizeof($quizzes);
        if(count($quizzes) == 0){

        } else{
            echo "<br> result";
            for($i = 0; $i < $max;  $i++){
                $quizNo = $quizzes[$i]->get_quizNo();
                $question = $quizzes[$i]->get_question();
                $choice1 = $quizzes[$i]->get_choice1();
                $choice2 = $quizzes[$i]->get_choice2();
                $choice3 = $quizzes[$i]->get_choice3();
                $keyAnswer = $quizzes[$i]->get_keyAnswer();
                ?>
                <p class = "questions"><?php echo "$quizNo" ?>. <?php echo "$question" ?> </p>
                <?php 
                    if($wrongAnswer[$i] === $quizNo){
                        ?><p class = "questions"><?php echo "$quizNo" ?>. <?php echo "$question" ?> </p><i class = "material-icons red small">close</i>
                    <?php }else{
                        echo"hey";
                    }
                    ?>

                <?php
            }
        }

        ?>
<?php
    	header("HTTP/1.1 200 OK");
        header("Content-Type: text/html");

        $max = sizeof($quizzes);
        if(count($quizzes) == 0){
            echo "Add";
        } else{
            echo "<table><thead><tr><th>Number</th><th>question</th><th>choice 1</th><th>choice 2</th><th>choice 3</th><th>key answer</th></tr></thead><tbody>";
            for($i = 0; $i < $max;  $i++){
                echo "hey";
                $quizNo = $quizzes->get_quizNo();
                $question = $quizzes->get_question();
                $choice1 = $quizzes->get_choice1();
                $choice2 = $quizzes->get_choice2();
                $choice3 = $quizzes->get_choice3();
                $keyAnswer = $quizzes->get_keyAnswer();
                echo "<tr><td>$quizNo</td><td>$question</td><td>$choice1</td><td>$choice2</td><td>$choice3</td><td>$keyAnswer</td></tr>";

            }

                echo "</tbody></table>";
        }
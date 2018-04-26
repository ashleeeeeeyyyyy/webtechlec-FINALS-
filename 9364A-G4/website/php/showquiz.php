<?php
    	header("HTTP/1.1 200 OK");
        header("Content-Type: text/html");

        if(count($quizzes) == 0){
            echo "Add";
        } else{
            echo "<table><thead><tr><th>Question ID</th><th>choice 1</th><th>choice 2</th><th>choice 3</th><th>key answer</th></tr></thead><tbody>";
            foreach($quizzes as $quiz){
                $quizNo = $quizNo->get_quizNo();
                $question = $question->get_question();
                $choice1 = $choice1->get_choice1();
                $choice2 = $choice2->get_choice2();
                $choice3 = $choice3->get_choice3();
                $keyAnswer = $keyAnswer->get_keyAnswer();

                echo "<tr><td>$quizNo</td><td>$question</td><td>$choice1</td><td>$choice2</td><td>$choice3</td><td>$keyAnswer</td></tr>";

            }

                echo "</tbody></table>";
        }
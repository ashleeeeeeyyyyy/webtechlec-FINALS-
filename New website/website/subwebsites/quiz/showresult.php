<?php
    include("includes/db.php");
    $query = "SELECT * from user_quiz ORDER BY quizNo";
    
    $stmt = $db->stmt_init();
    $stmt->prepare($query);
    $stmt->execute();
    $stmt->bind_result($user_name, $quizNo, $user_choice);  
    
    include("includes/result.php");

    $results = [];
    while($stmt->fetch()){
        $result = new Result($user_name, $quizNo, $user_choice);
        $results[] = $result;
    }
    $stmt->close();

        if(count($quizzes) != 0){
            for($i = 0; $i < sizeof($quizzes); $i++){
                $quizNo = $quizzes[$i]->get_quizNo();
                $question = $quizzes[$i]->get_question();
                $choice1 = $quizzes[$i]->get_choice1();
                $choice2 = $quizzes[$i]->get_choice2();
                $choice3 = $quizzes[$i]->get_choice3();
                $keyAnswer = $quizzes[$i]->get_keyAnswer();
                $user_choice = $results[$i]->get_userChoice();
                $quizNo2 = $results[$i]->get_quizNo();
                if($quizNo == $quizNo2){
                    if($user_choice == $keyAnswer){
                        echo "$quizNo";
                    }else{
                        echo "$quizNo";
                    }
                }else{
                    echo "$quizNo";
                }
            }
        }
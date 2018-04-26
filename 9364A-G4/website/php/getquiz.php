<?php
    include("includes/db.php");

    $query = "SELECT * FROM quiz ORDER BY quizNo";

    $stmt = $db->stmt_init();
    $stmt->prepare($query);
    $stmt->bind_result($quizNo, $question, $choice1, $choice2, $choice3, $keyAnswer);


    include("includes/quiz.php");

    $quizzes = [];

    while($stmt->fetch()){
        $quiz = new Quiz($quizNo, $question, $choice1, $choice2, $choice3, $keyAnswer);
        $quizzes = $quiz;
        echo "$quizNo";
    }


    $stmt->close();
    include("showquiz.php");

 
<div class = "row">
    <div class = "col m8 offset-m2 s12">
        <div class = "card center-align" style = "font-size: 50px;">Quiz Result </div>
            <div class = "card">
<?php
    $username = $_SESSION['username'];
    include("includes/db.php");
    $query = "SELECT * from user_quiz where user_name = '$username' ORDER BY quizNo ";
    
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
        $score = 0;
        $max = sizeof($quizzes);
        if(count($results) != 0){
            for($i = 0; $i < sizeof($quizzes); $i++){
                $quizNo = $quizzes[$i]->get_quizNo();
                $question = $quizzes[$i]->get_question();
                $choice1 = $quizzes[$i]->get_choice1();
                $choice2 = $quizzes[$i]->get_choice2();
                $choice3 = $quizzes[$i]->get_choice3();
                $keyAnswer = $quizzes[$i]->get_keyAnswer();
                $user_choice = $results[$i]->get_userChoice();
                $quizNo2 = $results[$i]->get_quizNo(); ?>
                <div class ="card-content">
                <p class = "questions"><?php echo "$quizNo" ?>. <?php echo "$question" ?> </p>

       <?php   

                    if($user_choice != $keyAnswer){
                        if($user_choice == $choice1){ ?>
                            <p><label><input class = "with-gap" type = "radio" name =<?=$quizNo?> value = <?=$choice1?> checked disabled><span><?php echo $choice1?></span></label><i class="material-icons">close</i></p>
                            <p><label><input class = "with-gap" type = "radio" name =<?=$quizNo?> value = <?=$choice2?> disabled><span> <?php echo $choice2?></span></label></p>
                            <p><label><input class = "with-gap" type = "radio" name =<?=$quizNo?> value = <?=$choice3?> disabled><span><?php echo $choice3?></span></label></p>                         
            <?php       }else if($user_choice == $choice2){ ?>
                            <p><label><input class = "with-gap" type = "radio" name =<?=$quizNo?> value = <?=$choice1?> disabled><span><?php echo $choice1?></span></label></p>
                            <p><label><input class = "with-gap" type = "radio" name =<?=$quizNo?> value = <?=$choice2?> checked disabled><span> <?php echo $choice2?></span></label><i class="material-icons">close</i></p>
                            <p><label><input class = "with-gap" type = "radio" name =<?=$quizNo?> value = <?=$choice3?> disabled><span><?php echo $choice3?></span></label></p>  
            <?php       }else if($user_choice == $choice3){ ?>
                            <p><label><input class = "with-gap" type = "radio" name =<?=$quizNo?> value = <?=$choice1?> disabled><span><?php echo $choice1?></span></label></p>
                            <p><label><input class = "with-gap" type = "radio" name =<?=$quizNo?> value = <?=$choice2?> disabled><span> <?php echo $choice2?></span></label></p>
                            <p><label><input class = "with-gap" type = "radio" name =<?=$quizNo?> value = <?=$choice3?> checked disabled><span><?php echo $choice3?></span></label><i class="material-icons">close</i></p>  
            <?php       }else{ ?>
                            <p><label><input class = "with-gap" type = "radio" name =<?=$quizNo?> value = <?=$choice1?> disabled><span><?php echo $choice1?></span></label></p>
                            <p><label><input class = "with-gap" type = "radio" name =<?=$quizNo?> value = <?=$choice2?> disabled><span> <?php echo $choice2?></span></label></p>
                            <p><label><input class = "with-gap" type = "radio" name =<?=$quizNo?> value = <?=$choice3?> disabled><span><?php echo $choice3?></span></label></p> 
        <?php           }
                    }else if($user_choice == $keyAnswer){
                        if($user_choice == $choice1){ ?>
                            <p><label><input class = "with-gap" type = "radio" name =<?=$quizNo?> value = <?=$choice1?> checked disabled><span><?php echo $choice1?></span></label><i class="material-icons">check</i></p>
                            <p><label><input class = "with-gap" type = "radio" name =<?=$quizNo?> value = <?=$choice2?> disabled><span> <?php echo $choice2?></span></label></p>
                            <p><label><input class = "with-gap" type = "radio" name =<?=$quizNo?> value = <?=$choice3?> disabled><span><?php echo $choice3?></span></label></p>                            
            <?php       }else if($user_choice == $choice2){ ?>
                            <p><label><input class = "with-gap" type = "radio" name =<?=$quizNo?> value = <?=$choice1?> disabled><span><?php echo $choice1?></span></label></p>
                            <p><label><input class = "with-gap" type = "radio" name =<?=$quizNo?> value = <?=$choice2?> checked disabled><span> <?php echo $choice2?></span></label><i class="material-icons">check</i></p>
                            <p><label><input class = "with-gap" type = "radio" name =<?=$quizNo?> value = <?=$choice3?> disabled><span><?php echo $choice3?></span></label></p>    
            <?php       }else if($user_choice == $choice3){ ?>
                            <p><label><input class = "with-gap" type = "radio" name =<?=$quizNo?> value = <?=$choice1?> disabled><span><?php echo $choice1?></span></label></p>
                            <p><label><input class = "with-gap" type = "radio" name =<?=$quizNo?> value = <?=$choice2?> disabled><span> <?php echo $choice2?></span></label></p>
                            <p><label><input class = "with-gap" type = "radio" name =<?=$quizNo?> value = <?=$choice3?> checked disabled ><span><?php echo $choice3?></span></label> <i class="material-icons">check</i></p>       
            <?php       }
                                    $score++;
                    }

                            ?>
                    <br>    
                    Correct Answer: <?php echo $keyAnswer ?>
                    </div>

<?php           } ?>
                <form action = "./subwebsites/quiz/delete.php" method = "post">
                    <button type = "submit" class="waves-effect waves-light black btn col offset-m4 m4 s8 offset-s2">Take the quiz again</button>
                </form>
                <h4 class = "right-align">Score:<?php echo "$score/$max" ?></h4> 
<?php   }else{
            header("location: getresult.php?error=1");
        }
        ?>
        </div>
    </div>
</div>


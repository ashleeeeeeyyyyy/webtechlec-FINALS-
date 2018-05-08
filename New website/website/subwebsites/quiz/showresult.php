
<div class = "row">
    <div class = "col m8 offset-m2">
        <div class = "card center-align" style = "font-size: 50px;">Card Title </div>
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
                <p class = "questions"><?php echo "$quizNo" ?>. <?php echo "$question" ?> </p>
                    <div class ="card-content">
       <?php    if($quizNo == $quizNo2){

                    if($user_choice != $keyAnswer){
                        if($user_choice == $choice1){ ?>
                            <p><label><input type = "radio" name =<?=$quizNo?> value = <?=$choice1?> style = "background: black" checked disabled><span><?php echo $choice1?></span></label></p>
                            <p><label><input type = "radio" name =<?=$quizNo?> value = <?=$choice2?> disabled><span> <?php echo $choice2?></span></label></p>
                            <p><label><input type = "radio" name =<?=$quizNo?> value = <?=$choice3?> disabled><span><?php echo $choice3?></span></label></p>                         
            <?php       }else if($user_choice == $choice2){ ?>
                            <p><label><input type = "radio" name =<?=$quizNo?> value = <?=$choice1?> disabled><span><?php echo $choice1?></span></label></p>
                            <p><label><input type = "radio" name =<?=$quizNo?> value = <?=$choice2?> style = "background: black" checked disabled><span> <?php echo $choice2?></span></label></p>
                            <p><label><input type = "radio" name =<?=$quizNo?> value = <?=$choice3?> disabled><span><?php echo $choice3?></span></label></p>  
            <?php       }else{ ?>
                            <p><label><input type = "radio" name =<?=$quizNo?> value = <?=$choice1?> disabled><span><?php echo $choice1?></span></label></p>
                            <p><label><input type = "radio" name =<?=$quizNo?> value = <?=$choice2?> disabled><span> <?php echo $choice2?></span></label></p>
                            <p><label><input type = "radio" name =<?=$quizNo?> value = <?=$choice3?> style = "background: black" checked disabled><span><?php echo $choice3?></span></label></p>  
            <?php       }
                    }else{
                        if($user_choice == $choice1){ ?>
                            <p><label><input type = "radio" name =<?=$quizNo?> value = <?=$choice1?> style = "background: black" checked disabled><span><?php echo $choice1?></span></label></p>
                            <p><label><input type = "radio" name =<?=$quizNo?> value = <?=$choice2?> disabled><span> <?php echo $choice2?></span></label></p>
                            <p><label><input type = "radio" name =<?=$quizNo?> value = <?=$choice3?> disabled><span><?php echo $choice3?></span></label></p>                            
            <?php       }else if($user_choice == $choice2){ ?>
                            <p><label><input type = "radio" name =<?=$quizNo?> value = <?=$choice1?> disabled><span><?php echo $choice1?></span></label></p>
                            <p><label><input type = "radio" name =<?=$quizNo?> value = <?=$choice2?> style = "background: black" checked disabled><span> <?php echo $choice2?></span></label></p>
                            <p><label><input type = "radio" name =<?=$quizNo?> value = <?=$choice3?> disabled><span><?php echo $choice3?></span></label></p>    
            <?php       }else{ ?>
                            <p><label><input type = "radio" name =<?=$quizNo?> value = <?=$choice1?> disabled><span><?php echo $choice1?></span></label></p>
                            <p><label><input type = "radio" name =<?=$quizNo?> value = <?=$choice2?> disabled><span> <?php echo $choice2?></span></label></p>
                            <p><label><input type = "radio" name =<?=$quizNo?> value = <?=$choice3?> style = "background: black" checked disabled><span><?php echo $choice3?></span></label></p>       
            <?php       }
  
                    }
                }else{ ?>
                    <input type = "radio" name =<?=$quizNo?> value = <?=$choice1?> disabled="disabled">a. <?php echo $choice1?>
                    <input type = "radio" name =<?=$quizNo?> value = <?=$choice2?> disabled="disabled">b. <?php echo $choice2?>
                    <input type = "radio" name =<?=$quizNo?> value = <?=$choice3?> disabled="disabled">c. <?php echo $choice3?>
        <?php   } ?>
                    </div>
<?php           }   
        }else{
            echo "Please take the quiz";
        }
        ?>
        </div>
    </div>
</div>


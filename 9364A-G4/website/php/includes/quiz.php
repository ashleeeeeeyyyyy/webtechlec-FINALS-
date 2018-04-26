<?php
    class Quiz implements JsonSerializable {
        private $quizNo;
        private $question;
        private $choice1;
        private $choice2;
        private $choice3;
        private $keyAnswer;

        public function __construct($quizNo, $question, $choice1, $choice2, $choice3, $keyAnswer){
            $this->quizNo = $quizNo;
            $this->question = $question;
            $this->choice1 = $choice1;
            $this->choice2 = $choice2;
            $this->choice3 = $choice3;
            $this->keyAnswer = $keyAnswer;
        }

        public function get_quizNo(){
            return $this->quizNo;
        }

        public function get_question(){
            return $this->question;
        }

        public function get_choice1(){
            return $this->choice1;
        }

        public function get_choice2(){
            return $this->choice2;
        }

        public function get_choice3(){
            return $this->choice3;
        }

        public function get_keyAnswer(){
            return $this->keyAnswer;
        }

        public function jsonSerialize(){
            return [
                'quizNo' => $this->quizNo,
                'question' => $this->question,
                'choice1' => $this->choice1,
                'choice2' => $this->choice2,
                'choice3' => $this->choice3,
                'keyAnswer' => $this->keyAnswer
            ];
        }
    }


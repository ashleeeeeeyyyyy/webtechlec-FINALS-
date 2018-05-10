<?php
    class Result implements JsonSerializable {
        private $user_name;
        private $quizNo;
        private $user_choice;


        public function __construct($user_name, $quizNo, $user_choice){
            $this->user_name = $user_name;
            $this->quizNo = $quizNo;
            $this->user_choice = $user_choice;
        
        }

        public function get_userName(){
            return $this->user_name;
        }

        public function get_quizNo(){
            return $this->quizNo;
        }

        public function get_userChoice(){
            return $this->user_choice;
        }

        public function jsonSerialize(){
            return[
                'user_name' => $this->user_name,
                'quizNo' => $this->quizNo,
                'user_choice' => $this->user_choice
            ];
        }

    }
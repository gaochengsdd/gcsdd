<?php

    namespace Gaocheng;

    class My{

        private $msg = "welcome";

        public function sendmsg(){
            echo $this->msg;
        }

        public function message($msg=null){
            if(empty($msg)){
                echo "没有输入";
            }else{
                echo "输入的是：".$msg;
            }
        }
        
        public function index(){
            
        }

    }

?>
<?php
    class App{
        
        public function verifyID(){
            // Read the variables sent via POST from our API
            $sessionId   = $_POST["sessionId"];
            $serviceCode = $_POST["serviceCode"];
            $phoneNumber = $_POST["phoneNumber"];
            $text        = $_POST["text"];

            if ($text == "") {
                // This is the first request. Note how we start the response with CON
                $response  = "CON Welcome to Royale Bank \n Enter your ID number";

            }

            // Echo the response back to the API
            header('Content-type: text/plain');
            echo $response;
        }
    }

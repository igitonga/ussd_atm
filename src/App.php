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
            else if ($text == "36557601") {
                $response = "CON Enter your PIN \n";
            }
            // This is a second level response where the user selected 1 in the first instance
            else if($text == "36557601*2050"){
                $response = "CON  Choose a service: \n";
                $response .= "1. Deposit \n";
                $response .= "2. Withdraw \n";
                $response .= "3. Account balance \n";
                $response .= "4. Change PIN \n";
            }
            else if($text == "36557601*2050*1"){
                $response = "CON  Enter amount to deposit \n";
            }
            else if($text == "36557601*2050*2"){
                $response = "CON  Enter amount to withdraw \n";
            }
            else if( $text == "36557601*2050*4"){
                $response = "CON  Enter new PIN \n";
            }
            else if($text == "36557601*2050*3"){
                // This is a terminal request. Note how we start the response with END
                $response = "END  Your account balance is 10,000 \n";
            }
            else if($text == "36557601*2050*1"){
                $response = "CON  Enter amount to deposit \n";
            }

            // Echo the response back to the API
            header('Content-type: text/plain');
            echo $response;
        }
    }

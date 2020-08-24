<?php
    function sendSMS($number, $message)
    {
        $key = '2cd5672fa938cf8ec463';
        $to = $number;
        $sender = "SRT-Invoice";
        $msg = urlencode($message);
        $url = "http://clientlogin.bulksmsgh.com/smsapi?key=$key&to=$to&msg=$msg&sender_id=$sender";
        file_get_contents($url);
    }

    // sendSMS('0208921299', " SMS Test Encoded ^&*#( using new API from the Start Invoice Application");
    // echo "Sent";
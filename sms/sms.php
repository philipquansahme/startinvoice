<?php
    function sendSMS($number, $message)
    {
        $key = '4ab7435aac62a25a8df9';
        $to = $number;
        $sender = "SRT-Invoice";
        $str = $message;
        $msg = str_replace(" ","+",$str);
        $url = "http://bulk.becsms.com/smsapi?key=$key&to=$to&msg=$msg&sender_id=$sender";
        // $url = "http://sms.nasaramobile.com/api?api_key=$key&&sender_id=$sender&&phone=$to&&message=$msg";
        echo $url.'<br>';
        file_get_contents($url);
    }

    // sendSMS('0543230479', "TEST & SOMething");
    // echo "Sent";
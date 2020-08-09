<?php
    function sendSMS($number, $message)
    {
        $key = '59834c1701b7d59834c1701bf3';
        $to = $number;
        $sender = "SRT-Invoice";
        $str = $message;
        $msg = str_replace(" ","+",$str);
        $url = "http://sms.nasaramobile.com/api?api_key=$key&&sender_id=$sender&&phone=$to&&message=$msg";
        file_get_contents($url);
    }
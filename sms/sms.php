<?php
    function sendSMS($number, $message)
    {
        $key = '59834c1701b7d59834c1701bf3';
        // $key = '4ab7435aac62a25a8df9';
        $to = $number;
        $sender = "SRT-Invoice";
        $msg = urlencode($message);
        // $url = "http://bulk.becsms.com/smsapi?key=$key&to=$to&msg=$msg&sender_id=$sender";
        $url = "http://sms.nasaramobile.com/api?api_key=$key&&sender_id=$sender&&phone=$to&&message=$msg";
        file_get_contents($url);
    }

    // sendSMS('0543230479', " Nasra     TEST & SOMething & More Someting    with    long Spaces");
    // echo "Sent";
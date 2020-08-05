<?php
    require('../../config/constants.php');
    function signUpVerification($token){
        $url = SITE_URL.$token;

        echo $url;
    }

    signUpVerification("Ewo");
<?php
    $token = random_bytes(32);
    echo $token.'<br>';
    $hashed_token = password_hash($token, PASSWORD_ARGON2I);
    echo $hashed_token;

    define('SITE_NAME', 'Start Invoice');
    define('SITE_EMAIL', 'noreply@startinvoice.tk');
    define('SITE_URL', 'http://localhost:8080/startinvoice');
    define('LOGO_ICON', 'http://localhost:8080/startinvoice/assets/images/start-icon.png');
    define('LOGO_TEXT', 'http://localhost:8080/startinvoice/assets/images/start-text.png');

    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'startinvoice');

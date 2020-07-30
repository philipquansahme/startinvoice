<?php
    $p = (isset($_GET['p'])) ? $_GET['p'] : 'board';
    switch ($p) {
        case 'board':
            $page_title = 'Dashboard: Start Invoice';
            $content_title = 'Dashboard';
            $content_path = 'pages/board.php';
            break;
    }

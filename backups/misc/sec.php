<?php 
    session_start();
    if (!(isset($_SESSION['LOGEIN']))) {
    header('location: index.php?error=loginreq');
    }
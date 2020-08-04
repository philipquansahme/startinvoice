<?php 
    session_start();
    if ((isset($_SESSION['LOGEIN']))) {
    header('location: dashboard.php');
    }
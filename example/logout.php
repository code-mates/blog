<?php
    require_once '../class/user.php';
    require_once 'config.php';

    $user->logout();

    header('location: landing.php');
?>

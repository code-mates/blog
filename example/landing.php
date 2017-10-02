<?php
	require_once '../class/user.php';
	require_once 'config.php';
	$user->landingHead();
	$user->landingTop();
	$user->loginForm();
	$user->activationForm();
	$user->landingMiddle();
	$user->registerForm();
	$user->landingFooter();
?>

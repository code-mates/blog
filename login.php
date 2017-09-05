<!-- initial code taken from 'https://www.phpclasses.org/blog/package/10087/post/1-secure-login-and-registration-system.html' --> 
<?php
	require_once '../class/user/php';
	require_once 'config.php';

	$user->indexHead();
	$user->indexTop();
	$user->loginForm;
	$user->activationForm();
	$user->indexMiddle();
	$user->registerForm();
	$user->indexFooter();
?>


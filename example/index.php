<?php
	require_once '../class/user.php';
	//require_once '/home/ubuntu/workspace/guestbook/travis/Secure_Login/class/user.php';
	require_once 'config.php';
	//require_once '/home/ubuntu/workspace/guestbook/travis/Secure_Login/example/config.php';

	print $this->render(indexHead);
	print $this->render(indexTop);
	print $this->render(indexMiddle);
	print $this->render(indexFooter);
	//$user->indexHead();
	//$user->indexTop();
	//$user->indexMiddle();
	//$user->indexFooter();
?>


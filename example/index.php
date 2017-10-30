<?php
	require_once '../class/user.php';
	//require_once '/home/ubuntu/workspace/guestbook/travis/Secure_Login/class/user.php';
	require_once 'config.php';
	//require_once '/home/ubuntu/workspace/guestbook/travis/Secure_Login/example/config.php';
	
	/**
	 * render appears to be a class method in user.php. To access this you need to do it the same as the other $user calls
	 * $this works inside the the class (User) to access itself, outside the class you have to instantiate the class first
	 * This looks to be done inside your config.php line 36, $user = new User(); now you can call the render like this. $user->render();
	 */
	 
	// like this
	//$user->render(indexHead);
	//$user->render(indexTop);
	//$user->render(indexMiddle);
	//$user->render(indexFooter);

	print $this->render(indexHead);
	print $this->render(indexTop);
	print $this->render(indexMiddle);
	print $this->render(indexFooter);
	
	//$user->indexHead();
	//$user->indexTop();
	//$user->indexMiddle();
	//$user->indexFooter();
?>


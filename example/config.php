<?php
session_start();
define('conString', 'mysql:host=localhost;dbname=login');
define('artString', 'mysql:host=localhost;dbname=cm_blog');
define('dbUser', 'ubuntu');
define('dbPass', 'verystrongpassword');


define('userfile', 'user.php');
define('loginfile', 'login.php');
define('activatefile', 'activate.php');
define('registerfile', 'register.php');


//template LANDING files
define('landingHead', 'inc/landinghead.htm');
define('landingTop', 'inc/landingtop.htm');
define('loginForm', 'inc/loginform.php');
define('activationForm', 'inc/activationform.php');
define('landingMiddle', 'inc/landingmiddle.htm');
define('registerForm', 'inc/registerform.php');
define('landingFooter', 'inc/landingfooter.htm');

//template INDEX files
define('indexHead', 'inc/indexhead.htm');
define('indexTop', 'inc/indextop.php');
define('indexMiddle', 'inc/indexmiddle.htm');
define('indexFooter', 'inc/indexfooter.htm');

//template ARTICLE (post creation) files
define('articleFooter', 'inc/articlefooter.php');

//define('userPage', 'inc/userpage.php');
define('userPage', 'index.php');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$user = new User();
$user->dbConnect(conString, dbUser, dbPass);

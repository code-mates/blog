<?php
require_conce("../config.php");
global $db;

$db = new PDO('mysql:host=localhost;dbname=cm_blog,utf8mb4', 'username', 'password');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); /*puts PDO in exception mode */
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); /* turn off prepare emulation to use PDO safely (wiki.hashphp.org/PDO_Tutorial_for_MySQL_Developers) */

function register($firstName, $lastName, $username, $password, $email) {
	global $db;
	$firstName =



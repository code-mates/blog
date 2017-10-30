<?php
require_once '../class/user.php';
require_once 'config.php';


// ----------| SQL Variables |--------------
$userDBQuery = 'mysql:host=localhost;dbname=login';
$uName = 'ubuntu';
$pWord = 'verystrongpassword';

try{
  $userQueryConnect = new PDO($userDBQuery, $uName, $pWord);
	$userQueryConnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
	die("ERROR: No connectyness being of happening at . " . $e->getMessage());
}
    
try{
	$userQuery = "SELECT * FROM users WHERE id = " . $_SESSION['user']['id'];
	$result = $userQueryConnect->query($userQuery);
	while($row = $result->fetch()) {
        $UserQueryID = $row['id'];
    }   
  	unset($result);
}catch(PDOException $e){
	die("ERROR: Not ableness in executicutiving $userQuery. " . $e->getMessage());
}  

header( 'Location: profile.php?id='.$UserQueryID );

?>

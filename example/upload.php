<?php
require_once '../class/user.php';
require_once 'config.php';

// ----------| SQL Variables |--------------
$userArticle = 'mysql:host=localhost;dbname=cm_blog';
$uName = 'ubuntu';
$pWord = 'verystrongpassword';
// ----------| File Upload Variables |--------------
$folder = "uploads/";
$upload_image = $folder . basename($_FILES["upfile"]["name"]);
$upload_name = basename($_FILES["upfile"]["name"]);

/* -------| ACTION 1:  Filter POST data |-------- */
$postTitle =filter_input(INPUT_POST, 'post_title');
$postBody =filter_input(INPUT_POST, 'post_body');
$postBodyWithLB = nl2br(htmlentities($postBody, ENT_QUOTES, 'UTF-8')); //nice little PHP solution to add line breaks in textarea elements
$postSubtitle =filter_input(INPUT_POST, 'post_subtitle');
$postUserID =$_SESSION['user']['id'];

/* -------| ACTION 2:  Move the temp file to the UPLOADS directory |-------- */
//if(!empty($_POST)) {
if(isset($_POST["submit"])) {
    try{
        $userArticleConnect = new PDO($userArticle, $uName, $pWord);
    	$userArticleConnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
		die("ERROR: No connecty. " . $e->getMessage());
		}
    
    try{
		move_uploaded_file($_FILES["upfile"]["tmp_name"], $upload_image);
		// http://php.net/manual/en/pdostatement.bindparam.php
		// Setup the SQL Query here but use the keywords for bind replacementsssssssssssss
		$article_insert = "INSERT INTO article (author_user_id, title, body, subtitle, img_name, img_id) VALUES (:postUserID, :postTitle, :postBody, :postSubtitle, :postImgName, '1')";
		
		// Prepare
		$p = $userArticleConnect->prepare($article_insert);
		
		// Replace those keywords, (parameter, variable, data_type to expect )
		$p->bindParam(':postTitle', $postTitle, PDO::PARAM_STR); // Post Title needs to be a string
		$p->bindParam(':postBody', $postBodyWithLB, PDO::PARAM_STR); // Post body etc
		$p->bindParam(':postSubtitle', $postSubtitle, PDO::PARAM_STR);
		$p->bindParam(':postImgName', $upload_name, PDO::PARAM_STR);
		$p->bindParam(':postUserID', $postUserID, PDO::PARAM_STR);
		// Run it
		$p->execute();
		echo('Article successfully stored');
	}catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
		}
		
  	try{
        $articleQuery = "SELECT * FROM article ORDER BY article_id DESC LIMIT 1";
        $result = $userArticleConnect->query($articleQuery);
    			
    	while($row = $result->fetch()) {
            $artID = $row['article_id'];
        }    	
    unset($result);
    } catch(PDOException $e){
		die("ERROR: Not ableness in executicutiving $articleQuery. " . $e->getMessage());
	}
				
//-----------| Navigate to display the image |---------------//
header( 'Location: post.php?article_id='.$artID );
}
?>


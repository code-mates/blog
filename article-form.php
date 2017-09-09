<?php
session_start();
if($_SESSION["loggedIn"] != true) {
    echo("Access denied!");
    exit();
}
echo("Enter my lord!");
?><?php
try {

    $stmt = $db->prepare('SELECT article_id, articleTitle, articleBody FROM article WHERE article_id = :article_id');
    $stmt->execute(array(':article_id' => $_GET['id']));
    $row = $stmt->fetch();

} catch(PDOException $e) {
    echo $e->getMessage();
}
?>

<form action='' method='post'>
    <input type='hidden' name='article_id' value='<?php echo $row['article_id'];?>'>

    <p><label>Title</label><br />
    <input type='text' name='articleTitle' value='<?php echo $row['articleTitle'];?>'></p>

    <p><label>Body</label><br />
    <textarea name='articleBody' cols='60' rows='10'><?php echo $row['articleBody'];?></textarea></p>

    <p><input type='submit' name='submit' value='Update'></p>

</form>

if(isset($_POST['submit'])){

    $_POST = array_map( 'stripslashes', $_POST );

    //collect form data
    extract($_POST);

    //very basic validation
    if($postID ==''){
        $error[] = 'This article is missing a valid id!.';
    }

    if($postTitle ==''){
        $error[] = 'Please enter the title.';
    }

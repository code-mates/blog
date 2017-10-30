<?php
require_once '../class/user.php';
require_once 'config.php';

// ----------| SQL Variables |--------------
$userArticle = 'mysql:host=localhost;dbname=cm_blog';
$uName = 'ubuntu';
$pWord = 'verystrongpassword';
$UserSessionID = $_SESSION['user']['id'];
$UserSessionName = $_SESSION['user']['fname'].' '.$_SESSION['user']['lname'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <?php echo "<title>Profile: ".$UserSessionName."</title>";?>  <!-- ha. -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <div class="container">
  <h2>Welcome <?php print $_SESSION['user']['fname'].' '.$_SESSION['user']['lname'].' (User ID:'.$_SESSION['user']['id'].')'; ?></h2>
  <h4><a href='user.php'>[Home]</a>    <a href='logout.php'>[Logout]</a></h5>
  </div>
  <div class="row">
    <?php /*
  echo $author_user_id;
  echo $article_id;
  echo $title;
  echo $subtitle;
  echo $image; */?> 
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Firstname</th>
          <th>Lastname</th>
          <th>Email</th>
        </tr>
      </thead><tbody>
      <?php if($_SESSION['user']['user_role'] == 2){
      	foreach ($vars as $user) {
      	?>
      		<tr>
  		        <td><?=$user['fname']?></td>
  		        <td><?=$user['lname']?></td>
  		        <td><?=$user['email']?></td>
  		    </tr>
      	<?php
      	}
      }else{ ?>
        <tr>
          <td><?=$_SESSION['user']['fname']?></td>
          <td><?=$_SESSION['user']['lname']?></td>
          <td><?=$_SESSION['user']['email']?></td>
        </tr>    
      <?php } ?></tbody>
    </table>
    
  </div>
  <div class="row">
    <?php
    echo "<table class='table table-striped'>";
      echo "<thead>";
        echo "<tr><th>Article ID</th><th>Title</th><th>Subtitle</th><th>Image</th></tr>";
      echo "</thead><tbody>";
    /* class TableRows extends RecursiveIteratorIterator {
    class TableRows extends RecursiveIteratorIterator {
      function __construct($it) { 
        parent::__construct($it, self::LEAVES_ONLY); 
      }
      function current() {
        return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
      }
      
      function beginChildren() {
        echo "<tr>";
      }
      
      function endChildren() {
        echo "</tr>" . "\n";
      }
    }
    */
            // ----------| Ask SQL for data |--------------
      try{
          $userArticleConnect = new PDO($userArticle, $uName, $pWord);
        	$userArticleConnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        	$sql = "SELECT article.*, user.* 
        	        FROM article 
        	        LEFT JOIN user ON (article.author_user_id = user.user_id) 
        	        WHERE author_user_id = " . $UserSessionID . " 
        	        ORDER BY article_id DESC";
        	        // LIMIT 5
          // SELECT article.*, user.* FROM article LEFT JOIN user ON (article.author_user_id = user.user_id) WHERE article.author_user_id = 3 ORDER BY article_id DESC LIMIT 3;        	        
        	$stmt = $userArticleConnect->prepare($sql);
        	$stmt->execute();
        	
        	while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
 
        	echo "<tr>
                	<td>".$row['article_id']."</td>
                	<td><a href=\"post.php?article_id=".$row['article_id']."\">".$row['title']."</a></td>
                	<td>".$row['subtitle']."</td>
                	<td>".$row['img_name']."</td>
                </tr>";
          //$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
          //foreach(new TableRows(new RecursiveIteratorIterator($stmt->fetchALL())) as $k=>$v) {
          //  echo $v;
          }
        }catch(PDOException $e){
          die("ERROR: No connecty. " . $e->getMessage());
        }
        $userArticleConnect = null;
        echo "</table>";
      ?>
    </div>
    <p><a href='logout.php'>Logout</a></p>
  </div>
</body>
</html>
<!DOCTYPE html>
<!-- If the session does not have a 'user' display this -->
<?php
require_once '../class/user.php';
require_once 'config.php';
$SessionUserFullName = $_SESSION['user']['fname'].' '.$_SESSION['user']['lname'];
$SessionUserEmail = $_SESSION['user']['email'];


?>
<?php //if ( !isset($_SESSION['user']) ): ?>
<!--	<h5 class="navbar-brand">Welcome Guest</h5> -->
<?php //else: ?>
<!-- If they do, now look for the user.fname etc -->
<!--	<h5 class="navbar-brand">Welcome <?php //print $_SESSION['user']['fname'].' '.$_SESSION['user']['lname']." (<i><u>".$_SESSION['user']['email']."</u></i>)"; ?></h5> -->
<?php //endif; ?>


<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Code-mates Blog - Post Page</title>
    
    

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/clean-blog.min.css" rel="stylesheet">

  </head>

  <body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <!-- <a class="navbar-brand" href="user.php">Start Bootstrap</a> -->
        <h5 class="navbar-brand">Welcome <?php print $SessionUserFullName . ' (<i><u>' . $SessionUserEmail . '</u></i>)'; ?></h5>
        <!-- <h5 class="navbar-brand">Welcome <?php print $_SESSION['user']['fname'].' '.$_SESSION['user']['lname']." (<i><u>".$_SESSION['user']['email']."</u></i>)"; ?></h5> -->
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="user.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="article_create.php">New Post</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!---------| Page Header |-------->
    <?php
  	//variable print test:
      //echo $_GET['article_id'];
      //echo $_GET['title'];
      //echo $_GET['subtitle'];
      
    // SQL Variables
    $artID = $_GET['article_id'];
    $userArticle = 'mysql:host=localhost;dbname=cm_blog';
		$uName = 'ubuntu';
		$pWord = 'verystrongpassword';

		// Attempt MySQL server connection; defaults from tutorial changed to reflect test server credentials
		try{
			$articleQueryConnect = new PDO($userArticle, $uName, $pWord);
			$articleQueryConnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}catch(PDOException $e){
			die("ERROR: No connecty. " . $e->getMessage());
		}

  	try{
			// left join ARTICLE and USER tables
			$articleQuery = "SELECT article.*, user.* FROM article LEFT JOIN user ON (article.author_user_id = user.user_id) WHERE article_id=" . $artID;
			//--------->    $imgQuery = "SELECT * from images ORDER BY id DESC LIMIT 1";   <---Reference; DO NOT DELETE
			$result = $articleQueryConnect->query($articleQuery);
			
			while($row = $result->fetch()) {
			 $image_url = 'uploads/'.$row['img_name'];
			 echo '<header class="masthead" style="background-image: url('.$image_url.')">';
			    echo '<div class="container">';
			      echo '<div class="row">';
			        echo '<div class="col-lg-8 col-md-10 mx-auto">';
			          echo '<div class="post-heading">';
			            echo '<h1 class="h1_header">' . $row['title'] . '</h1>';
			            echo '<h2 class="subheading">' . $row['subtitle'] . '</h2>';
			            echo '<span class="meta">Posted by
                    <a href="#"><b>' . $row['name'] . '</b></a>';
                  echo ' on <b>' . $row['publish_date'] . '</b></span>';
                echo '</div>';
              echo '</div>';
            echo '</div>';
          echo '</div>';
        echo '</header>';
        
        // Post Content
        echo '<article>';
          echo '<div class="container">';
            echo '<div class="row">';
              echo '<div class="col-lg-8 col-md-10 mx-auto">';
                echo '<div class="body">';
                  echo $row['body'];
                echo '</div>';
              echo '</div>';
            echo '</div>';
          echo '</div>';
        echo '</article>';
			  }
			  unset($result);
      } catch(PDOException $e){
						die("ERROR: Not ableness in executicutiving $articleQuery. " . $e->getMessage());
				}
				
		?>
<!--ORIGINAL HEADER-->
<!--    <header class="masthead" style="background-image: url('img/post1-bg.jpg')">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-heading">
              <h1 class="h1_header">This Windows 10 Machine Is A Piece of Shit (And I Must Punch It)</h1>
              <h2 class="subheading">Now my fist is fucking bleeding. This sucks.</h2>
              <span class="meta">Posted by
                <a href="#">Start Bootstrap</a>
                on August 24, 2017</span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Post Content -->
<!--    <article>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="body">
              <?//php 
              //echo $_row['body'];
              //echo $article.body
              ?>
            </div>
           
            <p>Placeholder text by
              <a href="http://spaceipsum.com/">Space Ipsum</a>. Photographs by
              <a href="https://www.flickr.com/photos/nasacommons/">NASA on The Commons</a>.</p>
              
          </div>
        </div>
      </div>
    </article>
-->
    <hr>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <ul class="list-inline text-center">
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
            </ul>
            <p class="copyright text-muted">Copyright &copy; Your Website 2017</p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/clean-blog.min.js"></script>

  </body>

</html>
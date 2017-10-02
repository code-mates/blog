<!DOCTYPE html>
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
        <h5 class="navbar-brand">Welcome <?php print $_SESSION['user']['fname'].' '.$_SESSION['user']['lname']." (<i><u>".$_SESSION['user']['email']."</u></i>)"; ?></h5>
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
              <a class="nav-link" href="post.php">Sample Post</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/dinosaurs-hires.png')">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-heading">
              <h1>Codemates Intro by Vicky</h1>
              <h2 class="subheading">She didn't have a subheading, so this will have to do.</h2>
              <span class="meta">Posted by Vick-ee
                <a href="#">Start Bootstrap</a>
                on August 24, 2017</span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Post Content -->
    <article>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <p>This blog is to document <b>Code_Mates</b>, a programming training group that meets every Saturday. We are based in Austin.</p>
            
            <p>There are four people. Matt Elliot (Developer 1) and Tim Macaulay-Robinson (Developer 2) who have 20 years+ each experience. Vicky Barnato (me) & <b>[REDACTED]</b> who are non techs. Both of us come from BA backgrounds and are programming novices.</p>

            <h2 class="section-heading">Our Goals:</h2>

            <p><b>Matt Elliot:</b> Enhance tech communication and training skills by getting two civilians ready for programming jobs in one <i>year</i>.</p>

            <p><b>Tim Macaulay-Robinson: Ditto.</b></p>

            <blockquote class="blockquote">Who else is doing this?</blockquote>

            <p><b>Vicky Barnato</b> (me) & <b>[REDACTED]</b>:  [REDACTED] wants to move from Business Analysis to programming. Actually, he never said that. What he <i>really</i> wants to do is learn the thing he always wanted to, but thought it was too difficult to do. He said it was tough being a techie without any of the background to actually tinker with the things that he loves.</p>

            <p> I (Vicky) want to be less dependent on developers’ explanations to understand how technology works. This blog documents the projects and tasks that Tim and Matt set [REDACTED] and me to teach us. These will be basic tasks at first. Readers with programming experience may find the first couple of posts too basic. If we have any readers at all, because this is pretty much just being served up locally at this point, and I'm fairly certain this isn't going to be a first-page result on anyone's Google search anytime soon.</p>
            <p>Please be patient[,] we are novices! The first part of this post documents how I attempted to create an online guestbook form. Please let me know if you see any mistakes or want additional explanations. [My]SQL was used for the database, HTML for the form[, <--VICKY! OXFORD COMMA PLZKTHX!] and PHP to connect [it all].</p>

            <p>The task was broken down by Tim into these steps:
              <strong><em><ol>
                <li><i><b>Create database "guestbook" with 1 table "guest_"- Guest name should be a text column</li>
                <li>Create html form, text input, and button - form should post data to php file insert_guest.php</li>
                <li>Open connection to mysql using php mysql</li>
                <li>Insert guest name into database - write the insert statement to insert the guests name into the database - submit the query to the database using the php mysql connection</b></i></li>
              </ol></strong></em></p>
          </div>
        </div>
      </div>
    </article>

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
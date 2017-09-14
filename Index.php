<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Simple Sidebar - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="C:\Users\mike1\Documents\GitHub\blog\startbootstrap-clean-blog-gh-pages\vendor\bootstrap\css\bootstrap-grid.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

</head>

<body>


    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Start Bootstrap
                    </a>
                </li>
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li>
                    <a href="#">Shortcuts</a>
                </li>
                <li>
                    <a href="#">Overview</a>
                </li>
                <li>
                    <a href="#">Events</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Services</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">


<img src="https://comic.browserling.com/dinosaurs-hires.png"" alt="Friends Who Program Together Stay Together" style="width:500px;heigh:500px;"</br>

                <h1>Code-Mates</h1>
<p>This blog is to document <b>Code_Mates</b>, a programming training group that meets every Saturday. We are based in Austin.</p>
<p>There are four people. Matt Elliot (Developer 1) and
Tim Macaulay-Robinson (Developer 2) who have 20 years+ each experience.
Vicky Barnato (me) & Travis Austin who are non techs. Both of us come from
BA backgrounds and are programming novices.</p>

<p><p>Our goals:
Matt Elliot: Enhance tech communication and training skills by getting two civilians ready for programming jobs in one <i>year</i>.
Tim Macaulay-Robinson: Ditto.</p></P>

Vicky Barnato (me) & Travis Austin:  Travis wants to move from Business Analysis to programming.
<p>
I want to be less dependent on developers’ explanations to understand how technology works.
This blog documents the projects and tasks that Tim and Matt set Travis and me to teach us.
These will be basic tasks at first. Readers with programming experience may find the first couple of posts too basic.</p>
<p>Please be patient we are novices! The first part of this post documents how I attempted to create an online guestbook form.
Please let me know if you see any mistakes or  want additional explanations.
SQL was used for the database, html for the form and PHP to connect the two.</p>

The task was broken down by Tim into these steps:
<strong><em><ol><li><i><b>Create database "guestbook" with 1 table "guest_"
    - Guest name should be a text column</li>
<li>Create html form, text input, and button
    - form should post data to php file insert_guest.php</li>
<li>Open connection to mysql using php mysql</li>
<li>Insert guest name into database
    - write the insert statement to insert the guests name into the database
    - submit the query to the database using the php mysql connection</b></i></li></em>
</ol></strong>

<h3><p>My code:</p></h3>

<em></em>

    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CREATE DATABASE guestbook2;<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//You should see this message: “Query OK, 1 row affected (0.00 sec)”</P>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; USE guestbook2<P>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//You should see this message “Database changed”</P>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CREATE TABLE guest (
   guestID int,
    guestname text,
    sign_date date,
    comments varchar(30),
    reason varchar(30)
    );<P>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//You should see this message "Query OK, 0 rows affected (0.01 sec)"</P>

   <P>Below is the html form guestbook2.php where guests will input data:</P>

  <P><!DOCTYPE html></P>
  <P> <html>
   <body></P>

  <P> <form action="insert_guest.php" method="POST">
   <!-- guestname:<br></P>
   <P><input type="text" name="guestname">
   <br></P>
   <P><input type="button" onclick="formSubmit()" value="Send form data!"></P>
   <P><input type="submit" name="Click me HARDER BABY"/></P>
   <P><br> --></P>
  <P> survey:<br></P>

    <P>Guest Name:</P>
   <P><input type="text" name="guestname">
   <br></P>
 <P>Did you have a good stay? <input type="text" name="comment">
   <br></P>
 <P>why or why not?</P>
   <P><input type="text" name="reason">
   <br></P>
  <P><input type="submit" value="submit"/>
   <br></P>
   <P><br>
   <br></P>
  <P> <thead>Guests staying at hotel - See if you know any!</thead>
   <br></P>
   <P><br>
   <img src="http://i.huffpost.com/gen/2367382/images/o-FOUR-WOMEN-FRIENDS-LAUGHING-facebook.jpg" alt="This is how happy you will be if you meet an old friend at the hotel"style="width:304px;height:228px;">
   <br>
   <br></P>
 </P>
   <P></body></P>
   <P></form></P>
   <P></html></P>
   <P><?php</P>

<P>Below is the code from insert_guest.php file which sets up the connection between the guestbook2 database and the html form</P>

  <P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$conn = mysqli_connect("localhost","username","password","guestbook2");</P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//you will need to input username and password to set up the connection</P>

<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// Check connection</P>
  <P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (mysqli_connect_errno())</P>
   <P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();</P>
  <P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</P>
  <P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// not used connection</P>
  <P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// $myPDO = new PDO('mysql:host=localhost;dbname=guestbook2', 'username', 'password'); </P>

   <P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ($_POST) {</P>

 <P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$sql="INSERT INTO guest (guestname, comments, reason) VALUES ('".$_POST['guestname']."', &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'".$_POST['comment']."', '".$_POST['reason']."')";</P>

   <P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ($conn->query($sql) === TRUE) {</P>
     <P> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo "New record created successfully";</P>
  <P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; } &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else {</P>
     <P> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo "Error: " . $sql . "<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $conn->error;</P>
  <P> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
   }
   ?></P>

<P></body></P>

   <P><!-- Bootstrap core CSS --></P>
   <P><link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"></P>

   <P><!-- Custom fonts for this template --></P>
   <P><link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"></P>
  <P><link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'></P>
   <P><link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'></P>

    <P><!-- Custom styles for this template --></P>
    <P><link href="css/clean-blog.min.css" rel="stylesheet"></P>

 <P> </head></P>

  <P><body></P>

   <P><!-- Navigation --></P>
   <P><nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav"></P>
     <P><div class="container"></P>
        <P><a class="navbar-brand" href="index.html">Start Bootstrap</a></P>
       <P><button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"></P>
          <P>Menu</P>
          <P><i class="fa fa-bars"></i></P>
        <p></button></P>
      <P> <div class="collapse navbar-collapse" id="navbarResponsive"></P>
      <P><ul class="navbar-nav ml-auto"></P>
           <P><li class="nav-item"></P>
              <P><a class="nav-link" href="index.html">Home</a></P>
            <P></li></P>
            <P><li class="nav-item"></P>
              <P><a class="nav-link" href="about.html">About</a></P>
            <P></li></P>
            <P><li class="nav-item"></P>
              <P><a class="nav-link" href="post.html">article_form.php</a></P>
           <P></li></P>
            <P><li class="nav-item"></P>
              <P><a class="nav-link" href="contact.html">Contact</a></P>
            <P></li></P>
         <P> </ul></P>
        <P></div></P>
      <P></div></P>
    <P></nav></P>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/home-bg.jpg')">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>Clean Blog</h1>
              <span class="subheading">A Blog Theme by Start Bootstrap</span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-preview">
            <a href="post.html">
              <h2 class="post-title">
                Save-article.php
              </h2>
              <h3 class="post-subtitle">
                How to create a script to create or update an article
              </h3>
            </a>
            <p class="post-meta">Posted by
              <a href="#">Start Bootstrap</a>
              on September 24, 2017</p>
          </div>
          <hr>
          <div class="post-preview">
            <a href="post.html">
              <h2 class="post-title">
                article-form.php
              </h2>
<h3 class="post-subtitle">
                Create a page to create or edit an article
              </h3>
</a>
               <p class="post-meta">Posted by
              <a href="#">Start Bootstrap</a>
              on September 28, 2016</p>

</div>
<hr>
          <div class="post-preview">
            <a href="post.html">
              <h2 class="post-title">
                Login-form.php
              </h2>
<h3 class="post-subtitle">
                Create a login page
              </h3>
            </a>
            <p class="post-meta">Posted by
              <a href="#">Start Bootstrap</a>
              on September 18, 2017</p>
          </div>
          <hr>
          <div class="post-preview">
            <a href="post.html">
              <h2 class="post-title">
                dashboard.php
              </h2>
              <h3 class="post-subtitle">
                Create a dashboard page for authenticated users
              </h3>
            </a>
            <p class="post-meta">Posted by
              <a href="#">Start Bootstrap</a>
              on August 24, 2017</p>
          </div>
          <hr>
          <!-- Pager -->
          <div class="clearfix">
            <a class="btn btn-secondary float-right" href="#">Older Posts &rarr;</a>
          </div>
        </div>
      </div>
    </div>

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
     <P> </div></P>
    <P></footer></P>

   <P> <!-- Bootstrap core JavaScript --></P>
    <P><script src="vendor/jquery/jquery.min.js"></script></P>
    <P><script src="vendor/popper/popper.min.js"></script></P>
    <P><script src="vendor/bootstrap/js/bootstrap.min.js"></script></P>

    <P><!-- Custom scripts for this template --></P>
   <script src="js/clean-blog.min.js"></script></P>

  </body>

</html>

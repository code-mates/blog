<body>

	<!-- Navigation -->
	<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
		<div class="container">
			<h5 class="navbar-brand">Welcome <?php print $_SESSION['user']['fname'].' '.$_SESSION['user']['lname']." (<i><u>".$_SESSION['user']['email']."</u></i>)"; ?></h5>
			<!-- <a class="navbar-brand" href="index.php">Start Bootstrap</a> -->
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
					<li class="nav-item">
						<a class="nav-link" href="contact.php">Contact</a>
					<li class="nav-item">
						<a class="nav-link" href="logout.php">Logout</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<!-- Page Header -->
	<header class="masthead" style="background-image: url('img/home-bg.jpg')"> <!-- DFT that needs changing -->
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-10 mx-auto">
						<div class="site-heading">
							<h1>Code-mates Blog</h1>
							<span class="subheading">A Project/Blog/Learning Experience in the Making</span>
						</div>
				</div>
			</div>
		</div>
	</header>

<!-- Logged in User Information
<div class="container">
  <h2>Welcome <php print $_SESSION['user']['fname'].' '.$_SESSION['user']['lname']; ?></h2>           
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead><tbody>
    <php if($_SESSION['user']['user_role'] == 2){
    	foreach ($vars as $user) {
    	?>
    		<tr>
		        <td><=$user['fname']?></td>
		        <td><=$user['lname']?></td>
		        <td><=$user['email']?></td>
		    </tr>
    	<php
    	}
    }else{ ?>
      <tr>
        <td><=$_SESSION['user']['fname']?></td>
        <td><=$_SESSION['user']['lname']?></td>
        <td><=$_SESSION['user']['email']?></td>
      </tr>    
    <php } ?></tbody>
  </table>
  <p><a href='logout.php'>Logout</a></p>
</div> -->

	<!-- Main Content -->
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-10 mx-auto">	
				<div class="post-preview">
					<a href="fixlist.php">
						<h2 class="post-title">
							List of things that aren't working yet
						</h2>
						<h3 class="post-subtitle">
							For the blog, that is. Not my life. That list is much longer.
						</h3>
					</a>
					<p ="post-meta">Posted by
							<a href="#">Start Bootstrap</a>
							on September 24, 2017</p>
				</div>
				<div class="post-preview">
					<a href="post.php">
						<h2 class="post-title">
							This Windows 10 Machine Is A Piece of Shit (And I Must Punch It)
						</h2>
						<h3 class="post-subtitle">
							Now my fist is fucking bleeding. This sucks.
						</h3>
					</a>
					<p ="post-meta">Posted by
							<a href="#">Start Bootstrap</a>
							on September 24, 2017</p>
				</div>
				<hr>
				<div class="post-preview">
					<a href="post2.php">
						<h2 class="post-title">
							Code-Mates Intro by Vicky
						</h2>
					</a>
					<p class="post-meta">Posted by
						<a href="#">Start Bootstrap</a>
						on September 18, 2017</p>
				</div>
				<hr>
				<div class="post-preview">
					<a href="post3.php">
						<h2 class="post-title">
						I never did look at that photograph that Nickelback wanted me to
						</h2>
						<h3 class="post-subtitle">
						Good thing, because I would have ripped it out of his hands and pissed on it
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





<?php
if ($_POST['submit']) {
	
	if ($_POST['name']) {
		$error.="Please enter your name";
	}
	if ($_POST['email']) {
		$error.="Please enter your email";
	}
	if ($_POST['message']) {
		$error.="Please enter a message";
	}

	if ($error) {
		$result="Whoops, there is an error. Please fix: $error";
	}
}


?>


<!DOCTYPE html>
<html>
<head>
	<title>Contact Meg</title>


	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>

	<header class="opaque">
	<div class="container">
		<div class="row">
			<div class="col-xs-2 name">
				<h2>Meg O'Roark</h2>
			</div> 
			<div class="col-xs-6 col-md-4 navlinks">
				<a class= "text-right" href="index.html">About</a>
				<a class="text-right" href="portfolio.html">Portfolio</a>
				<a class= "text-right" href="contact.html">Contact</a>
			</div>
		</div>
	</div>
	</header>

	<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-8 content-area">
					<div class="content-wrapper">
					<page-header>
					<h2>Contact</h2>
					</page-header>

					<?php echo $result;?>
					
					<form method="post" role="form">
						<div class="form-group">
							<input type="text" name="name" class="form-control" placeholder="Your Name">
						</div>
						<div class="form-group">
							<input type="email" name="email" class="form-control" placeholder="Your Email">
						</div>
						<div class="form-group">
							<textarea name="message" rows="5" class=form-control placeholder="Message..."></textarea>
						</div>
						<input type="submit" name="submit" class="btn btn-secondary" value="Submit">
					
					</form>









						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-4 contact">
				<div class="content-wrapper">
				<page-header>
				<h3>Connect with Me</h3>
				</page-header>
					<div class=:"row">
						<a href="https://github.com/msoroark" target="_blank">
							<img src="images/github.png"  alt="github"></a>
						<a  href="https://www.linkedin.com/in/megan-o-roark-a8291b140/" target="_blank">
							<img src="images/linkedin.png"  alt="linked in"></a>
						<a href="https://stackoverflow.com/users/6621067/meg-oroark" target="_blank">
							<img src="images/stackoverflow.png" alt="Stack Overfl" ></a>
					</div>
				</div>
			</div>		
			 
	</div>


	<footer class="dark-bg">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 footer-content">&copy; Copyright 2017 Meg O'Roark</div>
			</div>
		</div>
	</footer>


</body>
</html>
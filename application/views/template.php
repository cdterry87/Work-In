<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta lang="en" />
		<title>Work-In - Hate Working Out?  Work In!</title>
		<link rel="shortcut icon" href="<?php echo $this->path('public/images/favicon.png'); ?>" type="image/x-icon">
		<link href="<?php echo $this->path('public/node_modules/bulma/css/bulma.css'); ?>" rel="stylesheet">
		<link href="<?php echo $this->path('public/styles/style.css'); ?>" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo $this->path('public/fontawesome/css/font-awesome.min.css'); ?>">
	</head>
	<body>
		<nav class="nav">
			<div class="nav-left">
				<a class="nav-item" href="<?php echo $this->path(''); ?>">Work-In</a>
			</div>
		  
			<span class="nav-toggle">
			  <span></span>
			  <span></span>
			  <span></span>
			</span>
		  
			<div class="nav-right nav-menu">
				<div class="nav-item">
					<div class="control">
						<?php echo $this->anchor('login', 'Log In', 'class="button is-info is-outlined"'); ?>
						<?php echo $this->anchor('signup', 'Sign Up', 'class="button is-info"'); ?>
					</div>
				</div>
			</div>
		</nav>
		
		<div class="columns">
			<div class="column">
				<?php $this->view($page); ?>
			</div>
		</div>
		
		<footer class="footer">
			<div class="container">
				<div class="columns">
					<div class="column is-one-quarter">
						<div>
							<div class="field"><a href="#" class="is-link">Home</a></div>
							<div class="field"><a href="#" class="is-link">About Us</a></div>
							<div class="field"><a href="#" class="is-link">Press and News</a></div>
							
						</div>
					</div>
					<div class="column is-one-quarter">
						<div>
							<div class="field"><a href="#" class="is-link">Our Belief</a></div>
							<div class="field"><a href="#" class="is-link">Customer Support</a></div>
							<div class="field"><a href="#" class="is-link">Become a Trainer</a></div>
						</div>
					</div>
					<div class="column is-one-quarter">
						<div class="field"><a href="#" class="is-link">Legal Info</a></div>
						<div class="field"><a href="#" class="is-link">Terms of Use</a></div>
						<div class="field"><a href="#" class="is-link">Privacy Policy</a></div>
					</div>
					<div class="column is-one-half center">
						<a href="#"><i class="fa fa-facebook med-icon" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-twitter med-icon" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-youtube-play med-icon" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-instagram med-icon" aria-hidden="true"></i></a>
					</div>
				</div>
				<br/>
				<div class="content has-text-centered" id="copyright">
					&copy; Work-In by Chase Terry <?php echo date('Y'); ?>
				</div>
			</div>
		</footer>
	</body>
</html>
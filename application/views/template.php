<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta lang="en" />
		<title>Work-In - Hate Working Out?  Work In!</title>
		
		<link href="<?php echo $this->path('public/node_modules/bulma/css/bulma.css'); ?>" rel="stylesheet">
		<link href="<?php echo $this->path('public/styles/style.css'); ?>" rel="stylesheet">
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
				<?php echo $this->anchor('login', 'Log In', 'class="nav-item"'); ?>
				<?php echo $this->anchor('signup', 'Sign Up', 'class="nav-item"'); ?>
			</div>
		</nav>
		
		<div class="columns">
			<div class="column">
				<?php $this->view($page); ?>
			</div>
		</div>
		
		<footer class="footer">
			<div class="container">
				<div>
					<div class="field"><a href="#" class="is-link">Our Belief</a></div>
					<div class="field"><a href="#" class="is-link">Customer Support</a></div>
					<div class="field"><a href="#" class="is-link">Terms of Use</a></div>
					<div class="field"><a href="#" class="is-link">Privacy Policy</a></div>
				</div>
				<br/>
				<br/>
				<div class="content has-text-centered">
					&copy; WorkIn by Chase Terry <?php echo date('Y'); ?>
				</div>
			</div>
		</footer>
	</body>
</html>
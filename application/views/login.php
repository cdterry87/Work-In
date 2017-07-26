<div class="content">
	<div class="center">
		<h1 class="title is-3">LOG IN so you can start WORKING OUT!</h1>
		<h2 class="title is-4">Access hundreds of work out videos and stream them to the device of your choosing.</h2>
		<h2 class="title is-4">The only limits are in your mind! You've got this!</h2>
		
		<div id="login-form" class="box">
			<form action="<?php echo $this->path('account/main'); ?>" method="POST">
				<h2 class="title is-4">Account Log In</h2>
				<div class="field">
					<div class="control">
						<input class="input" type="text" placeholder="Email address">
					</div>
				</div>
				<div class="field">
					<div class="control">
						<input class="input" type="password" placeholder="Password">
					</div>
				</div>
				<label class="checkbox">
					<input type="checkbox"> Remember me
				</label>
				<div class="field">
					<div class="control">
						 <button class="button is-primary">Log In</button>
					</div>
				</div>
			</form>
			<div class="field">
				<a href="#" class="is-link">Help! I forgot my password!</a>
			</div>
			<div class="field">
				Don't have an account yet? <a href="<?php echo $this->path('signup'); ?>" class="is-link">Sign up now!</a>
			</div>
		</div>
	</div>
</div>

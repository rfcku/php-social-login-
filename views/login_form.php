<div class="row">
	<div class="col-md-4 col-md-offset-4">
	<h1 class="text-center">BrewThis</h1>
	<p class="text-center">Login</p>
		<form method="post">
			<div class="form-group">
				<label>Username:</label>
				<input class="form-control" name="username" type="text">
			</div>
			<div class="form-group">
				<label>Password:</label>
				<input class="form-control" name="password" type="password">
			</div>
			<div class="form-group">
				<button class="btn btn-success">LogIn</button><br/>
				<p>Don't have an account? <a href="register.php">Register</a></p>
			</div>
		</form>
		<br/>
		<p>Or login with</p>
		<?php foreach($logins as $key => $login):?>
			<a class="btn btn-primary" href="<?php echo $login["url"] ?>">
				<i class="fa fa-<?php echo($login["icon"]);?>"></i>
				<?php echo($login["name"]);?>
			</a>
		<?php endforeach;?>
	</div>
	
</div>
<code>
</code>
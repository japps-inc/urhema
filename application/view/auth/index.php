<div class="container">
	<div class="row">
		<div class="col-md-6">
			<img src="<?php echo Config::get('URL'); ?>img/ui.fw.png" class="ui">
		</div>
		<div class="col-md-6">
			<div class="space-lg"></div>
			<div class="space-lg"></div>
			
			<div class="auth-box text-center">
				<h1>Join the Community</h1>
				<p>Get unlimited access to messages, resources of ministries from around the would</p>
				
				<form class="animated zoomIn" id="signupForm">
					<div class="row">
						<div class="col-md-6">
							<label>First Name</label>
							<input type="text" name="" id="">
						</div>
						<div class="col-md-6">
							<label>Last Name</label>
							<input type="text" name="" id="">
						</div>
						<div class="col-md-12">
							<label>Email</label>
							<input type="email" name="" id="">
						</div>
						<div class="col-md-12">
							<label>Password</label>
							<input type="password" name="" id="">
						</div>
						<div class="col-md-12">
							<label>Confirm Password</label>
							<input type="password" name="" id="">
						</div>
						
						<div class="col-md-6">
							<button class="btn btn-primary">Sign up</button>
							<a href="javascript:;" id="goLogin">Login here</a>
						</div>
						
					</div>
				</form>
				
				<form class="hide animated zoomIn" id="loginForm">
					<div class="row">
						<div class="col-md-12">
							<label>Email</label>
							<input type="email" name="" id="">
						</div>
						<div class="col-md-12">
							<label>Password</label>
							<input type="password" name="" id="">
						</div>
						
						<div class="col-md-6">
							<button class="btn btn-primary">Login</button>
							<a href="javascript:;" id="goSignup">Signup here</a>
						</div>
						
					</div>
				</form>
				
			</div>
			
		</div>
	</div>
</div>
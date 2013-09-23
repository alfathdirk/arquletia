<div class="container">
	<?php if(isset($notice)){
		echo $notice;
	} ?>
	<form action="<?php echo ('login/forgot_password') ?>" method="post">
		<div id="ModalPass" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="ModalPassLabel" aria-hidden="true">
			<div class="modal-header blue">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<strong id="ModalPassLabel">Forgot Password</strong>
			</div>
			<div class="modal-body">
				<label for="">Please Enter Your Email</label>
				<input class="input input-block-level" type="text" name="email" placeholder="eg. someone@domain.com">
				<small>Please Enter a valid email Address</small>
			</div>
			<div class="modal-footer">
				<button class="btn btn-primary submit"><i class="icon-check icon-white"></i> Submit</button>
			</div>
		</div>
	</form>

	<div class="container">
		<form action="" method="post">
			<div class="inner300">
				<h2 class="icon_user">Login Babe !!!</h2>
				<span><label>Username</label><input class="input input-block-level" type="text" name="username" placeholder="Enter your username"></span>
				<span><label>Password</label><input class="input input-block-level" type="password" name="password" placeholder="Enter your account password"></span>
				<label class="checkbox">
					<input type="checkbox"> Remember My Credential
				</label>
				<br />

				<div class="button-panel pull-right">					
					<button class="btn btn-inverse" type="submit"><i class="icon-user icon-white"></i> Login</button>
					<div class="btn-group">
						<a class="btn btn-primary" href="#">Options</a>
						<a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#ModalPass" role="button" data-toggle="modal"><i class="icon-search"></i> Forgot Password</a></li>
							<li><a href="login/register" role="button" data-toggle="modal"><i class="icon-th-list"></i> Register</a></li>
						</ul>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>

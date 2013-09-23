<div class="container 	">
	<div class=" form">
		<?php if(isset($notice)){
			echo $notice;
		} ?>
		<form action="" method="post">
			<div class="inner700">
				<h1>Registration Form</h1>
				<span><label>Username</label><input class="input-block-level" type="text" name='username' placeholder="eg. johndoe" /></span>
				<span><label>Email</label><input class="input-block-level" type="text" name='email' placeholder="eg. you@domain.com" /></span>
				<label class="checkbox">
					<input type="checkbox"> I agree with all Terms &amp; Conditions
				</label>
				<br />
				<div class="button-panel pull-right lavender">					
					<button class="btn btn-success" type="submit"><i class="icon-check"></i> Submit</button>
					<a class="btn btn-primary" href="<?php echo site_url('login'); ?>" role="button" data-toggle="modal"><i class="icon-chevron-left icon-white"></i> Back to Login Form</a>
				</div>
			</div>
		</form>
	</div>
</div>

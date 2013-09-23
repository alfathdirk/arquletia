
<form action="" method="post" class="form-horizontal">
	<fieldset>
		<legend>Change Password</legend>
		<div class='control-group'>
			<label class='control-label' for="">Enter Your Password</label>
			<div class="controls">
			<input type="password" name="password">
			</div>
		</div>
		<div class='control-group'>
			<label class='control-label' for="">New Password</label>
			<div class="controls">
			<input type="password" name="new_password">
			</div>
		</div>
		<div class='control-group'>
			<label class='control-label' for="">Confirm Password</label>
			<div class="controls">
			<input type="password" name="re_password">
			</div>
		</div>

<!-- <hr> -->
		<div class="action-buttons">
			<a href="javascript:history.back()" class="btn btn-primary"><i class="icon-chevron-left"></i><?php echo 'Back' ?></a>
			<button type="btn btn-inverse submit" class="btn btn-inverse"><i class="icon-check"></i> Submit</button>
		</div>
	</fieldset>
</form>

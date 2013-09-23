	<ul class="breadcrumb">
		<li><a href="<?php echo site_url('user/user_main') ?>">HOME</a> <span class="divider">/</span></li>
		<li><a href="<?php echo site_url($this->uri->segment(1) . '/listing') ?>"><?php echo strtoupper($this->uri->segment(1)) ?></a> <span class="divider">/</span></li>
		<li class="active">Add</li>
	</ul>
	<form action="" method="post" class="form-horizontal">
		<fieldset>
			<legend><?php echo strtoupper($this->uri->segment(2)) . ' USER' ?></legend>
			<div class='control-group'>
				<label class='control-label'>Username</label>
				<div class="controls">

					<input  type="text" name='username' placeholder="eg. johndoe" value="<?php echo set_value('username',@$data['username'])?>"/>
				</div>
			</div>
			<?php if(empty($id)): ?>
			<div class='control-group'>
				<label class='control-label'>Password</label>
				<div class="controls">

					<input  type="password" name='password' placeholder="xxxxxx" />
				</div>
			</div>
			<div class='control-group'>
				<label class='control-label'>ReType Password</label>
				<div class="controls">

					<input  type="password" name='retype_password' placeholder="xxxxxx" />
				</div>
			</div>
		<?php endif ?>
		<div class='control-group'>
			<label class='control-label'>Email</label>
			<div class="controls">
				
				<input  type="email" name='email' placeholder="you@domain.com" value="<?php echo set_value('email',@$data['email'])?>" />
			</div>
		</div>
		<div class='control-group'>
			<label class='control-label'>Firstname</label>
			<div class="controls">
				
				<input  type="text" name='first_name' placeholder="eg. John"  value="<?php echo set_value('first_name',@$data['first_name'])?>" />
			</div>
		</div>
		<div class='control-group'>
			<label class='control-label'>Lastname</label>
			<div class="controls">
				
				<input  type="text" name='last_name' placeholder="eg. Doe" value="<?php echo set_value('last_name',@$data['last_name'])?>" />
			</div>
		</div>
		<div class='control-group'>
			<label class='control-label'>Gender</label>
			<div class="controls">
				
				<?php echo form_dropdown('gender', $gender,@$data['gender']); ?>
			</div>
		</div>
		<div class='control-group'>
			<label class='control-label'>Address</label>
			<div class="controls">
				
				<input  type="text" name='address' placeholder="eg. St. Kudus " value="<?php echo set_value('username',@$data['address'])?>" />
			</div>
		</div>
		<div class='control-group'>
			<label class='control-label'>Role</label>
			<div class="controls">
				
				<?php echo form_dropdown('role', $options,@$role['role_id']); ?>
			</div>
		</div>
		<div class="button-panel pull-right">
			<a href="javascript:history.back()" class="btn btn-primary"><i class="icon-chevron-left"></i><?php echo 'Back' ?></a>
			<button type="btn btn-inverse submit" class="btn btn-inverse"><i class="icon-check"></i> Submit</button>
		</div>
	</fieldset>
</form>
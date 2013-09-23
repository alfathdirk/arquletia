<ul class="breadcrumb">
	<li><a href="<?php echo site_url('user/user_main') ?>">HOME</a> <span class="divider">/</span></li>
	<li><a href="<?php echo site_url($this->uri->segment(1) . '/listing') ?>"><?php echo strtoupper($this->uri->segment(1)) ?></a> <span class="divider">/</span></li>
	<li class="active">Add</li>
</ul>

<fieldset>
	<legend><?php echo legend_show() ?></legend>
	<form action="" method="post" class="form-horizontal">
		<label for="">Create New Role</label>
		<input type="text" name="user_role" value="<?php echo set_value('user_role',@$data['user_role']) ?>">
		<input type="submit" value="Submit"  class="btn btn-small btn-primary">
	</form>
</fieldset>

<?php if ($id): ?>
	<fieldset>
		<legend><?php echo "Permission URL" ?></legend>
		<form action="<?php echo site_url('role/privilege') .'/'. $id?>" method="post" class="form-horizontal">
			<div>
				<label for="">Uri</label>
				<input type="text" name="uri">
			</div>
			<br>
			<input type="submit" value="add" class="btn btn-small btn-primary">
		</form>
		<table class="table">
			<tr>
				<td>Uri</td>
				<td>Action</td>
			</tr>

			<?php foreach ($ngapain as $role): ?>
			<tr>
				<td><?php echo$role['ngapain_aja'] ?></td>
				<td><a href="<?php echo site_url('role/privilege') .'/' .$id . '/' . $role['role_id']?>">Delete</a></td>
			</tr>			
		<?php endforeach ?>
	</table>
</fieldset>
<?php endif ?>
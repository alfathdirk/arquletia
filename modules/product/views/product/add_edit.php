
<?php if ($errors): ?>
	<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button>
		<center><?php echo $errors ?></center>
	</div>
<?php endif ?>

<ul class="breadcrumb">
	<li><a href="<?php echo base_url() ?>">HOME</a> <span class="icon-chevron-right"></span></li>
	<li><a href="<?php echo site_url('users/user_main') ?>">USER MAIN</a> <span class="icon-chevron-right"></span></li>
	<li><a href="<?php echo site_url($this->uri->segment(1) . '/listing') ?>"><?php echo strtoupper($this->uri->segment(1)) ?></a> <span class="icon-chevron-right"></span></li>
	<li class="active">Add</li>
</ul>

<form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
	<fieldset>
		<legend><?php echo legend_show() ?></legend>
		<div>
			<label for="">Title</label>
			<input type="text" name="title" value="<?php echo set_value('title',@$data['title']) ?>">
		</div>
		<div>
			<label for="">Category Product</label>
			<?php echo form_dropdown('category_id', $category_opt,@$cat_id['category_id']); ?>
		</div>

		<div>
			<label for="">Short Description</label>
			<input type="text" name="short_description" value="<?php echo set_value('short_description',@$data['short_description']) ?>">
		</div>
		<div>
			<label for="">Image thumbnail</label>
			<input type="file" name="images">
		</div>
		<div>
			<label for="">Pdf</label>
			<input type="file" name="pdf">
		</div>
		<div>
			<label for="">Description</label>
			<textarea name="description" class="ckeditor" id="editor1" cols="30" rows="10"><?php echo set_value('description',@$data['description']) ?></textarea>
		</div>

		<br>
		<div class="action-buttons pull-right">
			<a href="javascript:history.back()" class="btn btn-primary"><i class="icon-chevron-left"></i><?php echo 'Back' ?></a>
			<button type="btn btn-inverse submit" class="btn btn-inverse"><i class="icon-check"></i> Submit</button>
		</div>
	</fieldset>
</form>
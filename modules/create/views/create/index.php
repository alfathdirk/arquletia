
<?php if ($error): ?>
	<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button>
		<center><?php echo $error ?></center>
	</div>
<?php endif ?>
<form action="" method="post">
	<div>control</div>
	<input type="text" name="control">

	<?php echo form_dropdown('apps', $apps); ?>
	
	<table class="field">
		<tr>
			<td>Fields</td>
			<td>Type</td>
			<td>Length</td>
		</tr>
		<tr>
			<td><input type="text" name='field[]'></td>
			<td>
				<select name="type[]">
					<option value="INT">INT</option>
					<option value="VARCHAR">VARCHAR</option>
					<option value="TEXT">TEXT</option>
					<option value="DATE">DATE</option>
				</select>
			</td>
			<td><input type="text" name='length[]'></td>
		</tr>
	</table>
	<br>
	<div>
		<input type="submit">
		<span class="add_field"><i class="icon-plus"></i>Add Field</span>
	</div>
</form>

<script>
$(function() {
	$('.add_field').click(function(evt){
		// alert('asd');
		// console.log()
		$('.field tr:last').clone().appendTo('.field tbody');
		return evt.preventDefault();
	});
});
</script>
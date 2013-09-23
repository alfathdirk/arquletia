<script type="text/javascript">
$(function() {
	$('#add_field').click(function(evt) {

		$('#field_grid tr:last').clone().appendTo('#field_grid tbody');

		$('#field_grid').find("tr:nth-child(odd)").removeClass('even').removeClass('odd').addClass("odd");
		$('#field_grid').find("tr:nth-child(even)").removeClass('even').removeClass('odd').addClass("even");

		return evt.preventDefault(); 
	});
});
</script>

<form action="" method="post" enctype="multipart/form-data">
	
<table id="field_grid">
	<tr>
		<td>
			<input type="file" value="" name="images[]" class="field_field"/>
		</td>
	</tr>
</table>

<?php if (!$id): ?>
<a id="add_field" class="btn btn-mini btn-info"><i class="icon-plus"></i>Add More Photos</a> <br><br>
<?php endif ?>
<input type="submit" class="btn btn-submit">
</form>
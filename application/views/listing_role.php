<table class="table">
	<th>Number</th>
	<th>User Role</th>
	<th>Action</th>
	<?php $i = 1; ?>
	<?php foreach ($data as $value) : ?>
	<tr>
		<td><?php echo $i ?></td>
		<td><?php echo $value['user_role']; ?></td>
		<td>
			<a  href="#role-<?php echo $value['id'] ?>" role="button" class="btn btn-warning jajal" data-toggle="modal">
				<center>Role</center>
			</a>
			<a href="<?php echo site_url('role/delete\/')  . $value['id'] ?>">Delete</a>
			<div id="role-<?php echo $value['id']?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<div class="modal-body">
						<form action="privilege" method="post">
							<label for="">Uri Permisions</label>
							<input type="hidden" name="user_role" value="<?php echo $value['id'] ?>">
							<input type="text" name="uri">
							<input type="submit" class="btn btn-info" value="add">
						</form>
						<div  class="showit">
							<table class="table role">
								<tr>
									<td><center>Uri</center></td>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>
		</td>
		<?php $i++  ?>
	<?php endforeach; ?>
</table>

<script>

$(function(){


	$("a.jajal").click(function(e){
		var pattern = /#role-/

		var ar = $(this).attr('href')
		var xx =  ar.replace(pattern,'')		
		// var ambilID = 
		var url='http://localhost/arquletia/index.php/role/listing_role/' + xx;
		
		$.get(url,function(data) {
			var dats = JSON.parse(data);
			for (var i = 0; i < dats.length; i++) {
				$('.role').html("<tr><td>" + dats[i].ngapain_aja + "</tr></td>");

			};
			// return e.preventDefault();
			// $('.role').html(v.ngapain_aja)
			// $('.username').html(dats[0].username)
			// return e.preventDefault()
		});
	})
})

</script>

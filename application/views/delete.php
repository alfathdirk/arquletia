<form action="" method="get">
	
	<div id="ModalPass" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="ModalPassLabel" aria-hidden="true">
		<div class="modal-header blue">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<strong id="ModalPassLabel">Delete ?</strong>
		</div>
		<div class="modal-body">
			<label for="">Are You Sure Delete File id #<?php echo $this->uri->segment(3) ?></label>
		</div>
		<div class="modal-footer">
			<button class="btn btn-primary submit" name="confirm" value="yes"><i class="icon-check icon-white"></i>Yes</button>
			<a class="btn btn-primary submit" href="javascript:history.back()"><i class="icon-minus icon-white"></i> No</a></button>
		</div>
	</div>
</form>

<div class="wedew">
	<a href="#ModalPass" role="button" data-toggle="modal" class="mod">Wedew</a>
</div>

<script>
$(function(){
	$('div.wedew').hide();
	$('a.mod').click();
})
</script>
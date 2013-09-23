	<fieldset class="form-horizontal">
		<legend>Detail</legend>
		<?php foreach($data as $key => $val): ?>
		<div class="control-group">
			<label class="control-label"><?php echo str_replace('_', ' ', $key) ?></label>
			<div class="controls">
				<?php $exp = explode('.',$val) ?>
				<?php if (count(str_split($exp[0])) == 32): ?>
					<?php if (preg_match('/(jpg|jpeg|png|gif)/',@$exp[1] )): ?>
						<img src="<?php echo base_url('asset') . '/' . $val ?>" alt="">
					<?php endif ?>
				<?php else: ?>
		<?php echo $val ?>
	<?php endif; ?>
	</div>
</div>

<?php endforeach; ?>
<div class="action-buttons">
	<a href="javascript:history.back()" class="btn btn-primary"><i class="icon-chevron-left"></i><?php echo 'Back' ?></a>
</div>
</fieldset>
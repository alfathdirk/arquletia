<?php echo list_table($data) ?>

<div class="pagination pagination-right">
	<ul>
		<?php if($curPage > 1):?>
		<li><a href="<?php echo $linkPage  ?>">&laquo;</a></li>
		<li><a href="<?php echo $linkPage .'/' . ($curPage - 1); ?>">&lsaquo;</a></li>
	<?php endif; ?>

		<?php for ($i = ( $pages > 10 ) ? (( ($curPage + 2) >= $pages ) ? ($pages - 2):$curPage ) : 1 ;$i <= (($pages > 3) ? (( ($curPage + 2) >= $pages ) ? $pages:($curPage + 2) ) : $pages );$i++): ?>
		<li<?php if( $i == $curPage ) echo ' class="active"'; ?>><a href="<?php echo $linkPage .'/'. $i; ?>"><?php echo $i; ?></a></li>
	<?php endfor; ?>

		<?php if($curPage < $pages):?>
		<li><a href="<?php echo $linkPage .'/' . ($curPage + 1); ?>">&rsaquo;</a></li>
		<li><a href="<?php echo $linkPage .'/'. $pages; ?>">&raquo;</a></li>
	<?php endif; ?>
	</ul>
</div>
<style>
	.xxx{
		max-height: auto;
		min-width: 150px!important;
	}
</style>
<div class="container">
	<div class="eleven columns">
		<div class="row-fluid">
			<?php foreach ($all_blog as $blog): ?>
			<div class="span5">
					<a href=""><img src="<?php echo base_url('asset/'.$blog['images']) ?>" width="100"   ></a>
				<h3><a href="<?php echo site_url('product/detail') .'/' .$blog['id'] ?>"><?php echo $blog['title'] ?></a></h3>
				<div class="">
					<p><?php echo $blog['short_description'] ?></p>
					<a href="<?php echo site_url('product/detail') .'/' .$blog['id'] ?>" class="button">Read More</a>
				</div>
			</div>
		<?php endforeach ?>
	</div>

	<div class="pagination">
		<ul>
			<?php if($curPage > 1):?>
			<li><a href="<?php echo $linkPage .'/1' .'/' .$this->uri->segment(4)  ?>">&laquo;</a></li>
			<li><a href="<?php echo $linkPage .'/' . ($curPage - 1) .'/' .$this->uri->segment(4); ?>">&lsaquo;</a></li>
		<?php endif; ?>

		<?php for ($i = ( $pages > 2 ) ? (( ($curPage + 2) >= $pages ) ? ($pages - 2):$curPage ) : 1 ;$i <= (($pages > 3) ? (( ($curPage + 2) >= $pages ) ? $pages:($curPage + 2) ) : $pages );$i++): ?>
		<li<?php if( $i == $curPage ) echo ' class="current"'; ?>><a href="<?php echo $linkPage .'/'. $i .'/' .$this->uri->segment(4); ?>"><?php echo $i; ?></a></li>
	<?php endfor; ?>

	<?php if($curPage < $pages):?>
	<li><a href="<?php echo $linkPage .'/' . ($curPage + 1) .'/' .$this->uri->segment(4); ?>">&rsaquo;</a></li>
	<li><a href="<?php echo $linkPage .'/'. $pages.'/' .$this->uri->segment(4); ?>">&raquo;</a></li>
<?php endif; ?>
</ul>
</div>
<div class="clearfix"></div>
</div>
<div class="five columns">
	<div class="widget">
		<h4>About Us</h4>
		<p>Vivamus libero purus, consectetur sed tristique in, venenatis vitae dui. Proin non libero purus. Nam lobortis porta massa, vitae suscipit elit mollis quis. Suspendisse egestas condimentum mauris et luctus. Cras laoreet purus ac metus placerat consequat. Sed ornare tempus fringilla. Duis mollis vulputate semper. In hac habitasse platea dictumst. Donec lobortis egestas elit, sit amet interdum libero elementum eget. Mauris pretium quam vel augue volutpat convallis. Vestibulum fringilla nulla eu velit ullamcorper eu congue orci ultrices. Fusce tortor mi, condimentum sodales condimentum at, suscipit vel turpis.</p>
	</div>
	<div class="widget search">
		<i class="icon-search"></i>
		<input type="text" placeholder="Search">
	</div>
</div>
</div>
</div>
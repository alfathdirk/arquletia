<div class="container">
	<div class="sixteen columns center">
		<h3 class="line-header">
			Our Gallery
		</h3>
		<span class="sub">______________________</span>
		<span class="header-line"></span>
	</div>
	<div class="eleven columns bottom">
		<div class="flexslider">
			<ul class="slides">
				<?php foreach ($galleries as $gallery): ?>
					
				<li data-thumb="<?php echo base_url('asset') . '/'.$gallery['images'] ?>">
					<img src="<?php echo base_url('asset') . '/'.$gallery['images'] ?>" tppabs="http://www.ksdesigning.com/themes/new_wave/img/oldcar-big.jpg" />
				</li>
				<?php endforeach ?>
			</ul>
		</div>
		<div class="clearfix"></div>
	</div>

	<div class="five columns">
		<h4>Project Info</h4>
		<p>Nunc laoreet suscipit convallis. Cras ultrices, massa in porta ornare, urna tortor eleifend nunc, at venenatis arcu ipsum at arcu. Praesent volutpat varius risus id rutrum. Pellentesque scelerisque blandit diam non ornare. Donec quis leo nulla, sit amet varius nisi. Suspendisse eu sem neque, id venenatis nisi. Aliquam pharetra diam eget est consequat tincidunt. Ut tempor enim ut ligula consectetur cursus. Donec tristique cursus mauris, nec vehicula libero tempor sit amet. Donec vel massa nec quam ullamcorper egestas in in purus. Curabitur lobortis rhoncus fermentum. Cras et dignissim sapien. Nam vel dictum arcu. Pellentesque lorem nisl, volutpat sed porta sollicitudin, ullamcorper vestibulum est. Pellentesque eu sodales odio.</p>
		<div id="toggle">
			<div class="toggle">
				<h6>What exactly do we do?</h6>
				<div class="content">
					<p>Quisque et risus sapien. Quisque nibh magna, facilisis in interdum nec, pellentesque quis metus. Nam rhoncus diam ut lorem commodo egestas. Praesent bibendum elit et purus posuere vehicula. Nam bibendum elementum erat, non pharetra turpis scelerisque id.</p>
				</div>
			</div>
			<div class="toggle">
				<h6>How much do we charge?</h6>
				<div class="content">
					<p>Quisque et risus sapien. Quisque nibh magna, facilisis in interdum nec, pellentesque quis metus. Nam rhoncus diam ut lorem commodo egestas. Praesent bibendum elit et purus posuere vehicula. Nam bibendum elementum erat, non pharetra turpis scelerisque id.</p>
				</div>
			</div>
			<div class="toggle">
				<h6>Are we actually any good?</h6>
				<div class="content">
					<p>Quisque et risus sapien. Quisque nibh magna, facilisis in interdum nec, pellentesque quis metus. Nam rhoncus diam ut lorem commodo egestas. Praesent bibendum elit et purus posuere vehicula. Nam bibendum elementum erat, non pharetra turpis scelerisque id.</p>
				</div>
			</div>
		</div>
		<a href="#" class="button medium">Visit Site</a>
	</div>
</div>
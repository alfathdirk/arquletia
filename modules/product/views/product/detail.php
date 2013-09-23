<div class="container">
	<div class="eleven columns">
		<div class="post single">
			<!-- <div class="img-container">
				<img src="<?php //echo base_url('asset').'/'.$data['images'] ?>" alt="">
			</div> -->
			<div class="date">
				<i class="icon-calendar"></i>
				<div class="right">
					<?php $z = date("M Y",strtotime($data['created_time'])) ?>

					<?php $date = explode(' ',$z) ?>
					<span class="month"><?php echo $date[0] ?></span>
					<span class="day"><?php echo $date[1] ?></span>
				</div>
			</div>
			<h3><?php echo $data['title'] ?></h3>
			<div class="meta">
				<span>Posted by <a href="<?php echo site_url('contact') ?>">Vthrone</a></span>
			</div>
				<img src="<?php echo base_url('asset').'/'.$data['images'] ?>" alt="" style="float: left;padding-right: 26px;">
			<p><?php echo $data['description'] ?></p>
		</div>
	</div>

	<div class="five columns">
		<div class="widget">
			<h4>Related News</h4>
			<p>Vivamus libero purus, consectetur sed tristique in, venenatis vitae dui. Proin non libero purus. Nam lobortis porta massa, vitae suscipit elit mollis quis. Suspendisse egestas condimentum mauris et luctus. Cras laoreet purus ac metus placerat consequat. Sed ornare tempus fringilla. Duis mollis vulputate semper. In hac habitasse platea dictumst. Donec lobortis egestas elit, sit amet interdum libero elementum eget. Mauris pretium quam vel augue volutpat convallis. Vestibulum fringilla nulla eu velit ullamcorper eu congue orci ultrices. Fusce tortor mi, condimentum sodales condimentum at, suscipit vel turpis.</p>
		</div>
		<div>
			<h4>Contact Us</h4>
			<hr>
			<form id="ajax-form" action="" method="post" class="contact-form">
				<div class="input">
					<i class="icon-user"></i>
					<input type="text" name="name" id="name" placeholder="Name">
				</div>
				<div class="input">
					<i class="icon-envelop"></i>
					<input type="text" name="email" id="email" placeholder="Email">
				</div>
				<div class="message">
					<i class="icon-bubble"></i>
					<textarea name="message" id="message" placeholder="Message"></textarea>
				</div>
				<a href="#" id="send" class="button">Submit</a>
			</form>
		</div>
	</div>
	<div class="clearfix"></div>
</div>


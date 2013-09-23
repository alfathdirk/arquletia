<div class="container">
	<div class="eight columns">
		<img src="asd" width="120" alt="" style="float: left">
		<h3 style="float:left;width:427px">Our Mission</h3>
		<p style="text-align: left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras quis vulputate risus. Nunc at mi quam, eget convallis magna. Nunc a libero eu turpis lacinia luctus eu sit amet sem. Nulla quis nunc felis. Phasellus tempus accumsan lorem, a porta purus volutpat sed. Aliquam bibendum vestibulum est id pharetra. Curabitur dolor metus, ullamcorper id sollicitudin id, tempus sed turpis. Etiam interdum malesuada odio quis adipiscing. Sed et elit non metus imperdiet vulputate quis id quam. Pellentesque accumsan auctor urna ut consectetur. Suspendisse potenti.</p>
	</div>
	<div class="eight columns">
		<h3>Our Vision</h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras quis vulputate risus. Nunc at mi quam, eget convallis magna. Nunc a libero eu turpis lacinia luctus eu sit amet sem. Nulla quis nunc felis. Phasellus tempus accumsan lorem, a porta purus volutpat sed. Aliquam bibendum vestibulum est id pharetra. Curabitur dolor metus, ullamcorper id sollicitudin id, tempus sed turpis. Etiam interdum malesuada odio quis adipiscing. Sed et elit non metus imperdiet vulputate quis id quam. Pellentesque accumsan auctor urna ut consectetur. Suspendisse potenti.</p>
	</div>
	<div class="clearfix"></div>
	<div class="spacer"></div>
	<div class="sixteen columns center">
		<h3 class="line-header">
			Our Team
		</h3>
		<span class="sub">Get to Know Us</span>
		<span class="header-line"></span>
	</div>




	<?php foreach ($members as $member): ?>
	
	<div class="four columns">
		<div class="member">
			<div class="img-container">
				<img src="<?php echo base_url('asset/member') .'/'.$member['images'] ?>" alt="">
				<div class="mask">
					<span>Follow Me</span>
					<ul class="social">
						<li><a href="<?php echo "https://twitter.com" .'/'.$member['twitter'] ?>"><i class="icon-twitter"></i></a></li>
						<li><a href="<?php echo "https://facebook.com" .'/'.$member['facebook'] ?>"><i class="icon-facebook"></i></a></li>
					</ul>
				</div>
			</div>
			<div class="center">
				<h5 class="line-header">
					<?php echo $member['name'] ?>
				</h5>
				<span class="sub"><?php echo $member['position'] ?></span>
				<span class="header-line"></span>
				<p><?php echo $member['description'] ?></p>
			</div>
		</div>
	</div>
<?php endforeach ?>



</div>
<!-- <div style="width: 60px; height: 10px display: table; float: left;" class="red">&nbsp;</div>
<div style="width: 60px; height: 10px display: table; float: left;" class="dark-red">&nbsp;</div>
<div style="width: 60px; height: 10px display: table; float: left;" class="green">&nbsp;</div>
<div style="width: 60px; height: 10px display: table; float: left;" class="dark-green">&nbsp;</div>
<div style="width: 60px; height: 10px display: table; float: left;" class="blue">&nbsp;</div>
<div style="width: 60px; height: 10px display: table; float: left;" class="dark-blue">&nbsp;</div>
<p>&nbsp;</p> -->
<html lang="en">
<head>
	<title><?php echo  (!$this->uri->segment(2)) ? "Arquletia " .$this->uri->segment(1) : $this->uri->segment(2) ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="keywords" content="arquletia, ci-framework, bootstrap-framework">
	<meta name="author" content="RAS Logic">

	<!-- stylesheets -->
	<link href="<?php echo themes_url('css/bootstrap.css') ?>" rel="stylesheet" type="text/css">
	<link href="<?php echo themes_url('css/bootstrap-responsive.css') ?>" rel="stylesheet" type="text/css">  
	<link href=" <?php echo themes_url('css/arquletia.css') ?>" rel="stylesheet" type="text/css">
	<link href=" <?php echo themes_url('css/typograph.css') ?>" rel="stylesheet" type="text/css">  
	<link href="<?php echo themes_url('css/bootstrap-responsive.css') ?>" rel="stylesheet" type="text/css">  
	<link href=" <?php echo themes_url('css/arquletia-responsive.css') ?>" rel="stylesheet" type="text/css">
	
	<script src="<?php echo themes_url('js/jquery-1.9.1.min.js') ?>" type="text/javascript"></script>
	<script src="<?php echo themes_url('js/bootstrap.min.js') ?>" type="text/javascript"></script>
	
</head>

<div class="container-fluid">
	<?php if(isset($notice)){
		echo $notice;
	} ?>
	<form action="" method="get">
		<div id="ModalPass" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="ModalPassLabel" aria-hidden="true">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 id="ModalPassLabel">Forgot Password</h4>
			</div>
			<div class="modal-body">
				<label for="">Please Enter Your Email</label>
				<input type="text" name="email">
			</div>
			<div class="modal-footer">
				<button class="btn btn-primary submit">Submit</button>
			</div>
		</div>
	</form>
	<div class="span4 offset4 form">
		<form action="" method="post">
			<div class="form-inner dark-gray">
				<h1 class="headings">Login Form</h1>			
				<span><input class="input-xlarge" type="text" name="username" placeholder="Username"></span>
				<span><input class="input-xlarge" type="password" name="password" placeholder="Password"></span>
				<p>You may put some instruction about form here, or something that can make users can login easily.</p>
			</div>
			<div class="button-panel">					
				<button type="submit"><i class="icon-user icon-white"></i> Submit</button>

			</div>
		</form>

		<!-- Modal -->
	</div>
</div>
<div id="footer">
	<div class="container-fluid">
		<div class="span8">
			<p><strong>Arquletia Framework &amp; UI Kit</strong> | <?php echo date('M Y'); ?><sup>&copy;</sup></p>
		</div>
		<div class="span3 pull-right ras">
			<p>Powered by <a href="<?php echo base_url(); ?>" title="RAS">RAS Logic</a></p>
		</div>
	</div>
</div>

<!-- stylesheets -->
</body>
</html>
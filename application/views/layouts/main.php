<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo  (!$this->uri->segment(2)) ? "Arquletia " .$this->uri->segment(1) : "Arquletia : ". preg_replace('(_|-)', ' ', $this->uri->segment(2)) . ' - ' . $this->uri->segment(1) ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="keywords" content="arquletia, ci-framework, bootstrap-framework">
  <meta name="author" content="RAS Logic">
  
  <!-- stylesheets -->
  <link href="<?php echo themes_url('default/css/arquletia.css') ?>" rel="stylesheet" type="text/css">
  <link href="<?php echo themes_url('default/css/arquletia-responsive.css') ?>" rel="stylesheet" type="text/css">  
  <link href="<?php echo themes_url('default/css/flat-icons.css') ?>" rel="stylesheet" type="text/css">  
  
  <script src="<?php echo themes_url('default/js/jquery-1.7.2.min.js') ?>" type="text/javascript"></script>
  <script src="<?php echo themes_url('default/js/bootstrap.js') ?>" type="text/javascript"></script>
  <script src="<?php echo themes_url('default/js/arq.js') ?>" type="text/javascript"></script>
  <!--[if lt IE 9]> <script src="//js/html5.js"></script> <![endif]-->

  <script src="<?php echo themes_url('ckeditor/ckeditor.js') ?>"></script>

  
</head>

<body >
  <?php 
  $aray = array('role','users','add_edit','listing');
  ?>
  <?php if($this->session->userdata('usr_id') && in_array($this->uri->segment(1) || $this->uri->segment(2),$aray)): ?>
  <div class="navbar  navbar-inverse navbar-fixed-top ">
    <div class="navbar-inner">
      <div class="container">
        <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        <a class="brand" href="<?php echo base_url() ?>" >Arquletia</a>
        <ul class="dropdown-menu" role="menu" aria-labelledby="dropuser">
        </ul>

        <div class="nav-collapse collapse">

          <ul class="nav">
            <li class="">
              <a href="<?php echo site_url('users/user_main') ?>">Home</a>
            </li>
            <li class="dropdown">
              <a href="#" id="drop2" role="button" class="dropdown-toggle" data-toggle="dropdown">System <b class="caret"></b></a>
              <ul class="dropdown-menu" role="menu" aria-labelledby="drop2">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo site_url('users/listing') ?>">User</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo site_url('role/listing'); ?>">Role</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo site_url('users/change_password'); ?>">Change Password</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo site_url('users/logout') ?>">Logout</a></li>
              </ul>
            </li>
          </ul>

          <ul class="nav pull-right">
            <li class="divider-vertical"></li>
            <li class="dropdown" ng-class="{open: open}">
              <a class="dropdown-toggle" data-toggle="dropdown" ng-click="open=!open" href=""><i class="icon-user icon-white"></i>&nbsp; <?php echo $this->session->userdata('username'); ?></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo site_url('users/change_password'); ?>"><i class="icon-lock"></i> Change Password</a></li>
              <?php if($this->session->userdata('username') == 'admin'): ?>
                <li><a href="<?php echo site_url('role/listing_role'); ?>"><i class="icon-list-alt"></i> User Role Setting</a></li>
              <?php endif; ?>
              <li class="divider"></li>
              <li><a href="<?php echo site_url('users/logout') ?>"><i class="icon-remove-circle"></i> Logout</a></li>
            </ul>
          </li>
        </ul>

      </div>
    </div>
  </div>
</div>
<div class="fixed-navbar-clear"></div>
<?php endif ?>


<div class="container layout">
  <?php echo widget_view($this->_view,$this->_var) ?>
</div>

<div class="sticky-footer-clear"></div> <!-- clear your sticky footer -->

<footer class="sticky-footer">
  <div class="container row-fluid">
    <div class="span8">
      <div><strong>Arquletia Framework &amp; UI Kit</strong> | <?php echo date('M Y'); ?><sup>&copy;</sup></div>
    </div>
    <div class="span3 pull-right ras">
      <div>Powered by <a href="<?php echo base_url(); ?>" title="RAS">RAS Logic</a></div>
    </div>
  </div>
</footer>

<!-- stylesheets -->
</body>
</html>
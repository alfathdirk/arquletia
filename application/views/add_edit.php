
<?php if ($errors): ?>
	<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button>
		<center><?php echo $errors ?></center>
	</div>
<?php endif ?>

<ul class="breadcrumb">
	<li><a href="<?php echo base_url() ?>">HOME</a> <span class="icon-chevron-right"></span></li>
	<li><a href="<?php echo site_url('users/user_main') ?>">USER MAIN</a> <span class="icon-chevron-right"></span></li>
	<li><a href="<?php echo site_url($this->uri->segment(1) . '/listing') ?>"><?php echo strtoupper($this->uri->segment(1)) ?></a> <span class="icon-chevron-right"></span></li>
	<li class="active">Add</li>
</ul>

<!-- kalo mau mandatory tambahin echo "<span class='add-on'><i class='icon-asterisk'></i></span>"; -->

<form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
	<fieldset>
		<legend><?php echo legend_show() ?></legend>
		<?php foreach ($field_data as $key => $value) {
			$names = set_value($value->name,@$data[$value->name]); 
			$z = str_replace('_',' ', $value->name) ;
			if(preg_match('/(varchar|char)/',$value->type) && !preg_match('/(images|image|img|pdf)/',$value->name)){
				echo "<div class='control-group'>";
				echo "<label class='control-label'>" . $z . "</label>";
				echo "<div class='controls'>";
				echo "<input type='text' " . "value='" . $names .  "' name='" . $value->name . "' placeholder='".$z. "'>";
				echo "</div>";
				echo "</div>";
			}

			if(preg_match('/(images|image|img)/',$value->name)){
				echo "<div class='control-group'>";
				echo "<label class='control-label'>" . $z . "</label>";
				echo "<div class='controls'>";
				echo "<input type='file' " . " value='" . $names .  "' name= '" . $value->name . "'>";
				echo "</div>";
				echo "</div>";
			}

			if(preg_match('/(pdf)/',$value->name)){
				echo "<div class='control-group'>";
				echo "<label class='control-label'>" . $z . "</label>";
				echo "<div class='controls'>";
				echo "<input type='file' " . " value='" . $names .  "' name= '" . $value->name . "'>";
				echo "</div>";
				echo "</div>";
			}

			if($value->type == 'text'){
				echo "<div class='control-group'>";
				echo "<label class='control-label'>" . $z . "</label>";
				echo "<div class='controls'>";
				echo "<textarea class='ckeditor' id='editor1' " . " name= '" . $value->name . "'>". $names . "</textarea>";
				echo "</div>";
				echo "</div>";
			}

			if($value->type == 'int' && ($value->name !== 'id')){
				echo "<div class='control-group'>";
				echo "<label class='control-label'>" . $z . "</label>";
				echo "<div class='controls'>";
				echo "<input type='text' " . "value='" . $names .  "' name='" . $value->name . "'>";
				echo "</div>";
				echo "</div>";
			}

			if($value->type == 'date'){
				echo "<div class='control-group'>";
				echo "<label class='control-label'>" . $z . "</label>";
				echo "<div class='controls'>";
				echo xform_date($value->name,@$data[$value->name]);
				// echo "<input type='text' " . "value='" . $names .  "' name='" . $value->name . "'>";
				echo "</div>";
				echo "</div>";
			}

			// if(preg_match('/(created_time|updated_time)/',$value->name)){

			// }


	// }
	// xlog($value,1);
		} 

		?>
		<br>
		<div class="action-buttons pull-right">
			<a href="javascript:history.back()" class="btn btn-primary"><i class="icon-chevron-left"></i><?php echo 'Back' ?></a>
			<button type="btn btn-inverse submit" class="btn btn-inverse"><i class="icon-check"></i> Submit</button>
		</div>
	</fieldset>
</form>
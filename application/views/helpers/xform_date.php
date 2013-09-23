	<script type="text/javascript" src="<?php echo themes_url('default/js/datepicker.js') ?>"></script> 
	<link rel="stylesheet" media="screen" type="text/css" href="<?php echo themes_url('default/css/datepicker.css') ?>" />

<?php $dates = (@$data[$name] == null) ? date('Y-m-d') : $data[$name] ?>
<input class="inputDate" id="inputDate" value="<?php echo set_value(date('Y-m-d'), $dates)?>" name="<?php echo $name ?>">

<script type="text/javascript">
	$('#inputDate').DatePicker({
	format:'Y-m-d',
	date: $('#inputDate').val(),
	current: $('#inputDate').val(),
	starts: 1,
	position: 'r',

	onBeforeShow: function(){
		$('#inputDate').DatePickerSetDate($('#inputDate').val(), true);
	},
	onChange: function(formated, dates){
		$('#inputDate').val(formated);
		if ($('#closeOnSelect input').attr('checked')) {
			$('#inputDate').DatePickerHide();
		}
	}
});
</script>
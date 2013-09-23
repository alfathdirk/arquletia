<!-- ini buat breadcrumb -->

<ul class="breadcrumb">
	<li><a href="<?php echo site_url('users/user_main') ?>">HOME</a> <span class="divider">/</span></li>
	<li><a href="<?php echo site_url($this->uri->segment(1) . '/listing') ?>"><?php echo strtoupper($this->uri->segment(1)) ?></a> <span class="divider">/</span></li>
	<li class="active"><?php echo strtoupper($this->uri->segment(2)) ?></li>
</ul>

<!-- tugas syahrul -->


<!-- end buat breadcrumb -->
<div class="pull-right">
	<a href="<?php echo site_url($this->uri->segment(1). '/add')  ?>" class="btn btn-warning"><i class="icon-pencil"></i>Add <?php echo $this->uri->segment(1) ?></a>
</div>
<br>
<br>
<hr>
<!-- tableing -->
<?php 

foreach ($datas as $key => $value) {
	@$ar = array_keys($value);
}

echo '<table class="table">';
if ($datas){
	for ($i=1; $i < count(@$ar); $i++) { 

		echo "<th>" ;

		$exploded = explode('_', $ar[$i]);


		for ($sp=0; $sp < count($exploded) ; $sp++) { 

			$split = str_split($exploded[$sp]);
		// xlog($split,1);
			echo strtoupper($split[0]);
			for ($lo=1; $lo < count($split); $lo++) { 
				echo $split[$lo] ;
			}
			echo " ";
		}
		"</th>";
	}

	echo "<th>" .'action'. "</th>";

	for ($z=0; $z < count($datas); $z++) { 
		echo "<tr>";
		for ($x=1; $x < count(@$ar); $x++) {
		// echo "<td>" . $datas[$z][@$ar[$x]] . "</td>";
			$plod = explode('.',$datas[$z][@$ar[$x]]);
		// xlog($plod,1);

			if(count($plod) > 4){
				echo "<td>";
			// echo "dont show";
				for ($op=0; $op < 3; $op++) { 
					echo $plod[$op];
				}
				echo "....";
				echo  "</td>";
			} else {
				echo "<td>" . $datas[$z][@$ar[$x]] . "</td>";
			}
		}
		echo "<td><a href='" . site_url($this->uri->segment(1) . '/edit') .'/' . $datas[$z]['id'] ."'>Edit | " . "<a href='" . site_url($this->uri->segment(1) . '/delete').'/' . $datas[$z]['id'] ."'>Delete"  . "<a href='" . site_url($this->uri->segment(1) . '/detail').'/' . $datas[$z]['id'] ."'>Detail" .'</td>';
		echo "</tr>";

	}
} else {
	echo "<th><center>No Data Found</center></th>";
}

echo '<table>';



?>
<!-- bikin pagination -->

<div class="pagination pagination-right">
	<ul>
		<?php if($curPage > 1):?>
		<li><a href="<?php echo $linkPage . '/1' ?>">&laquo;</a></li>
		<li><a href="<?php echo $linkPage .'/' . ($curPage - 1); ?>">&lsaquo;</a></li>
	<?php endif; ?>

	<?php for ($i = ( $pages > 2 ) ? (( ($curPage + 2) >= $pages ) ? ($pages - 2):$curPage ) : 1 ;$i <= (($pages > 3) ? (( ($curPage + 2) >= $pages ) ? $pages:($curPage + 2) ) : $pages );$i++): ?>
	<li<?php if( $i == $curPage ) echo ' class="active"'; ?>><a href="<?php echo $linkPage .'/'. $i; ?>"><?php echo $i; ?></a></li>
<?php endfor; ?>

<?php if($curPage < $pages):?>
	<li><a href="<?php echo $linkPage .'/' . ($curPage + 1); ?>">&rsaquo;</a></li>
	<li><a href="<?php echo $linkPage .'/'. $pages; ?>">&raquo;</a></li>
<?php endif; ?>
</ul>
</div>

<script>
$(function() {

	if (typeof(selector) == 'undefined') {
		selector = 'body';
	}

	$(selector).find("a, li, td, tr, span, input, button").hover(function () {
		$(this).addClass("hover");
	}, function () {
		$(this).removeClass("hover");
		$(this).removeClass('pressed');
	});
	
	$('tr').find('a:last-child').hide()
	$('tr').click(function(){

		var x = $(this).find('a:last-child').attr('href');	
			// console.log(x);
			
			self.location = x
			return x;
		});
});
</script>

<style>
tr:nth-child(even).hover td:first-child.hover:hover {
	background: #ccc;
	cursor:pointer;
	text-decoration: underline;
	/*min-width: 100px!important;*/
}
tr:nth-child(odd).hover td:first-child.hover:hover {
	text-decoration: underline;
	background: #ccc;
	cursor:pointer;
}

tr:nth-child(even) td:first-child {
	min-width: 200px!important;
}
tr:nth-child(odd) td:first-child {
	min-width: 200px!important;
}
</style>
<!-- end  pagination -->

<ul>
<?php
$months = [
	 	'January',
	 	'February',
	 	'March',
	 	'April',
	 	'May',
	 	'June',
	 	'July',
	 	'August',
	 	'September',
	 	'October',
	 	'November',
	 	'December'
];

	$lastMonth = 0;
	$lastDay = 0;
	foreach($datas as $data):
?>

		<?php if ($lastMonth != $data['month']) echo "<h1>".$months[$data['month']-1]."</h1>" ?>

		<h2><?php if ($lastDay 	!= $data['day']) echo $data["day"] ?></h2>
		
		<p><a>✐</a> <?=$data["person"]?> (<?=$data["year"]?>) <a>✖</a></p>
		
		<?php 
			if 	($lastMonth == $data['month']) $lastDay = $data['day'];
			else $lastDay = 0;
			
		?>	     
	
	<?php 
		$lastMonth = $data['month'];
		endforeach;
	?>
</ul>
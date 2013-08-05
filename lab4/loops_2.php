<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Practical 2.2 PHP</title>
<style>
	body{
	<?php
		$red = rand(0, 255);
		$blue = rand(0, 255);
		$green = rand(0, 255);
		
		echo "background-color: rgb($red, $green, $blue);";	
	?>
	}
</style>

	<?php
		$length = rand(1, 26);	
	?>
</head>
<body>

<?php
	$br = "<br />";
	$dino = "<img src=\"angryDino.gif\" alt=\"Angry Dino\" width=\"54\" height=\"64\"/>";
	$penguin = "<img src=\"happyPenguin.gif\" alt=\"Happy Penguin\" width=\"54\" height=\"64\"/>";
	
	for($row = 0; $row < 10; $row++) {
		for($col = 0; $col < 10; $col++) {
			echo ($row % 2 == 0) ? $dino : $penguin;
		}
		echo $br;		
	}
?>

<p>BACKGROUND COLOR: 
<?php
	echo "$red, $blue, $green"
?>
</p>

<table>
	<tr>
		<th>Index</th>
		<th>Value</th>
	</tr>
	<?php
		for($i = 0; $i < $length; $i++) {
		echo "
		<tr>
			<td>$i</td>
			<td>".rand(0,101)."</td>					
		</tr>";
	}
		
	?>
</table>

</body>
</html>
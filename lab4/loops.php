<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="styles.css"/>
<meta charset="utf-8" />
<title></title>
</head>
<body>
<?php
	$br = "<br />";

	echo("Question 1".$br);

	for($i = 1; $i < 6; ++$i){
		echo($br.$i);
	}

	echo($br.$br. "Question 2".$br);
		
	echo($br.$_SERVER['PHP_SELF'].$br);
	echo($_SERVER['SERVER_NAME'].$br);

	echo($br."Question 3".$br.$br);
	$_ANIMALS = array("Horse","Dog","Sheep","Flamingo", "Hippo");


	foreach($_ANIMALS as $value){
		echo($value.$br);		
	}

	
	echo($br.$br."Question 4".$br.$br);

	echo("<table>");
	echo("<tr>");
        echo("<td class='cell'>Location</td>");
        echo("<td class='cell'>Animal</td>");
        echo("</tr>");
		
	foreach($_ANIMALS as $key=>$value){
		echo("<tr>");
		echo("<td class='cell'>".$key."</td>");
		echo("<td class='cell'>".$value."</td>");
		echo("</tr>");			
	}
	echo("</table>");

?>


</body>
</html>

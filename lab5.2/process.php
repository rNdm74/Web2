<html>
<head>
<title>Form Processing</title>
</head>
<body>
<table>
	<tr><th>Input</th><th>Value</th></tr>
	<?php
		foreach($_POST as $field=>$value)
		{
			if($field != 'submit')
			{
				if($field == 'fruit')
				{
					foreach($value as $chosenFruit)
					{
						echo("<tr><th>fruit</th><th>$chosenFruit</th></tr>");	
					}
				}
				else
				{
					echo("<tr><th>$field</th><th>$value</th></tr>");
				}				
			}		
		}	
	?>

</table>
</body>

</html>

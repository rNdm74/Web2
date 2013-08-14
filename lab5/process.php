<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<title>Form Processing</title>
	<link rel="stylesheet" type="text/css" href="style.css"/>
</head>

<body>
	<h1> Quiz Feedback </h1>
	<table>
		<?php
			/*foreach($_POST as $field=>$value)
			{				
				if($field != 'submit')
				{
					if($field == 'games')
					{
						foreach($value as $g)
						{
							echo("<tr><th>game</th><th>$g</th></tr>");	
						}
					}
					else
					{
						echo("<tr><th>$field</th><th>$value</th></tr>");
					}				
				}		
			}*/
			
			$answer1 = $_POST['question1'];
			$answer2 = $_POST['question2'];
			$answer3 = $_POST['question3'];
			$answer4 = $_POST['question4'];
			$answer5 = $_POST['question5'];
			
			$correctAnswers = array();
			
			$correct = "CORRECT";
			$wrong = "WRONG";
			
			
			echo('<br>');			
			
			if (!in_array('athens',$answer4))
			{
				array_push($answer4,'Missing athens');
			}
		
			if (!in_array('beijing',$answer4))
			{
				array_push($answer4,'Missing beijing');
			}
		
			if (!in_array('sydney',$answer4))
			{
				array_push($answer4,'Missing sydney');
			}
		
			array_push($correctAnswers, ($answer1 == 205) ? $correct : $wrong);
			array_push($correctAnswers, ($answer2 == 'shooting') ? $correct : $wrong);
			array_push($correctAnswers, ($answer3 == 'italy') ? $correct : $wrong);
			
			foreach($answer4 as $a)
			{
				array_push($correctAnswers, ($a == 'athens'	||	$a == 'beijing'||	$a == 'sydney') ? $correct : $wrong);								
			}
		
			array_push($correctAnswers, ($answer5 == 'baseball') ? $correct : $wrong);
			
			foreach($correctAnswers as $field=>$value)
			{
				echo("<tr><th class='cell'>Question $field</th><th class='cell'>$value</th></tr>");
			}
			
			$score = sizeof($correctAnswers);
			
			echo("<tr><th class='cell'>Total score</th><th class='cell'>$score</th></tr>");
		?>
	</table>
</body>

</html>

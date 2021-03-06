<!DOCTYPE html>
<html>
	<head>
		<title>Form Elements</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="style.css"/>
	</head>

	<body>
	
		
		<?php
			echo("<img src='pizzaBanner.jpg' alt='pizza' >");
		
			if (isset($_POST['submit']))
			{
				processForm();
			}
			else if(isset($_POST['confirm']))
			{
				confirmForm();
			} 
			else
				//hasn’t yet been submitted, display the form
			{
				showForm();
			}
		
			function processForm() 
			{
				$self = htmlentities($_SERVER['PHP_SELF']);
				
				echo(
				"					
				   <fieldset>
					<legend>You order details</legend>					
					<table >					
				");

				foreach($_POST as $field=>$value)
				{
					if ($field != 'submit')
					{
						if(is_array($value))
						{
							foreach($value as $toppings)
							{
								echo("
					     			<tr>
					     			<td>$field</td><td>$toppings</td>
					     			</tr>");							
							}
						}
						else
						{
				     		echo("
				     			<tr>
				     			<td>$field</td><td>$value</td>
				     			</tr>");
			     		}
					}
				}
			
				echo("</table>");
				
				
				switch ($_POST['size'])
				{
				case 'small':
				  $cost = 5;
				  break;
				case 'medium':
				  $cost = 10;
				  break;
				default:
				  $cost = 15;
				}	
					
				$cost += sizeof($_POST['toppings']);
				
				echo("
										
					<form action = '$self' method='POST'>
					<input type='hidden' name='order' value='$cost'>	
					<p>Total Cost is $$cost</p>								
			  		<input type='submit' name='cancel' value = 'Cancel Order'>
			  		<input type='submit' name='confirm' value = 'Confirm Order'>
			  		</fieldset>
			  		</form>
			  	");
			}
			
			function showForm() 
			{
				$self = htmlentities($_SERVER['PHP_SELF']);
				
				echo("<form action = '$self' method='POST'>
				  <fieldset>
					<legend>Place your order</legend>
		
				  <p>Size:</p>
				  <input type = 'radio' name='size' value = 'small'>Small ($5)<br>
				  <input type = 'radio' name='size' value = 'medium'>Medium ($10)<br>
				  <input type = 'radio' name='size' value = 'large'>Large ($15)<br>
				  
				  <p>Please Select Your Toppings ($1 for each topping):</p>
				  <input type='checkbox' name='toppings[]' value='pepperoni'> Pepperoni <br>
				  <input type='checkbox' name='toppings[]' value='mushrooms'> Mushrooms <br>
				  <input type='checkbox' name='toppings[]' value='capsicum'> Capsicum <br>
				  <input type='checkbox' name='toppings[]' value='olives'> Olives <br>
				  <input type='checkbox' name='toppings[]' value='anchovies'> Anchovies <br>
				  
				  
		
				  <p>Delivery Address: 
				  <input type='text' name='address'>
				  <br>
				  <input type='submit' name='submit' value = 'Place Order'>
				  </fieldset>
				  </form>");
			}	
			
			function confirmForm() 
			{
				$self = htmlentities($_SERVER['PHP_SELF']);
				
				$confirmCost = $_POST['order'];
				
				echo("<form action = '$self' method='POST'>
				  <fieldset>
					<legend>Order Complete</legend>
		
				  <p>You order is being delivered.</p>
				  
				  <p>Thank you for your order.</p>

				  <p>Have ready your $confirmCost dollars</p>
				  
				  <br>
				  <input type='submit' name='cancel' value = 'New Order'>
				  </fieldset>
				  </form>");
			}	
		?>
	</body>
</html>
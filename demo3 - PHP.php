<html>
<head>
	<title>My First Web Page</title>
</head>
<body align = 'center'>
<h1>
<?php
	//This is a single line comment
	/*This
	  is 
	  a 
	  multiline
	  comment*/
	  
	//Equality and Inequality
	$a = "2";
	$b = "+2";
	$month = 'December';
	
	if ($a == $b) echo 'a is equal to b <br>';
	if ($month == 'December') echo 'It is Christmas time <br>';
	echo "<br>";
	
	//Comparison Operators
	$c = 2;
	$d = 3;
	
	if ($c > $d) echo 'c is greater than d <br>';
	if ($c < $d) echo 'c is less than d <br>';
	if ($c >= $d) echo 'c is greater than or equal to d <br>';
	if ($c < $d) echo 'c is less than or equal to d <br>';
	echo "<br>";
	
	//Logical Operators
	$e = 1;
	$f = 0;

	if ($e and $f) echo 'True <br>';
	if ($e or $f) echo 'OR: True <br>';
	if ($e xor $f) echo 'XOR: True <br>';
	echo "<br>";
	
	//Conditionals
	//if
	$bank_balance = 90;
	if ($bank_balance < 100)
	{
		$money = 1000;
		$bank_balance += $money;
	}
	echo "Bank Balance: $bank_balance <br>";
	
	//if else
	$bank_balance = 101;
	$savings = 0;
	if ($bank_balance < 100)
	{
		$money = 1000;
		$bank_balance += $money;
	}
	else
	{
		$savings += 50;
		$bank_balance -= 50;
	}
	echo "Bank Balance: $bank_balance <br>";
	echo "<br>";
	
	//switch statement
	$page = 'qwerty';
	switch ($page)
	{
		case 'Home':
			echo 'You selected Home <br>';
			break;
		
		case 'Login':
			echo 'You selected Login <br>';
			break;
		
		case 'Links':
			echo 'You selected Links <br>';
			break;
		
		default:
			echo 'None of the choices is correct <br>';
	}
	echo "<br>";
	
	//? operator
	$fuel = 1;
	echo $fuel <= 1? 'Fill tank now' :"There's enough fuel";
?>
</h1>
</body>
</html>
<html>
<head>
	<title>
		This is my first webpage
	</title>
</head>
<body bgcolor = "white">
<p>This HTML will get delivered as is</p>
<?php
	echo "<p>But this code is interpreted by PHP and turned into HTML</p>";
	
	$name = "Ian Noel M. Banta";
	$age = 21;
	
	//This is a one line comment
	
	echo "My name is $name. I am $age years old. <br>" ;
	
	/*
	echo "wow";
	echo "wow"; //This is a multiline comment
	echo "wow";
	*/
	
	$sum = 1 + 1;
	echo "<br> 1 + 1 = $sum<br>";
	
	$num1 = 6;
	$num2 = 2;
	$sum2 = $num1 + $num2;
	
	echo "6 + 2 = $sum2<br><br>";
	
	//constants - define(name of the constant, value of the constant) 
	define("show_name", "Ian Noel M. Banta");
	echo show_name;
	
	$pi = 3.1416;
	$radius = 5;
	echo "<br><br>";
	echo $pi * $radius**2;
	echo "<br><br>";
	
	$x = 100;  
	$y = "100";
	echo "100 and '10' is ";

	var_dump($x === $y); // returns false because types are not equal
	
	echo "<br><br>";
	
	$w = 1;  
	$z = 1;
	echo "1 and 1 is ";

	var_dump($w === $z); // returns true because types are equal
	
	echo "<br><br>";
		
	$a = 2;  
	$b = "2";
	echo "2 and '2' is ";

	var_dump($a == $b); // returns true because values are equal
	
	echo "<br><br>";
	
	$q = 4;
	$e = 4;
	if ($q === $e)
	{
		echo "Identical in terms of data type";
	}
	else
	{
		echo "They are not identical";
	}
?>
</body>
</html>

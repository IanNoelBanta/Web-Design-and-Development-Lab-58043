<html>
<head>
	<title>My Web Page</title>
</head>

<?php
	$content = "Welcome to PHP Programming";
	$a = 5;
	$msg = 'Hello, again';
	
	echo $content;
	echo "<br>".$a;
	echo "<br>".$msg;
	
	echo "<br>"; 
	echo "<br>"; 
	
	//Arithmetic operations
	$x = 8;
	$y = 8;
	
	echo"<br>"; 
	echo $x+$y;
	echo"<br>";
	echo $x-$y;
	echo"<br>"; 
	echo $x*$y;
	echo"<br>";
	echo $x/$y; 
	echo "<br>".$x%$y; 
	echo"<br>"; 
	echo $x**$y; 
	
	//Comparison operations
	echo "<br>"; 
	echo "<br>"; 
	
	if($x===$y)
	{
			echo "They are identical";
	}
	else
	{
			echo "They are not identical";
	}
	
	echo"<br>";
	echo"<br>";
	
	//Increment/decrement operators
	//for loop 
	echo "For loop:";
	for ($a = 5; $a >= 1; $a--)
	{
			echo "<br>".$a;
	}
	
	echo "<br>";
	echo"<br>";
	
	//while loop
	echo "While loop:";
	$b = 5;
	while ($b >= 1)
	{
		echo "<br>The number is:".$b;
		$b-=1;
	}
	
	echo "<br>";
	echo"<br>";
		
	//do while loop
	echo "Do while loop:";
	$c = 5;
	do
	{
		echo "<br>The number is:".$c;
		$c--;
	}
	while ($c >= 1);
?>

</html>
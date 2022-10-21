<html>
<head><title>My Looping Statements</title></head>
<body>
<center>
<?php
	echo "<h1><u>While Loop</u></h1>";
	//while loop
	$fuel = 10;
	while($fuel >= 1)
	{
		/*echo "There's enough fuel";
		break;*/
		echo "<table border = 10><tr><td>There's enough fuel</td></tr></table>";
		--$fuel;
	} 

	echo "<h1><u>Do While Loop</u></h1>";
	//do while loop

	$count = 1;

	do
	{
		echo "$count times 12 is ".$count*12 ."<br>";
	}
	while (++$count <= 12);


	echo "<br>";
	
	$fuel2 = 10;

	do 
	{	
		echo "There is enough fuel<br>";
	}
	while (--$fuel2 >= 1);


	echo "<h1><u>For Loop</u></h1>";
	//for loop
	for ($fuel = 10;$fuel >= 1;--$fuel)
	{
		echo "There is enough fuel<br>";
	}

	echo "<h1><u>Foreach Loop</u></h1>";
	//foreach loop
	$colors = array("red", "green", "blue");

	foreach ($colors as $value)
	{
		echo $value."<br>";
	}

	echo "<h1><u>Break Statement</u></h1>";
	//break statement
	for ($z = 1;$z <= 10;$z++) //prints 1 to 3
	{
		if ($z == 4)
		{
			break;
		}
		echo "The number is ".$z."<br>";
	}

	echo "<br>";
	for ($x = 1;$x < 10;$x++) //prints 4
	{
		if ($x==4)
		{
			echo "The number is ".$x."<br>";
			break;
		}
	}

	echo "<h1><u>Continue Statement</u></h1>";
	//continue statement
	for ($x = 1;$x <= 10;$x++)
	{
		if ($x == 4)
		{
			continue;
		}
		echo "The number is ".$x."<br>";
	}

	echo "<h1><u>Application #1</u></h1>";
	//Application #1
	for ($y = 0;$y <= 10;$y++)
	{
		if ($y == 11)
		{
			break;
		}
		echo "Hello ".$y."<br>";
	}

	//Application #2
	echo "<h1><u>Application #2</u></h1>";
	$num = 9;
	
	do
	{
		echo "$num"."<br>";
	}
	while (--$num >= 3);
?>
</center>
</body>
</html>
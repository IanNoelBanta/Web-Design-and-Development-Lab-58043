<html>
<head>
	<title>
		Exercise 1
	</title>
</head>
<body bgcolor = "white">
<center>
<h1>
	Welcome to my Exercise 1 in PHP!
</h1>
<?php
	//declare variables
	$full_name = "Ian Noel M. Banta";
	$college_program = "B.S. in Computer Engineering";
	$year = "3rd Year";
	$section = "WDD - 58043";
	$string = "Today, I will learn PHP programming.";
	
	//print variables
	echo "My name is $full_name.<br><br> I am a $year student studying $college_program and I am part of $section.<br><br>";
	echo $string;
	
	echo "<br><br>";
	
	//In table form
	echo "<table border = 10>
	<center>
	<tr>
		<td> Name of Student </td>
		<td> $full_name </td>
	</tr>
	
	<tr>
		<td> College Program </td>
		<td> $college_program </td>
	</tr>
	
	<tr>
		<td> Year </td>
		<td> $year </td>
	</tr>
	
	<tr>
		<td> Section </td>
		<td> $section </td>
	</tr>
	
	<tr>
		<td> Agenda </td>
		<td> $string </td>
	</tr>
	</center>
	</table>";
?>
</center>
<br>
<marquee>
	Thank you!
</marquee>
</body>
</html>

<html>
<head>
	<title>Exercise 2 - PHP: Grade Evaluation</title>
</head>
<body align = 'center'>
<h1>

<!--Create aan HTML Form that will get the user input-->
<!--Use post as a method when submitting the form data-->
<!--The action used is to send/store the data to the file itself-->
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<!--Input type is text. Name sets the name of the variable that will contain the data/grade-->
  Grade: <input type="text" name="grade">
  <input type="submit">
</form>

<?php
	//Request the submitted data from the HTML Form
	if ($_SERVER["REQUEST_METHOD"] == "POST") 
		{
			// collect value of grade
			$grade = htmlspecialchars($_REQUEST['grade']);
			
			// when there is no input
			if (empty($grade)) 
			{
				echo "Grade is empty <br>";
				echo "Failed to Evaluate";
			} 
			// when there is input
			else
			{
				//if grade is greater than or equal to 70
				if ($grade >= 70)
				{
					echo "$grade: PASSED";
				}
				//if grade is greater than or equal to 60
				else if ($grade >= 60)
				{
					echo "$grade: REMEDIAL";
				}
				//grade is less than 60
				else
				{
					echo "$grade: FAILED";
				}
			}
		}
		
	echo '<br>';
	
	//table guide for grade evaluation
	echo "<table border = 10, align = 'center'>
	<tr>
		<td> GRADE </td>
		<td> EVALUATION </td>
	</tr>
	
	<tr>
		<td> 70 above </td>
		<td> PASSED</td>
	</tr>
	
	<tr>
		<td> 60 to 69 </td>
		<td> REMEDIAL </td>
	</tr>
	
	<tr>
		<td> 60 below </td>
		<td> FAILED </td>
	</tr>
	</table>";	

?>
</h1>
</body>
</html>
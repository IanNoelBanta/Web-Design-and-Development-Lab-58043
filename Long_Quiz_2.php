<html>
<head>
	<title>
		Banta - Long Quiz 2
	</title>
</head>
<body bgcolor = "pink">
<center>
<?php
	//label for problem 1
	echo "<h1>Question 1</h1>";
	
	//computation for salary rate with the given salary of 600
	echo "Salary Rate = 600 / day<br>";
		$salary_rate = 600;
	echo "Salary = Salary Rate * 15 days<br>";
		$salary = $salary_rate * 15;
		echo "<b><i>Salary = $salary</i></b><br><br>";
	
	//computation for taxable amount
	echo "Taxable Amount = 30% of Salary<br>";
		//30% is 0.30 
		$taxable_amount = 0.30 * $salary;
		echo "<b><i>Taxable Amount = $taxable_amount</i></b><br><br>";
	
	//computation for net pay
	echo "Net Pay = Salary - Taxable Amount<br>";
		$net_pay = $salary - $taxable_amount;
		echo "<b><i>Net Pay = $net_pay</i></b><br><br>";
		
		
	//label for question 2
	echo "<h1>Question 2</h1>";
	
	$sum = 0;
	//loop to get the next number starting from 1 to 50
	for ($current_number = 1; $current_number <= 50; $current_number++)
	{
		//add the current number to the current sum
		$sum += $current_number;
	}
	//display the total sum 
	echo "<b><i>The sum of positive integers from 1 to 50 = $sum</i></b><br>";
?>
</center>
</body>
</html>
<?php
	$DOCUMENT_ROOT=$SERVER['DOCUMENT_ROOT'];
?>
<html>
<head>
	<title>Bob's Auto Parts</title>
</head>

<body>
<h1>Bob's Auto Parts</h1>
<h2>Customer Orders</h2>
<?php

	
	//read in entire file	
	//Each order becomes an element in the array 
	$orders=file("$DOCUMENT_ROOT/1/orders/order.txt");
	$number_of_orders=count($orders);
	if ($number_of_orders==0)
	{
		echo "<p><strong>No Orders pending .
			Please Try again later.</strong></p>";
	}
	else
	{
		echo "<table border=\"1\" width=\"500\">\n";
		echo "<tr><th bgcolor =\"#CCCCFF\">Order Time</th>";
		echo "<th bgcolor =\"#CCCCFF\">Tires</th>";
		echo "<th bgcolor =\"#CCCCFF\">Oil</th>";
		echo "<th bgcolor =\"#CCCCFF\">Spark Plugs</th>";
		echo "<th bgcolor =\"#CCCCFF\">Total</th>";
		echo "<th bgcolor =\"#CCCCFF\">Address</th>";
		echo "</tr>";
		for($i=0;i<$number_of_orders;$i++)
		{
			$line = explode("\t",$orders[i]);

			$line[1]=intval($line[1]);
			$line[2]=intval($line[2]);
			$line[3]=intval($line[3]);

			echo"<tr>
				<td >$line[0]</td>
				<td align= \"right\">$line[1]</td>
				<td align= \"right\">$line[2]</td>
				<td align= \"right\">$line[3]</td>
				<td align= \"right\">$line[4]</td>
				<td>$line[5]</td>
				</tr>";
		}
		echo "</table>";
	}
?>

</body>

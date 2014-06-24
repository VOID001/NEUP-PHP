<html>
<head>
	<title>Bob's Auto Parts-Order Results</title>
</head>
<body>
	<h1>Bob's Auto Parts</h1>
	<h2>Order Results</h2>
	<?php
		$tireqty=$_POST['tireqty'];
		$oilqty=$_POST['oilqty'];
		$sparkqty=$_POST['sparkqty'];
		echo "<p>Order processed at ";
		echo date('H:i,jS F Y');
		echo "</p>";
		echo "<p>Your orders are as follows:</p>";
		echo "Tire: "  . $tireqty."<br>";
		echo "Oil: " . $oilqty."<br>";
		echo "Spark: " .$sparkqty."<br>";

	?>
</body>
</html>

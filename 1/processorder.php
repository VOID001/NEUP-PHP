<html>
<head>
	<title>Bob's Auto Parts-Order Results</title>
</head>
<body>
	<h1>Bob's Auto Parts</h1>
	<h2>Order Results</h2>
	<!This is Varaint Declare Zone>
	<?php
		$tireqty=$_POST['tireqty'];
		$oilqty=$_POST['oilqty'];
		$sparkqty=$_POST['sparkqty'];
		$address=$_POST['address'];
		$find=$_POST['find'];
		$sq=&$sparkqty;
		$oq=&$oilqty;
		$tq=&$tireqty;
		$totalnum=$sq+$oq+$tq;
		$DOCUMENT_ROOT=$_SERVER['DOCUMENT_ROOT'];
		$TEST_DOCPATH="$DOCUMENT_ROOT/orders/order.txt";
		$date=date('H:i,jS F Y');
		@$fp=fopen("$DOCUMENT_ROOT/1/orders/order.txt",'ab');
	?>
	<?php
		define('TIREPRICE',50);
		define('OILPRICE',24);
		define('SPARKPRICE',60);
		$totalcost=1.0*($sq*SPARKPRICE+$oq*OILPRICE+$tq*TIREPRICE);
		$taxrate=0.1;
		if(!(is_numeric($tq) and is_numeric($oq) and is_numeric($sq)))
		{
			echo"<p><font color='red'> <h1>Wrong Request!</h1></font></p>";
		}
		else if($totalnum<=0) 
			echo"<p><font color='red'> <h1>You didn't order anything!</h1></font></p>";
		else
		{
			echo "<p>Order processed at ";
			echo $date."<br>";								//date 日期函数 
			echo "<h3>Number of Item(s): ".$totalnum."</h3>";	
			echo "<h3>Total cost of money: $".(double)$totalcost."</h3>";	
			echo "<h3>Total cost of money: $".number_format((double)$totalcost,3)."</h3>";		//number_format 格式化输出函数
			$totalcost*=(1+$taxrate);
			echo "<h3>Total cost of money(Including Tax): ".$totalcost."</h3>";		
			switch($find)
			{
			case "a":
				echo "<h4>Regular Customer</h4>";
				break;
			case "b":
				echo "<h4>Customer referred by TV advertisement</h4>";
				break;
			case "c":
				echo "<h4>Customer refferred by word of mouth</h4>";
				break;
			case "d":
				echo "<h4>Regular Customer</h4>";
				break;
			default:
				echo"<h4>We do not know how this customer found us</h4>";
				break;
			}
			if(!$fp)
			{
				echo "<p><strong><font color='red'>Your order couldn't be processed at this time.".
					"Please Try again later</font></strong></p>";
				echo "<h1>$TEST_DOCPATH</h1>";
			}
			else 
			{
				$inputStr=$date."\t".$tireqty." tire(s)"."\t".$oilqty." oil \t"
						.$sparkqty." spark(s) \t".$totalcost."\t".$address."\n";
				fwrite($fp,$inputStr,strlen($inputStr));
				@fclose($fp);
			}
		}
	?>
</body>
</html>

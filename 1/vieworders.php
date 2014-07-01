<?php
	$DOCUMENT_ROOT=$_SERVER['DOCUMENT_ROOT'];
?>
<html>
<head>
	<title>Bob's Auto Parts - Customer Orders</title>
</head>
<body>
	<h1>Bob's Auto Parts</h1>
	<h2>Customer Orders</h2>
	<?php
		@ $fp=fopen("$DOCUMENT_ROOT/1/orders/order.txt",'rb');			//路径千万别输错了！	输错了 feof那块儿就死循环 了
		if(!$fp)
		{
			echo"<p><strong><font color='red'>NO orders pending.
				Please Try again later</font></strong></p>";
			exit;
		}
		else
		{
			while(! feof($fp))
			{
				$order=fgets($fp);
				echo "<font size='5' color='black'><p>$order</p></font>";
			}
			fclose($fp);
		//	readfile("$DOCUMENT_ROOT/1/orders/order.txt");
		}
	?>
</body>



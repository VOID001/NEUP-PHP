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
		@ $fp=fopen("$DOCUMENT_ROOT/1/orders/order.txt",'rb');			//·��ǧ�������ˣ�	����� feof�ǿ������ѭ�� ��
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
<?php
		$orders=file("$DOCUMENT_ROOT/1/orders/order.txt");			//file ���� ���ļ��򿪲����浽������
		$num_of_orders=count($orders);								//count ���� ͳ������Ԫ�ظ���
		//echo "$DOCUMENT_ROOT/1/orders/order.txt";					//����·���Ƿ���ȷ
		if($orders==0)
		{
			echo "<p><strong>No Orders pending. Please try again later.</strong></p>";
		}
		else 
		{
			for($i=0;$i<$num_of_orders;$i++)
			{
				echo $orders[$i] ."<br />";
			}
		}
		echo "$DOCUMENT_ROOT/orders/order.txt";
?>
</body>



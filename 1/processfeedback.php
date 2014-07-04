<?php
	
	//create short varaible names
	$name=$_POST['varname'] ;
	$email=$_PSOT['varaddress'];
	$feedback=$_POST['varfeed'];

	$toaddress="*****@example.net";
	$subject="Feedback From WebSite";
	$mailcontent="Customer name=$name\n
		Customer Email=$email\n
		Customer comments=\n $feedback\n";
	$fromaddress="From: webserver@example.com";

	mail($toaddress,$subject,$mailcontent,$fromaddress);
?>

<html>
<head>
	<title>Bob's Auto Parts</title>
</head>
<body>
	<h1>Feedback Submiited</h1>
	<p>Your feedback has been sent</h1>
	<br/ >
	<?php
	echo "<font color=\"blue\">$feedback</font>";
	?>
</body>
</html>

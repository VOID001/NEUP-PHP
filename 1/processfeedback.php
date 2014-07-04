<?php
	
	//create short varaible names
	$name=$_POST['varname'] ;
	$email=$_POST['varaddress'];
	$feedback=$_POST['varfeed'];

	$toaddress="";
	$subject="Feedback From WebSite";
	$mailcontent="Customer name=$name\n
		Customer Email=$email\n
		Customer comments=\n $feedback\n";
	$fromaddress="From: webserver@example.com";
	$lista=array("yeah","gmail","163","sina","qq");
	$listb=array("yeahmailcenter","google","neteasecenter","weibo","tecent");
	//mail($toaddress,$subject,$mailcontent,$fromaddress);   // haven't config email support   don't need to use mail func  we just simulate it~
?>

<html>
<head>
	<title>Bob's Auto Parts</title>
</head>
<body>
	<h1>Feedback Submiited</h1>
	<h1>Your feedback has been sent</h1>
	<br/ >
	<?php
	echo"<p font color=\"yellow\" size=\"+2\"> $email </p>";
	$tmp=explode('@',$email);
	echo $tmp[0];
	$usermailsite=explode('.',$tmp[1]);
	echo "<h3>Hello ~ My friends from $usermailsite[0]</h3>";
	for($i=0;$i<5;$i++) 
	{
		if(strtolower($usermailsite[0])==$lista[$i]) { $toaddress=$listb[$i]; break;}
		elseif($i==4) $toaddress="Unknown";
	}
	echo "Welcome $name from $toaddress<br>";
	echo "<h4>Your message has been sent to $toaddress<h4>";
	echo "<p><font color=\"red\">Below is your email content </font><br>";
	echo "<h5> TEXT ONLY USE nl2br function</h5>";
	echo nl2br($feedback);					//nl2br enabled \n convert to <br>  very useful
	echo "<h5> TEXT USE nl2br and addslashes  function(with default_config add slash off</h5>";
	echo nl2br(addslashes($feedback));		//addslashes enabled " and \ and NULL convert to an safe escape sequence;
	echo "<h5> TEXT USE nl2br and addslashes and  function(with default_config add slash off</h5>";
	echo nl2br(stripslashes(addslashes($feedback)));
	echo "</p>";
	?>
</body>
</html>

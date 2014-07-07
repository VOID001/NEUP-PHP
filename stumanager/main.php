<!下面那句话是为了支持中文字符的>
<meta http-equiv="content-type" content="text/html"; charset="utf-8">
<?php
	error_reporting(E_ALL^E_NOTICE);			//关闭PHP的全局Notice报错
	$password=$_POST['password'];
	$username=$_POST['username'];
//	print_r(hash_algos());
	$hashpw=hash("md5",$password);				//通过hash函数 生成加密后的密码字串 更安全 
	$hashuname=hash("md5",$username);
	$realpw=hash("md5","NEUP Tech");
	$realuname=hash("md5","VOID");
?>

<html>
<?php
	if($realpw==$hashpw and $realuname=$hashuname)
	{
		echo "<body>";
		echo"<head><title>Welcome!</title></head>";
		echo "<h1 align=\"center\"><font color=\"green\">Welcome! Admin </font></h1>";
		echo "<h3><a href=\"stuaddinfoman.html\">录入</a></h3>";
		echo "<h3><a href=\"stusearchinfoman.html\">查询</a></h3>";
		echo "</body>";
	}
	else
	{
		echo"<head><title>Authentication Failure</title></head>";
		echo"<body bgcolor=\"black\">";
		echo"<h1 align=\"center\"><font color=\"red\">Wrong Username Or Password,Try Again</font></h1>";
		echo"<h3 align=\"center\"><a href=\"welcome.html\">BACK</h3>";
		echo"</body>";
	}
?>
</html>

<html>

	<head></head>
	<body>
		<h1>First PHP Page</h1>
		<?php
			phpinfo();
			$connect=mysql_connect("127.0.0.1","root","root");
			if(!$connect) echo "Mysql Connect Error!";
			else echo "Accepted";
			mysql_close();
		?>
	</body>
</html>

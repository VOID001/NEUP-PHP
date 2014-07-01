<html>
	<?php
		$arrpic=array(1,2,3,4,5,6,7,8,9);
		shuffle($arrpic);
	?>
	<head>ACG Fun!</head>
	<body>
		<h1>ACG PIC</h1>
		<div align="center">
		<table width= 5%>
		<tr>
		<?php
			echo"<td align=\"center\"><img src=\"1/pic/$arrpic[0].jpg\"/></td>";			//html 一定要好好对一对 这个html出问题比较坑
		?>
		</tr>
	</table>
	</body>
</html>

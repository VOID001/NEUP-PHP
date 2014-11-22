<html>
	<?php
		$arrpic=array(1,2,3,4,5,6,7,8,9);
		shuffle($arrpic);
	?>
	<head>ACG Fun!</head>
	<body>
		<h1>ACG PIC</h1>
		<a href="1/"><font color="red">Chapter_1</font></a>
		<div align="center">
		<table width= 5%>
		<tr>
		<?php
			echo"<td align=\"center\"><img src=\"1/pic/$arrpic[0].jpg\"/></td>";			//html һ��Ҫ�úö�һ�� ���html������ȽϿ�
		?>
		</tr>
	</table>
	</body>
</html>

<?php
	$arr=array(array('Code'=>'TRE','Name'=>'Tire','Num'=>4),array('Code'=>'SPK','Name'=>'Spark plugs','Num'=>6),array('Code'=>'OIL','Name'=>'Oil','Num'=>100));
?>
<font color="blue" size="+3">
	<?php
		$i=1;
		for($i=0;$i<3;$i++)
		{
			foreach($arr[$i] as $key => $value)			//汗 - -： i不是变量 $i才是
			{
				echo "$key\t|\t$value|";
			}
			echo "<br/>";
		}
	?>
</font>
<h2>SORT SAMPLE</h2>
<?php
	$arrword=array("the","quick","brown","fox","jumped","over","the","lazy","dog");
	sort($arrword);
	for($i=0;$i<9;$i++) echo"<strong>$arrword[$i]</strong><br>";
	$arrnum=array(1,2,3,4,5,6,7,8,9,10);
	echo"<div><br>";
	rsort($arrnum);
	for($i=0;$i<10;$i++) echo"<strong>$arrnum[$i]</strong><br>";
	echo" </div>";

?>

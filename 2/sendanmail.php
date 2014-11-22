<head>
	<link type="text/css" rel="stylesheet" href="sendemail.css" />
</head>
<?php error_reporting(0);?>
<?php echo '<div style="width:500px;height:300px;margin:auto;background-color:#c30ffa" align=center>'; ?>
<?php
/**
 * Created by PhpStorm.
 * User: void-admin
 * Date: 14-11-22
 * Time: 下午4:51
 */
//Define some varibles
$post=$_POST;
$server=$_SERVER;

$method=$server['REQUEST_METHOD'];
$httprefer=$server['HTTP_REFERER'];
$verifyok=false;
$wrong_post=NULL;
$state = 0;

//Judge if it is a POST Method

if($method=="POST")
{
	if(!empty($post['name']) && !empty($post['id']))
	{
		$verifyok=verify($post);
		$state=1;
	}
	else if(empty($post['name']) && empty($post['id']))
	{
		$state=0;
	}
	else
	{
		$state=1;
		if(empty($post['name']))
		{
			$wrong_post['name']=true;
		}
		else $wrong_post['id']=true;
	}

}
else
{
	//load a form to fill in
}

load_form($state,$wrong_post,$_POST);


/**
 * @param $var
 * @return bool
 */
function verify($var)
{
	//Default we just don't need it
	return true;
}
?>
<?php
function load_form($state=0,$wrong_post=NULL,$post=NULL)
{
	?>
	<?php if(!empty($wrong_post)) {?>
		<div style="background-color:#ff00ed" align=center>
			<h3 style="font-family:Courier;">Error! the form is not filled correctly</h3>
		</div>
		<?php } ?>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
		<table border="0">
			<h2>Registration</h2>
			<tr>
				<td><div class="id-1">UserName</div></td>
				<td><input type="text" name="name" value="<?php echo $state?$post['name']:""; ?>"></td>
			</tr>
			<tr>
				<td>UserID</td>
				<td><input type=text name="id" value="<?php echo $state?$post['id']:"";?>"></td>
			</tr>
			<tr>
				<td align="center" >
					<input type="submit" name="submit" value="Sign in">
				</td>
			</tr>
		</table>
	</form>
<?php }?>
<?php echo '</div>';?>
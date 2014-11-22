<head>
	<link type="text/css" rel="stylesheet" href="sendemail.css" />
</head>
<?php error_reporting(0);?>
<div class="id-0"></div>
<div class="id-0"></div>
<div class="id-0"></div>
<?php echo '<div style="width:500px;height:290px;margin:auto;background-color:#c30ffa" align=center>'; ?>
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
	if($state==0)
	{
		$color = "#43a0fa";
	}
	else if(!empty($wrong_post))
	{
		$color = "#ff00ed";
	}
	else
	{
		$color = "#00ffaa";
	}

	if($_SERVER['REQUEST_METHOD']=='GET') unset($color);
	?>
	<div style="background-color:<?php echo $color; ?> ; height:30" align=center>
		<?php if(!empty($wrong_post)) {?>
			<h3 style="font-family:Courier;">Error! the form is not filled correctly</h3>
		<?php } ?>
		<?php if($state==0){?>
			<h3 style="font-family:Courier;">Please fill in the Form</h3>
		<?php } ?>
		<?php if($state==1 && empty($wrong_post)){?>
			<h3 style="font-family:Courier;">Succesfully register</h3>
		<?php } ?>

	</div>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
		<table border="0">
			<h2 style="color:#a0dfba">Registration</h2>
			<tr>
				<td><div class="id-1">UserName</div></td>
				<td><input type="text" name="name" value="<?php echo $state?$post['name']:""; ?>"></td>
			</tr>
			<tr>
				<td><div class="id-1">UserID</div></td>
				<td><input type=text name="id" value="<?php echo $state?$post['id']:"";?>"></td>
			</tr>
			<tr>
				<td align=center class="id-2" colspan="2" >
					<div class="id-0"></div>
						<input class="id-2" type="submit" name="submit" value="Sign in">
				</td>
			</tr>
		</table>
	</form>
<?php }?>
<?php echo '</div>';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="en-us" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>LOGIN</title>
<style type="text/css">
.auto-style5 {
	text-align: center;
	margin-left: 420px;
}
.auto-style2 {
	color: #4B5A71;
}
.auto-style4 {
	color: #4B5A71;
	margin-left: 0px;
}
.auto-style6 {
	color: #FF0000;
}
</style>
</head>

<body>
<form method="post" action="">
	<div class="auto-style5" style="border-style: solid; border-color: inherit; border-width: medium; width: 518px;">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<span class="auto-style2">&nbsp;<br />
		</span><strong>
		<img alt="USER" height="131" src="Capture22.PNG" width="113" />&nbsp;&nbsp;<h2 class="auto-style2">
		LOGIN</h2>
		<br class="auto-style2" />
		</strong><span class="auto-style2"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;USERNAME&nbsp; 
		:&nbsp;
		</strong></span><strong>
		<input class="auto-style2" name="username" style="width: 149px; height: 22px" type="text" /></strong><span class="auto-style2"><strong>&nbsp;&nbsp;&nbsp;&nbsp;
		</strong></span><strong><br />
		<br />
		<br class="auto-style2" />
		</strong><span class="auto-style2"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; PASSWORD :&nbsp; </strong></span><strong>
		<input class="auto-style4" name="password" style="width: 153px" type="password" /></strong><span class="auto-style2"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<br />
		<br />
		&nbsp;&nbsp;&nbsp;&nbsp;</strong></span><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<span class="auto-style6"> <br />
		<br />
			<input name="login" style="width: 140px; height: 36px; background-color:#4B5C71; color:white" type="submit" value="LOGIN" /></form>
		</span>
		<br />
	</div>
	</form>
</body>
</html>
<?php 
session_start();
include 'dbconnection.php';
if(isset($_POST['username'])
&& isset($_POST['password'])
&& isset($_POST['login']))
{
$sql = "SELECT * FROM user WHERE userID= :cn and password= :pwd";
$stmt = $conn-> prepare($sql);
$stmt-> execute(array(
':cn' => $_POST['username'],
':pwd' => $_POST['password']));
$row = $stmt-> fetch(PDO::FETCH_ASSOC);
$n = $stmt-> rowCount();
if ($n == 1)
{
$_SESSION['username']= $row['username'];
header("Location:event.html");
return;
}
else{
echo "<br>Invalid Username / password";
}}
?>

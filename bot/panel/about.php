<?
session_start();
include("../includes/configuration.inc.php");
include("../includes/mysql_connect.inc.php");
if($_SESSION['botnet_session'] != $security_token) 
{
echo "<script>window.location='../index.php';</script>";
}
?>
<html>
<head>
<title>Mustafa Riadh</title>
<link rel="stylesheet" type="text/css" href="../style/plugins.css">
<link rel="stylesheet" type="text/css" href="style/main.css">
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Raleway">
<?
if(file_exists("../mustafa.php")) 
{
$checker = fopen("../mustafa.php","r");
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
</head>
<body>
<div id="navbar">
<img src="images/mustafa.jpg" width="50" class="image">
<a class="username"><? echo($usernamec) ?></a>
<br><br><br>
<div id="navbar-menu">
<hr class="navbar-hr" color="#3ab4a6">
<a href="index.php" style="text-decoration: none;"><font class="navbar-button-active">DASHBOARD</font></a>
<hr class="navbar-hr" color="#3ab4a6">
<a href="show_slaves.php" style="text-decoration: none;"><font class="navbar-button">SLAVES LIST</font></a>
<hr class="navbar-hr" color="#3ab4a6">
<a href="commands.php" style="text-decoration: none;"><font class="navbar-button">COMMANDS</font></a>
<hr class="navbar-hr" color="#3ab4a6">
<a href="passwords.php" style="text-decoration: none;"><font class="navbar-button">PASSWORDS</font></a>
<hr class="navbar-hr" color="#3ab4a6">
<a href="#reload" style="text-decoration: none;"><font class="navbar-button">RELOAD BOT</font></a>
<hr class="navbar-hr" color="#3ab4a6">
<a href="help.php" style="text-decoration: none;"><font class="navbar-button">HELP PAGE</font></a>
<hr class="navbar-hr" color="#3ab4a6">
<a href="about.php" style="text-decoration: none;"><font class="navbar-button">ABOUT BOT</font></a>
<hr class="navbar-hr" color="#3ab4a6">
<a href="logout.php" style="text-decoration: none;"><font class="navbar-button">LOGOUT</font></a>
<hr class="navbar-hr" color="#3ab4a6">
</div>
</div>
<div id="help-page">
<center>
<font size="6" face="Raleway">ABOUT THIS BOT</font>
</center>
<br><br>
<font size="4" face="Raleway">Made In Russia By <br>The Student <a href="https://www.facebook.com/mustafa.riadalmusawi" class="link">  Mustafa Riadh Ketab </a><br>Under the supervision of Professor Зорин Иван Андреевич Business manager 
</div>
</body>
</html>
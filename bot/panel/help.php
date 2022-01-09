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
<a href="help.php"><button class="help-button">HOME</button></a>
<a href="help.php?cat=commands"><button class="help-button">COMMANDS</button></a>
<a href="help.php?cat=features"><button class="help-button">FEATURES</button></a>
<a href="help.php?cat=client"><button class="help-button">CLIENT</button></a>
</center>
<hr color="#F8F8F8">
<center>
<br>
<?
$cat = $_GET['cat'];
if(!isset($_GET['cat'])) 
{
?>
<font size="6" face="Raleway">HELP PAGE</font>
</center>
<br><br>
<font size="4" face="Raleway">Need Some Help ? Really Botnet Is Very Hard To Learn, But it Is Very Funny. You Can Use The Menu <br><br>Above To Know How To Control This Bot Or You Can Visit Our <a href="" class="link">OFFICIAL WEBSITE</a> &nbsp;For More Help</font>
<?
} 
elseif($cat == "commands") 
{
?>
<font size="6" face="Raleway">COMMANDS HELP</font>
</center>
<br><br>
<font size="4" face="Raleway">Like Always, Botnet Must Have Some Commands To Excute And On This Bot You Can Use Many <br><br>Commands Like : </font>
<ul class="list">
  <li><font size="3" face="Raleway">DDOS ATTACK : PERFORM A POWERFULL DDOS ATTACK USING YOUR BOTS</font></li>
  <br>
  <li><font size="3" face="Raleway">SEND MESSAGE BOX : SEND A MESSAGE BOX TO YOUR BOTS</font></li>
  <br>
  <li><font size="3" face="Raleway">VISIT LINK : OPEN WEBSITE FOR YOUR BOTS</font></li>
  <br>
  <li><font size="3" face="Raleway">BOMB LINK : MASS OPEN HIDDEN WEBSITE FOR YOUR BOTS</font></li>
  <br>
  <li><font size="3" face="Raleway">GET PASSWORDS : GRAB ALL PASSWORDS FOR SELECTED BOTS</font></li>
  <br>
  <li><font size="3" face="Raleway">EXCUTE FILE : RUN LOCAL FILE FOR BOTS</font></li>
  <br>
  <li><font size="3" face="Raleway">FACEBOOK BOMB : SEND SPAM MESSAGE FOR BOT FACEBOOK ACCOUNT</font></li>
</ul>
<font size="4" face="Raleway">To Excute Command For Bots, Just Go On Show Slaves Page And Excute Your Command</font>
<?
}
elseif($cat == "features") 
{
?>
<font size="6" face="Raleway">features</font>
</center>
<br><br>
<font size="4" face="Raleway">I Think This Is The Best Botnet On The Arabic State, That's Depend On Options This Botnet Is The First<br><br> Botnet On the World That use A client And Web Application At The Same Time With Many New<br><br> Commands To FUlly Control Your Bot</font>
<?
}
elseif($cat == "client") 
{
?>
<font size="6" face="Raleway">CLIENT</font>
</center>
<br><br>
<font size="4" face="Raleway">Using client Is Much Better Then Web Application, So It's Like Any Other Remote Administration<br><br> Toolkit So I think That You Don't Need Any Tutorial </font>
<?
}
?>
</div>
</body>
</html>
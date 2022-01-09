<?
include("../includes/configuration.inc.php");
include("../includes/mysql_connect.inc.php");
$userid = $_GET['id'];
$update_id = "DELETE FROM slaves WHERE id='$userid'";
mysql_query($update_id, $connect);
?>
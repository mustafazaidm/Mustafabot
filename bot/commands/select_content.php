<?
include("../includes/configuration.inc.php");
include("../includes/mysql_connect.inc.php");
$userid = $_GET['id'];
$get_id = "SELECT content FROM content";
$result_check = mysql_query($get_id, $connect);
while($row = mysql_fetch_array($result_check)){
	 $content = $row[0];
}
if(isset($_GET['show']))
{
echo $content;
}
?>
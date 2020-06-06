<?
$log = $_POST['login'];

if($_POST['password'] == file_get_contents("users/$log.txt")){
echo "You're welcome";
}
if(!($_POST['password'] == file_get_contents("users/$log.txt"))){
echo "error";
}
?>
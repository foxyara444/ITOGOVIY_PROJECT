<?
$fio = $_RQUEST['userdata'];
$message = $_REQUEST['message'];

header("Content-type: text/html; charset=utf-8");

echo "<h2>Данные, полученные от пользователя, после чего полученные от сервера:</h2";
echo "<p>$userdata";
echo "<p>$message</p>";
?>
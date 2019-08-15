<?php
   //Reseteamos variables a 0.
   $destino="27raku07@gmail.com";
   //$mail = $_POST['nombre'];
   $mail = "prueba xd"
   //Titulo
   $titulo = "PRUEBA DE TITULO";
   //cabecera
   //$headers = "MIME-Version: 1.0\r\n"; 
  /// $headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
   //dirección del remitente 
   //$headers .= "From: Geeky Theory < tu_dirección_email >\r\n";
   //Enviamos el mensaje a tu_dirección_email 
   $bool = mail($destino,$titulo,$mail);
   if($bool){
   // header('Location: https://www.fate-go.jp/');
   echo "enviado"+ $mail;
   }else{
       echo "Mensaje no enviado";
   }
?>
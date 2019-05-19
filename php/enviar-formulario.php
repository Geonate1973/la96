<?php
$nombre=$_POST['name'];
$empresa=$_POST['business'];
$email=$_POST['email'];
$mensaje=$_POST['menssage'];
$cabeceras = 'From: Consulta desde web PRANDES' . "\r\n" .
    'Reply-To: mdiezcanseco@prandes.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

$mensaje = "
Este mensaje fue enviado por " . $nombre . " 
Empresa: " . $empresa . " 
su Email es " . $email . " 
Su mensaje es el siguiente:  ". $mensaje . " 
Enviado el " . date('d/m/Y', time());

mail('mdiezcanseco@prandes.com','Mensaje desde Pagina Web del PRANDES', $mensaje, $cabeceras );

header('Location: http://www.prandes.com'); 
?>
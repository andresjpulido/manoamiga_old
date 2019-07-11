<?php
$Nombre = $_POST['Nombre'];
$Motivo = $_POST['Motivo'];
$Email = $_POST['Correo'];
$Mensaje = $_POST['Mensaje'];
$Para = 'diego.sepulveda.j@gmail.com';
$titulo = 'ASUNTO DEL MENSAJE';
$header = 'From: ' . $Email;
$msjCorreo = "Nombre: $Nombre\n E-Mail: $Email\n Mensaje:\n $Mensaje";
  
if ($_POST['submit']) {
if (mail($Para, $titulo, $msjCorreo, $header)) {
echo "Gracias!!!"
} else {
echo 'Falló el envio';
}
}
?>
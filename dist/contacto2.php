
<?php
//Importamos las variables del formulario de contacto

@$Nombre = htmlspecialchars($_POST['Nombre']);
@$Motivo = htmlspecialchars($_POST['Motivo']);
@$Correo = htmlspecialchars($_POST['Correo']);
@$Mensaje = htmlspecialchars($_POST['Mensaje']);

//Preparamos el mensaje de contacto
$cabeceras = "From: $Correo\n" //La persona que envia el correo
 . "Reply-To: $Correo\n";
$asunto = "From: CONTACTO MANO AMIGA $Motivo\n"; //asunto aparecera en la bandeja del servidor de correo
$email_to = "andresjpulido@gmail.com"; //cambiar por tu email
$email_t1 = "inaangova@manoamiga.nz"; //cambiar por tu email
$email_t2 = "nschwenke@manoamiga.nz"; //cambiar por tu email
$email_t3 = "sarareyes@manoamiga.nz"; //cambiar por tu email
$contenido = "$Nombre te ha enviado un mensaje:\n"
. "\n"
. "Nombre: $Nombre\n"
. "Motivo: $Motivo\n"
. "Correo: $Correo\n"
. "Mensaje: $Mensaje\n"
. "\n";
//Enviamos el mensaje y comprobamos el resultado
if (@mail($email_to, $asunto ,$contenido ,$cabeceras )
//and @mail($email_t1, $asunto ,$contenido ,$cabeceras )
and @mail($email_t2, $asunto ,$contenido ,$cabeceras )
//and @mail($email_t3, $asunto ,$contenido ,$cabeceras )
){

//Si el mensaje se envía muestra una confirmación
echo "MENSAJE ENVIADO CON EXITO";
//"<div class="modal fade" id="respuesta2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
//   <div class="modal-dialog">
//     <div class="alert alert-success alert-dismissable">
//         <button type="button" class="close" data-dismiss="modal">×</button>
//         <strong>Su mensaje ha sido enviado correctamente.</strong>
//     </div>
//   </div>
// </div>";
}else{
//Si el mensaje no se envía muestra el mensaje de error
echo "ERRROR AL ENVIAR EL MENSAJE, INTENTE  MAS TARDE PORFAVOR";
// <div class="modal fade" id="respuesta2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
//   <div class="modal-dialog">
//     <div class="alert alert-danger alert-dismissable">
//         <button type="button" class="close" data-dismiss="modal">×</button>
//         <strong>ERROR. Intente mas tarde.</strong>
//     </div>
//   </div>
// </div>";
}

?>

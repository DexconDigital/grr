<?php
$remitente = $_POST['email'];
$destinatario = 'grrfincaraiz@yahoo.com'; // en esta línea va el mail del destinatario.
$asunto = 'Mensaje'; // acá se puede modificar el asunto del mail
if (!$_POST){
?>

<?php
}else{
	 
    $cuerpo = "Nombre y apellido: " . $_POST["nombre"] . "\r\n"; 
    $cuerpo .= "Email: " . $_POST["email"] . "\r\n";
    $cuerpo .= "telefono: " . $_POST["telefono"] . "\r\n";
	$cuerpo .= "Mensaje: " . $_POST["mensaje"] . "\r\n";
	//las líneas de arriba definen el contenido del mail. Las palabras que están dentro de $_POST[""] deben coincidir con el "name" de cada campo. 
	// Si se agrega un campo al formulario, hay que agregarlo acá.

    $headers  = "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/plain; charset=utf-8\n";
    $headers .= "X-Priority: 3\n";
    $headers .= "X-MSMail-Priority: Normal\n";
    $headers .= "X-Mailer: php\n";
    $headers .= "From: \" Notificaciones web \" <"."info@grrfincaraiz.com".">\n";

    mail($destinatario, $asunto, $cuerpo, $headers);
    
    header("Location: contacto.php"); //se debe crear un html que confirma el envío //se debe crear un html que confirma el envío
}
?>

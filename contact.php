<?php 
$destinatario = 'vasossvacioss@gmail.com'
// correo destinatario 
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

$header = "Enviado desde la pagina portafolio Javier Romero";
$mensajeCompleto = $MENSAJE . "\nAtentamente: " . $NOMBRE;

mail($destinatario, $asunto, $mensajeCompleto, $header);
echo "<script>alert('correo enviado exitosamente')</script>"
echo "<script>setTimeout(\"location.href='style.html'\",100 </script>";
?>

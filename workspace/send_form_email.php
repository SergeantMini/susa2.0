<?php
if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "mones_9995@hotmail.com";
    $email_subject = "Contacto";
 
    function died($error) {
        // your error code can go here
        echo "Lo sentimos mucho pero encontramos errores en su solicitud de contacto ";
        echo "Estos errores se muestran a continuación.<br /><br />";
        echo $error."<br /><br />";
        echo "Favor de corregirlos. <br /><br />";
        die();
    }
 
 
    // validation expected data exists
    if(!isset($_POST['NOMBRE']) ||
        !isset($_POST['EMAIL']) ||
        !isset($_POST['comments'])) {
        died('Lo sentimos mucho pero encontramos errores en su solicitud de contacto ');       
    }
 
     
 
    $nombre = $_POST['NOMBRE']; // required
    $email_from = $_POST['EMAIL']; // required
    $comments = $_POST['comments']; // required
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email)) {
    $error_message .= 'El correo no es válido.<br />';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$nombre)) {
    $error_message .= 'El nombre tiene caracteres inválidos.<br />';
  }
 
  if(strlen($comments) < 2) {
    $error_message .= 'El mensaje tiene caracteres inválidos.<br />';
  }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 
    $email_message = "Form details below.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
 
    $email_message .= "Nombre: ".clean_string($nombre)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Mensaje: ".clean_string($comments)."\n";
 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- include your own success html here -->
 
Thank you for contacting us. We will be in touch with you very soon.
 
<?php
 
}
?>
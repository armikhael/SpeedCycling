<?php                                                                                                                                                                                           
  $name = @trim(stripslashes($_POST['name']));
  $email = @trim(stripslashes($_POST['email']));  
  $message = @trim(stripslashes($_POST['message']));

  $email_from = 'marketing@speedhousecyclingstudio.com';
  $subject = 'Contacto Speed Cycling';

  $body = 'Nombre: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Asunto: ' . $subject . "\n\n" . 'Mensaje: ' . $message. "\n\n";

  $success = @mail($email, $subject, $body, 'From: <'.$email_from.'>');


if($success){
        
echo "<br><div style='padding-top: 50px;padding-bottom: 50px;text-align: center;background: #4CD964;width: 300px;border-radius: 10px;margin: 0 auto;'>Message sent successfully!.</div> <b>".$_POST['fnombres']."</b>";

      } else {
        echo '<script type="text/javascript">document.getElementById("contenido").innerHTML = "Failed to submit form.";</script>';
      }
die;

?>
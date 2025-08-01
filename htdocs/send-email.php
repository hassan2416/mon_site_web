<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $to = 'nassah.otirem@gmail.com';
  $subject = 'Message de '.$name;

  $headers = "From: $email\r\n";
  $headers .= "Reply-To: $email\r\n";

  $body = "Un message a été envoyé depuis votre site web\n";
  $body .= "De: $name ($email)\n";
  $body .= "Message:\n$message\n";

  if (mail($to, $subject, $body, $headers)) {
    echo '<h1>Merci !</h1>';
    echo '<p>Votre message a été envoyé.</p>';
  } else {
    echo '<h1>Oups !</h1>';
    echo '<p>Une erreur est survenue lors de l\'envoi du message.</p>';
  }
}
?>
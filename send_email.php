<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $recipient = "shadow.devdc@gmail.com"; // Remplacez ceci par votre adresse e-mail

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $subject = "Nouveau message de la part de $name";

    $email_content = "Nom: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message\n";

    $headers = "De: $name <$email>";

    if (mail($recipient, $subject, $email_content, $headers)) {
        echo "Votre message a été envoyé avec succès.";
    } else {
        echo "Une erreur s'est produite lors de l'envoi du message.";
    }
}
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Adresse email où les messages doivent être envoyés
    $to = "shadow.devdc@gmail.com";

    $subject = "Nouveau message depuis le formulaire de contact";

    $email_body = "Vous avez reçu un nouveau message.\n\n" .
                  "Nom: $name\n" .
                  "Email: $email\n" .
                  "Message:\n$message";

    $headers = "De : $email";

    // Envoyer l'email
    if (mail($to, $subject, $email_body, $headers)) {
        echo "Votre message a été envoyé avec succès!";
    } else {
        echo "Désolé, une erreur s'est produite. Votre message n'a pas pu être envoyé.";
    }
} else {
    echo "Une erreur s'est produite. Veuillez réessayer.";
}
?>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // récupérer les données soumises par le formulaire
    $nom = $_POST['firstname'];
    $subject = $_POST['sujet'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // préparer le message au format HTML
    $message_html = "<html><body>";
    $message_html .= "<h2>Nouveau message de " . $nom . "</h2>";
    $message_html .= "<p><strong>Email : </strong>" . $email . "</p>";
    $message_html .= "<p><strong>Objet : </strong>" . $subject . "</p>";
    $message_html .= "<p><strong>Message : </strong>" . nl2br($message) . "</p>";
    $message_html .= "</body></html>";

    // envoyer le message
    $destinataire = 'rsgl.alexis@gmail.com';
    $sujet = 'Nouveau message de ' . $nom;
    $headers = "From: " . $nom . " <" . $email . ">\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=utf-8\r\n";
    mail($destinataire, $sujet, $message_html, $headers);

    // afficher un message de confirmation
    echo '<p style="color:green;">Votre message a été envoyé avec succès.</p>';
} else {
    echo '<p style="color:red;">Votre message n a pas été envoyé.</p>';
}
?>

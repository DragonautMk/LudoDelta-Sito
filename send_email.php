<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Raccolta dati dal form
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);
    $richiesta = htmlspecialchars($_POST['richiesta']);

    // Email di destinazione
    $to = "ludodelta.aclr@gmail.com";
    // Oggetto dell'email
    $subject = "Nuova richiesta di informazioni";
    // Messaggio dell'email
    $message = "Nome: $nome\nEmail: $email\n\nRichiesta:\n$richiesta";

    // Intestazioni dell'email
    $headers = "From: no-reply@tuosito.com\r\n";
    $headers .= "Reply-To: $email\r\n"; 
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Invio dell'email
    if (mail($to, $subject, $message, $headers)) {
        echo "Email inviata con successo!";
    } else {
        echo "Errore nell'invio dell'email.";
    }
} else {
    echo "Metodo di richiesta non valido.";
}
?>
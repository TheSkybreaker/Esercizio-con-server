<?php

$message = "";
$sql = "INSERT INTO 
        Users (nome, cognome, mail, role_id)
        VALUES (?,?,?,?);";

if (isset($_POST['invio'])) {
    $nome = $_POST['nome'];
    $cognome = $_POST['cognome'];
    $mail = $_POST['email'];

    if (!$nome || !$cognome || !$mail) {
        $message = "<p>Non puoi lasciare i campi vuoti!</p>";
        return;
    }

    try {
        $pdo->prepare($sql)->execute([$nome, $cognome, $mail, 3]);
        $message = "Utente Registrato con successo!";
    } catch (Exception $e) {
        $message = "<p>Utente già presente!</p>";
    };
}

?>
<?php

$result = "";

$query = "INSERT INTO Post (titolo, Contenuto, id_creatore) VALUES (?,?,?);";

if (isset($_POST['pubblica'])) {
    $titolo = $_POST['titolo'];
    $Contenuto = $_POST['contenuto'];
    $utente = $_POST['utente'];

    if (!$titolo || !$Contenuto) {
        $result = "<p>Non puoi lasciare i campi vuoti!</p>";
        return;
    }

    $pdo->prepare($query)->execute([$titolo, $Contenuto, $utente]);
    $result = "<p>Post registrato con successo!</p>";
}

?>
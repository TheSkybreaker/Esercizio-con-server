<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/stile.css">
    <title>Esercitazione PHP</title>
</head>

<?php
require_once("assets/php/connection.php");
require("assets/php/createUser.php");
require("assets/php/submit.php");
require("assets/php/postContent.php");

?>

<body class="container">
    <h2>Inserisci i tuoi dati</h2>
    <form action="" method="POST" class="row">
        <div class="col-auto">
            <input type="text" name="nome" placeholder="nome" class="form-control">
        </div>
        <div class="col-auto">
            <input type="text" name="cognome" placeholder="cognome" class="form-control col-auto">
        </div>
        <div class="col-auto">
            <input type="email" name="email" placeholder="email" class="form-control col-auto">
        </div>
        <button name="invio" class="btn btn-primary col-auto">Invia</button>
    </form>

    <?php echo $message; ?>

    <div class="mt-5">
        <form action="" method="POST">
            <label for="utente">Seleziona utente</label>
            <select name="utente">
                    <?php
                    $userList = $pdo->query('SELECT id, nome FROM users;');
                    foreach ($userList as $item) {
                        echo "<option value=\"{$item["id"]}\">{$item["nome"]}</option>";
                    };
                    ?>
            </select>
            <div>
                <label for="titolo">Titolo</label>
                <input type="text" placeholder="Titolo" name="titolo">
            </div>
            <div>
                <textarea name="contenuto" id="" cols="50" rows="5"></textarea>
            </div>
            <div>
                <button name="pubblica" class="btn btn-primary">Pubblica</button>
            </div>
        </form>
    </div>

    <?php echo $result; ?>
    <div class="row row-cols-1 row-cols-md-2 mt-5">
        <?php mostraPost(); ?>
    </div>

    <script src="assets/js/script.js"></script>
</body>

</html>
<?php

function mostraPost () {
    global $pdo;

    $postCreati = $pdo->query("
                        SELECT * FROM Post 
                        INNER JOIN Users on Post.id_creatore = Users.id;");

    foreach($postCreati as $item) {
        echo "<div class=\"col mt-3\">
        <div class=\"card h-100\">
        <div class=\"card-body\">
        <h3> {$item["titolo"]}</h3>
        <strong>Fatto da {$item["nome"]}</strong>
        <p>{$item["Contenuto"]}</p>
        </div>
        <div class=\"card-footer\">
        <a class=\"btn btn-danger\" href=\"assets/php/deletePost.php?id={$item["post_id"]}\">Elimina</a>
        </div>
        </div>
        </div>";
    }
}
?>
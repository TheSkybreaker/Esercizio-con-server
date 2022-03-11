<?php

function mostraPost () {
    global $pdo;
    $postCreati =$pdo->query("SELECT * FROM Post INNER JOIN Users on Post.id_creatore = Users.id;");
    foreach($postCreati as $item) {
        echo "<div class=\"post\">";
        echo "<h3> {$item["titolo"]}</h3>";
        echo "<strong>Fatto da {$item["nome"]}</strong>";
        echo "<p>{$item["Contenuto"]}</p>";
        echo "<a class=\"btn btn-danger\" href=\"assets/php/deletePost.php?id={$item["post_id"]}\">Elimina</a>";
        echo "</div>";
    }


}
?>
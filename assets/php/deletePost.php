<?php
require_once("connection.php");

$postId = $_GET["id"];

$delCmd = "DELETE FROM post WHERE post_id = $postId;";

$pdo->query($delCmd);

header('Location: ../../index.php');
exit;

?>
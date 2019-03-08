<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=TP_mini_chat;charset=utf8', 'root' , '');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMesssage());
}

$req = $bdd->prepare('INSERT INTO chat (pseudo, message) VALUES(?, ?)');
$req->execute(array($_POST['pseudo'], $_POST['message']));
// Effectuer ici la requête qui insère le message
// Puis rediriger vers minichat.php comme ceci :
header('Location: minichat.php');
?>
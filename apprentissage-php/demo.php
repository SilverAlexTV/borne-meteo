<?php
$bdd = new PDO('mysql:host=localhost;dbname=username', 'root','');
$reponse = $bdd->query('SELECT  FROM users');
while ($donnees = $reponse->fetch())
{
    echo '<p>' . $donnees['pseudo'] . ':' . $donnees['motdepasse'] . '</p>';
}
?>
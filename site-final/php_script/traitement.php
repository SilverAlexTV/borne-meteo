<?php
/*Variable de connexion à la base de donnée PostgreSQL*/
$host = "host=ec2-54-246-92-116.eu-west-1.compute.amazonaws.com;";
$port = "port=5432;";
$dbname = "dbname=dn3b7jaiq1jt3;";
$username = "user=ldpiwptjtzwnyd;";
$password =  "password=0195228c061fd465fd6af6b9dc692173735da847c79dcbb396d364c3ee071964";

/*Connexion à la base de donnée*/
$db = new PDO("pgsql:$host $port $dbname $username $password");

/*Vérification de la connexion à la base de donnée*/
if ($db){
  echo "Connecté à la base de donnée PostgreSQL";
}
else {
  echo "Erreur de connexion à la base de donnée PostgreSQL";
}

/*Préparation de la requête d'écriture*/
$ecriture = $db->prepare('INSERT INTO test(temperature, humidite, direction_vent, vitesse_vent) VALUES(:temperature, :humidite, :direction_vent, :vitesse_vent)');

/*Envoie de la requête d'écriture des données transmises par la borne stockées dans les variables ci-dessus*/
$ecriture->execute(array(
  'temperature' => $temperature,
  'humidite' => $humidite,
  'direction_vent' => $direction_vent,
  'vitesse_vent' => $vitesse_vent
));

/*Confirmation de l'écriture des données dans la base de donnée*/
echo 'Les données ont été ajoutées à la base de donnée PostgreSQL !'
?>
<?php
$motdepasseentre = $_POST['motdepasse'];
$motdepasse = "kangourou";

if ($motdepasseentre != $motdepasse){
    echo 'Le mot de passe est incorrect';
}
else {
    echo 'Les mots de passe de la NASA sont *** *** ***';
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mon super blog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <h1>Mon super blog !</h1>
    <p>Derniers billets du blog :</p>
    <?php
    $billets = new PDO('mysql:host=localhost;dbname=tp_blog;charset=utf8', 'root', '');

    $reponse = $billets->query('SELECT id,titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_fr FROM billets ORDER BY date_creation DESC LIMIT 0,5');
    while ($donnees = $reponse->fetch()){
    ?>
    <div class="news">
    <h3>
        <?php echo htmlspecialchars($donnees['titre']);?>
        <em>le <?php echo $donnees['date_creation_fr']; ?></em>
    </h3>
    <p>
        <?php
        echo nl2br(htmlspecialchars($donnees['contenu']));
        ?>
        <br>
        <em><a href="commentaires.php?billet=<?php echo $donnees['id']; ?>">Commentaires</a></em>
    </p>
    </div>
    <?php
    }
    $reponse->closeCursor();
    ?>
</body>
</html>
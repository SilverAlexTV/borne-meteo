<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Commentaires</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <a href="index.php">Retour à la liste des billets</a>
    <?php
        $commentaires = new PDO('mysql:host=localhost;dbname=tp_blog;charset=utf8', 'root', '');

        $reponse = $commentaires->prepare('SELECT id, titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_fr FROM billets WHERE id = ?');
        $reponse->execute(array($_GET['billet']));
        $donnees = $reponse->fetch();
    ?>

    <div class="news">
        <h3>
            <?php echo htmlspecialchars($donnees['titre']); ?>
            <em>le <?php echo $donnees['date_creation_fr']; ?></em>
        </h3>

        <p>
            <?php
            echo nl2br(htmlspecialchars($donnees['contenu']));
            ?>
        </p>
    </div>
    <?php
    $reponse->closeCursor();

    $reponse = $commentaires->prepare('SELECT auteur, commentaire, DATE_FORMAT(date_commentaire, \'%d/%m/%Y à %Hh%imin%ss\') AS date_commentaire_fr FROM commentaires WHERE id_billet = ? ORDER BY date_commentaire');
    $reponse->execute(array($_GET['billet']));

    while ($donnees = $reponse->fetch())
    {
    ?>
    <p><strong><?php echo htmlspecialchars($donnees['auteur']); ?></strong> le <?php echo $donnees['date_commentaire_fr']; ?></p>
    <p><?php echo nl2br(htmlspecialchars($donnees['commentaire'])); ?></p>
    <?php
    }
    $reponse->closeCursor();
    ?>
</body>
</html>
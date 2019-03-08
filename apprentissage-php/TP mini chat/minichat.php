<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Chat</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <style>form { text_align:center }</style>
    <form action="minichat_post.php" method="POST">
        <label for="pseudo">Pseudo</label>
        <input type="text" name="pseudo" id="pseudo" required>
        <br>
        <label for="message">Message</label>
        <input type="text" name="message" id="message" required>
        <br>
        <button>Envoyer</button>
    </form>
    <?php
        try
        {
            $bdd = new PDO('mysql:host=localhost;dbname=tp_mini_chat;charset=utf8', 'root', '');
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }
        $reponse = $bdd->query('SELECT pseudo, message FROM chat ORDER BY ID DESC LIMIT 0,10');
        while ($donnees = $reponse->fetch())
        {
            echo '<p><strong>' . htmlspecialchars($donnees['pseudo']) . '</strong> : ' . htmlspecialchars($donnees['message']) . '<p>';
        }

        $reponse->closeCursor();
    ?>
</body>
</html>
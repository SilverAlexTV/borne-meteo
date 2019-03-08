<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact-BMAC</title>
    <meta author="Alexandre Leclerc">
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>

    <!--Header-->
    <div class="header">
        <a href="../index.php" class="logo"><img src="images/chevreslogo.png" alt="chevre">BMAC.tk</a>
        <div class="header-right">
          <a class="active" href="../login/index.php">Se connecter</a>
        </div>
      </div> 
      <div class="pill-nav">
        <a href="../index.php">Accueil</a>
        <a class="active" href="#">Contact</a>
      </div>
      <div class="container">

      <!--Formulaire de contact-->
        <form action="../php_script/send.php" method="POST">

        <!--Confirmation d'envoie-->
          <?php if(isset($_GET['send']) AND $_GET['send'] == "Votre message a bien été envoyé !")
            {
              echo '<p class="send">' . $_GET['send'] . '</p>';
            }
          ?>

          <!--Champs de nom-->
          <label for="fname">Nom</label>
          <input type="text" id="fname" name="firstname" placeholder="Votre nom.." required>

          <!--Champs de prénnom-->
          <label for="lname">Prénom</label>
          <input type="text" id="lname" name="lastname" placeholder="Votre prénom.." required>

          <!--Champs d'email-->
          <label for="mail">E-mail</label>
          <input type="text" id="mail" name="email" placeholder="Votre email.." required>

          <!--Erreur mauvaise forme d'email-->
          <?php if(isset($_GET['error']) AND $_GET['error'] == "Email mal formuler : exemple@exemple.com")
            {
              echo '<p class="error">' . $_GET['error'] . '</p>';
            }
          ?>

          <!--Champs objet-->
          <label for="object">Objet</label>
          <input type="text" id="object" name="object" placeholder="Objet de votre message .." required>

          <!--Champs message-->
          <label for="subject">Message</label>
          <textarea id="subject" name="subject" placeholder="Votre message.." style="height:200px" required></textarea>

          <!--Bouton d'envoi-->
          <input type="submit" value="Envoyer">
        </form>
      </div> 
      
      <!--Footer--> 
      <?php include '../include/accueil/footer.php' ?>
</body>
</html>
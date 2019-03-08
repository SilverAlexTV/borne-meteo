<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Accueil-BMAC</title>
    <meta author="Alexandre Leclerc">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

    <!--Header-->
    <div class="header">
        <a href="#" class="logo"><img src="images/chevreslogo.png" alt="chevre">BMAC.tk</a>
        <div class="header-right">
          <a class="active" href="login/index.php">Se connecter</a>
          </div>
        </div>
      </div> 
      <div class="pill-nav">
        <a class="active" href="#">Accueil</a>
        <a href="accueil/contact.php">Contact</a>
      </div>

      <!--Corps de page-->
      <section>
          <article>
            <h2>Qui sommes nous ?</h2>
            <p>
                Nous sommes une équipe de 4 élèves de teminale STI2D au lycée Lafayette à LaPardieu (Clermont-Fd). <br>
                Il y a un élève de la spécialité ITEC (Innovations Technologiques et Eco-Conception) et 3 élèves de la spécialité SIN 
                (Système d'Information et Numérique)
            </p>
          </article>
          <article>
            <h2>Quel est notre projet ?</h2>
            <p>
                Nous développons en cours une borne météo autonome connectée.
            </p>
            <h3>Son but</h3>
            <p>
                Le but de cette borne météo est d'être implantée dans des paturages afin d'informer un éleveur sur les conditions 
                météorologiques au niveau du paturage où se situe son troupeau.
            </p>
            <h3>Pour qui ?</h3>
            <p>
                Le système est prévu pour les éléveurs de chèvres principalement mais pourra être utiliser par des éleveur d'autres
                bétails.
            </p>
            <h3>Comment fonctionne notre système ?</h3>
            <p>
                Le système fonctionne grâce à des composants importants : <br>
                De nombreux capteurs :
            </p>
          </article>
      </section>
      
      <!-- Footer -->
    <?php include 'include/accueil/footer.php' ?>
</body>
</html>
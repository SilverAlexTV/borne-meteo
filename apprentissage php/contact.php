<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Accueil-BMAC</title>
    <meta author="Alexandre Leclerc">
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div class="header">
        <a href="index.html" class="logo"><img src="images/chevreslogo.png" alt="chevre">BMAC.tk</a>
        <div class="header-right">
          <a class="active" href="Login_v6/index.html">Se connecter</a>
        </div>
      </div> 
      <div class="pill-nav">
        <a href="index.html">Accueil</a>
        <a class="active" href="contact.html">Contact</a>
      </div>
      <div class="container">
        <form action="send.php" method="POST">
      
          <label for="fname">Nom</label>
          <input type="text" id="fname" name="firstname" placeholder="Votre nom.." required>
      
          <label for="lname">Prénom</label>
          <input type="text" id="lname" name="lastname" placeholder="Votre prénom.." required>

          <label for="mail">E-mail</label>
          <input type="text" id="mail" name="email" placeholder="Votre email.." required>

          <label for="object">Objet</label>
          <input type="text" id="object" name="object" placeholder="Objet de votre message .." required>
      
          <label for="country">Pays</label>
          <select id="country" name="country" required>
            <option value="none">Votre pays</option>
            <option value="france">France</option>
            <option value="quebec">Canada</option>
            <option value="suisse">Suisse</option>
            <option value="belgique">Belgique</option>
          </select>
      
          <label for="subject">Message</label>
          <textarea id="subject" name="subject" placeholder="Votre message.." style="height:200px" required></textarea>
      
          <input type="submit" value="Envoyer">
      
        </form>
      </div>  
</body>
</html>
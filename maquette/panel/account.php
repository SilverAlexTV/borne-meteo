<?php
session_start();
?>
<!DOCTYPE html>
<html>
<title>Administration-BMAC</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="panel.css">
<style>
@media screen and (max-width: 455px) {
    .h3 {
        font-size:16px;
    }
}
</style>
<body style="background:#e6e6e6;color:black;">

<div class="w3-sidebar w3-light-grey w3-card-4 w3-animate-left" style="width:200px" id="mySidebar">
  <div class="w3-bar-block">
  <a class="w3-bar-item w3-button" href="panel.html">Informations Météo</a>
  <a class="w3-bar-item w3-button w3-blue" href="account.html">Mon compte</a>
  </div>
  <div class="w3-bar-block">
  <a class="w3-bar-item w3-button" href="../contact.html">Support</a>
  </div>
</div>

<div id="main" style="margin-left:200px">
    <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Détails personnels</h3>
        </div>
        <div class="panel-body" style="padding: 30px 20px;">
          <div class="row">
      <div class="col-sm-6">
        <div class="form-group">
          <label>Pseudo</label>
          <input type="text" class="form-control" value="<?php $_SESSION['pseudo']; ?>" disabled>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="form-group">
          <label>Email</label>
          <input type="text" class="form-control" value="<?php $_SESSION[' pseudo'] . "@gmail.com"; ?>" disabled>
        </div>
      </div>
    </div>

  <div class="box clearfix no-mb">

      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Changer de mot de passe</h3>
        </div>
        <div class="panel-body" style="padding: 30px 20px;">
          <form method="post" data-ajax="true" action="/user/change_pw">

      <div class="row">
        <div class="col-sm-6">
          <div class="form-group">
            <label>Mot de passe</label>
            <input type="password" class="form-control" name="password">
          </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
            <label>Confirmation</label>
            <input type="password" class="form-control" name="password_confirmation">
          </div>
        </div>
      </div>

      <div class="text-right">
        <button type="submit" class="btn btn-primary btn-large"><i class="fa fa-save"></i> Envoyer</button>
      </div>

    </form>
        </div>
      </div>


  </div>

            <div class="box clearfix no-mb">
        
        <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Changer d'email</h3>
            </div>
            <div class="panel-body" style="padding: 30px 20px;">
              <form method="post" data-ajax="true" action="/user/change_email">

        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label>Email</label>
              <input type="email" class="form-control" name="email">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label>Confirmation du mail</label>
              <input type="email" class="form-control" name="email_confirmation">
            </div>
          </div>
        </div>

        <div class="text-right">
          <button type="submit" class="btn btn-primary btn-large"><i class="fa fa-save"></i> Envoyer</button>
        </div>

      </form>
            </div>
          </div>
<script>
function w3_open() {
  document.getElementById("main").style.marginLeft = "180px";
  document.getElementById("mySidebar").style.width = "180px";
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("openNav").style.display = 'none';
}
function w3_close() {
  document.getElementById("main").style.marginLeft = "0";
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("openNav").style.display = "inline-block";
}
</script>
      
</body>
</html>
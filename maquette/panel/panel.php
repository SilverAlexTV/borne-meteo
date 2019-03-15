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
<a href="../index.html"><img src="../images/home.png" alt="home"></a>
<div class="w3-sidebar w3-light-grey w3-card-4 w3-animate-left" style="width:200px" id="mySidebar">
  <div class="w3-bar-block">
  <a class="w3-bar-item w3-button w3-blue" href="javascript:void(0)">Informations Météo</a>
  <a class="w3-bar-item w3-button" href="account.php">Mon compte</a>
  </div>
  <div class="w3-bar-block">
  <a class="w3-bar-item w3-button" href="../contact.html">Support</a>
  </div>
</div>

<div id="main" style="margin-left:200px">

<div class="table">
<div class="w3-container w3-display-container">
  <span title="open Sidebar" style="display:none" id="openNav" class="w3-button w3-transparent w3-display-topleft w3-xlarge" onclick="w3_open()">&#9776;</span>
  <table class="w3-table-all w3-hoverable">
      <tr class="w3-gray">
        <th><img src="../images/calendar.png" alt="calendar"> Dates</th>
        <th><img src="../images/hour.png" alt="hour"> Heure</th>
        <th><img src="../images/temperature.png" alt="temperature"> Températures</th>
        <th><img src="../images/water.png" alt="water"> Humidité</th>
        <th><img src="../images/wind.png" alt="wind"> Vitesse du vent</th>
        <th><img src="../images/windd.png" alt="wind-direction"> Direction du vent</th>
      </tr>
      <tr>
        <td>JJ/MM/AAAA</td>
        <td>hh:mm</td>
        <td>xx °C</td>
        <td>xx %</td>
        <td>xxx km/h</td>
        <td>Nord/Sud/Est/Ouest</td>
      </tr>
      <tr>
        <td>JJ/MM/AAAA</td>
        <td>hh:mm</td>
        <td>xx °C</td>
        <td>xx %</td>
        <td>xxx km/h</td>
        <td>Nord/Sud/Est/Ouest</td>
      </tr>
      <tr>
          <td>JJ/MM/AAAA</td>
          <td>hh:mm</td>
          <td>xx °C</td>
          <td>xx %</td>
          <td>xxx km/h</td>
          <td>Nord/Sud/Est/Ouest</td>
      </tr>
      <tr>
          <td>JJ/MM/AAAA</td>
          <td>hh:mm</td>
          <td>xx °C</td>
          <td>xx %</td>
          <td>xxx km/h</td>
          <td>Nord/Sud/Est/Ouest</td>
        </tr>
      </table>
</div>
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
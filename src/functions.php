<?php
function LinkScript(){
  echo "<link rel='stylesheet' href='../css/Page_d_accueil.css'>
  <link rel='stylesheet' href='../css/A_propos.css'>
  <link rel='stylesheet' href='../css/Compétences.css'>
  <link rel='stylesheet' href='../css/Expérience.css'>
  <link rel='stylesheet' href='../css/Formation.css'>
  <link rel='stylesheet' href='../css/Contact.css'>
  <link rel='stylesheet' href='fa/css/all.css'>
  <link rel='stylesheet' href='../css/Progress_bar.css'>
  <script src='https://www.google.com/recaptcha/api.js' async defer></script>";
}

function getHeader(){
  echo "<!DOCTYPE html>
  <html lang='fr'>
  <head>
      <meta charset='utf-8'>
      <title>Site-personnel-lf</title>";
  LinkScript();
  echo "</head>
  <body>";
}

function getFooter(){
  echo "</body>
  </html>";
}

function fleche($page_suivante){
  echo "<div><a href=$page_suivante class='flèche'><i class='fas fa-angle-down'></i></a></div>";
}

?>

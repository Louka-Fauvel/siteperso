<html>
<head>
    <meta charset="utf-8">
    <title>Contact</title>
    <link rel="stylesheet" href="Contact/Contact.css">
    <link rel="stylesheet" href="fa/css/all.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
<nav class="crumbs">
    <ol>
      <div class="titre">
        <b><a href="Page_d_accueil.php" class="Menu">Louka-Fauvel</a>
      </div>
      <li class="crumb"><a href="A_propos.php" class="Menu">A propos</a></li>
      <li class="crumb"><a href="Compétences.php" class="Menu">Compétences</a></li>
      <li class="crumb"><a href="Expérience.php" class="Menu">Expérience</a></li>
      <li class="crumb"><a href="Formation.php" class="Menu">Formation</a></li>
      <li class="crumb"><a href="Contact.php" class="Menu">Contact</a></li>
    </ol>
</nav>

<p class="titre_page">Contact</p>

<div class="logo">
  <img class="image_page" src="image/Logo_perso.jpg">
</div>

<table class="données">
  <tr>
    <td>
<form method="post">
        <p><label>Nom</label></p>
        <p><input type="text" name="nom" required></p>
        <p><label>Email</label></p>
        <p><input type="email" name="email" required></p>
        <p><label>Message</label></p>
        <p><textarea name="message" cols="100" rows="10" required></textarea></p>
        <p><input type="submit"></p>
    </form>

    <?php
   if(isset($_POST['message'])){
       $entete  = 'MIME-Version: 1.0' . "\r\n";
       $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
       $entete .= 'From: ' . $_POST['email'] . "\r\n";

       $message = '<h1>Message envoyé depuis la page Contact de site-personnel-fl.local</h1>
       <p><b>Nom : </b>' . $_POST['nom'] . '<br>
       <b>Email : </b>' . $_POST['email'] . '<br>
       <b>Message : </b>' . $_POST['message'] . '</p>';

       $retour = mail('louka.fauvel@sts-sio-caen.info', 'Envoi depuis page Contact', $message, $entete);
       if($retour) {
           echo '<p>Votre message a bien été envoyé.</p>';
       }
   }
   ?>

   <form action="?" method="POST">
      <div class="g-recaptcha" data-sitekey="your_site_key"></div>
      <br/>
      <input type="submit">
    </form>
  </td>
  </tr>
  </table>

  <div class="flèche">
  <i class="fas fa-caret-square-up"></i>
  </div>

<footer>
  <table class="sociaux">
  <tr>
  <td class="fa">
    <i class="fas fa-envelope">&nbsp;</i>
    <i class="fab fa-facebook-square"></i>
  </td>
  </tr>
  </table>

  <p class="pied_page">Mentions légales, crédit photo Fabienne Guérif
    <br>Réalisation Louka Fauvel
    <br>oct 2020
  </p>

</footer>

</body>
</html>

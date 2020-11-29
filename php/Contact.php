<!--Contact-->
<?php
getHeader();
?>
<div id="Contact"></div> <!--Point de téléportation-->
<div class="body_Contact">

<p class="titre_page">Contact</p>

<table class="table_page"><!--Un tableau pour pouvoir centrer le formulaire et l'image-->
  <tr>
    <td>
      <form method="POST">
              <p><label>Nom</label></p> <!--Etiquette de la case-->
              <p><input type="text" name="nom"></p> <!--  -->
              <p><label>Email</label></p>
              <p><input type="email" name="email" required minlength="1"></p>
              <p><label>Message</label></p>
              <p><textarea id="message" name="message" cols="50" rows="10" required></textarea></p>
              <div class="g-recaptcha" data-sitekey="6LekCeEZAAAAAGKY6QsC1ume5HZ3VB8HmFdBsyMX"></div>
              <br/>
              <input type="submit" id="bouton" name="bouton" value="Envoyez">
      </form>
    </td>
    <td>
      <div>
        <img class="image_page_Contact" src="image/Logo_perso.jpg" alt="Logo personnel">
      </div>
    </td>
  </tr>
</table>

<?php
  require_once 'reCaptcha/autoload.php';
  if(isset($_POST['bouton'])){
       $nom = $_POST['nom'];
       $email = $_POST['email'];
       $message = $_POST['message'];
       if(isset($_POST['g-recaptcha-response'])) {
           $recaptcha = new \ReCaptcha\ReCaptcha('6LekCeEZAAAAANjTYWyqTj6rRM9svC6KtcxEDEQQ');
           $resp = $recaptcha->verify($_POST['g-recaptcha-response']);
       if ($resp->isSuccess()) {
       echo "<center>Captcha Valide.</center>";

       $entete  = 'MIME-Version: 1.0' . "\r\n";
       $entete .= 'Content-type: text/html; charset="utf-8"' . "\r\n";
       $entete .= 'From: ' . $email . "\r\n";
       $message = '<h1>Message envoyé depuis la page Contact de site-personnel-fl.local</h1>
       <p><b>Nom : </b>' . $nom . '<br>
       <b>Email : </b>' . $email . '<br>
       <b>Message : </b>' . $message . '</p>';
       $retour = mail('louka.fauvel@gmail.com', 'Envoi depuis page Contact', $message, $entete);
       if($retour)
         echo '<center>Votre message a bien été envoyé.</center>';

       } else {
   $errors = $resp->getErrorCodes();
   echo "<center>Captcha Invalide.</center>";
  }
  } else {
  echo "<center>Captcha Non rempli.</center>";
  }
  }
?>

<footer>
  <table class="table_page">
  <tr>
  <td class="fa_footer">
    <a class="fa_icon_footer" href="https://www.facebook.com/louka.fauvel?fref=mentions" target="_blank"><i class="fab fa-facebook-square">&nbsp;</i></a>
    <a class="fa_icon_footer" href="https://github.com/Louka-Fauvel" target="_blank"><i class="fab fa-github"></i></a>
  </td>
  </tr>
  </table>

  <p class="pied_page">Mentions légales, crédit photo Fabienne Guérif
    <br>Hébergeur, Heroku
    <br>Respect des données personnelles (adresse mail, nom) pour répondre aux mails et demandes de l'utilisateur, non conservation des données
    <br>Réalisation Louka Fauvel
    <br>oct 2020
  </p>

</footer>
</div>
<?php
getFooter();
?>

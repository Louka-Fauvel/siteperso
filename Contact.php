<body>
<div id="Contact"></div>
<div class="body_Contact">

<p class="titre_page">Contact</p>

<table class="table_page">
  <tr>
    <td>

      <div>
        <img class="image_page_Contact" src="image/Logo_perso.jpg">
      </div>

    </td>
    <td>
<form method="POST">
        <p><label>Nom</label></p>
        <p><input type="text" name="nom" required="true" value="<?php if(isset($_POST['nom'])){ echo $_POST['nom']; } ?>"></p>
        <p><label>Email</label></p>
        <p><input type="email" name="email" required="true" value="<?php if(isset($_POST['email'])){ echo $_POST['email']; } ?>"></p>
        <p><label>Message</label></p>
        <p><textarea name="message" cols="100" rows="10" required="true" value="<?php if(isset($_POST['message'])){ echo $_POST['message']; } ?>"></textarea></p>

    </form>

    <?php
    require_once 'reCaptcha/autoload.php';
    if(isset($_POST['submitpost'])){
         if(isset($_POST['g-recaptcha-response'])) {
             $recaptcha = new \ReCaptcha\ReCaptcha('6LekCeEZAAAAANjTYWyqTj6rRM9svC6KtcxEDEQQ');
             $resp = $recaptcha->verify($_POST['g-recaptcha-response']);
         if ($resp->isSuccess()) {
         echo "Captcha Valide";

         $entete  = 'MIME-Version: 1.0' . "\r\n";
         $entete .= 'Content-type: text/html; charset="utf-8"' . "\r\n";
         $entete .= 'From: ' . $_POST['email'] . "\r\n";
         $message = '<h1>Message envoyé depuis la page Contact de site-personnel-fl.local</h1>
         <p><b>Nom : </b>' . $_POST['nom'] . '<br>
         <b>Email : </b>' . $_POST['email'] . '<br>
         <b>Message : </b>' . $_POST['message'] . '</p>';
         $retour = mail('louka.fauvel@gmail.com', 'Envoi depuis page Contact', $message, $entete);
         if($retour)
           echo '<p>Votre message a bien été envoyé.</p>';

         } else {
     $errors = $resp->getErrorCodes();
     echo "Captcha Invalide";
    }
    } else {
    echo "Captcha Non rempli";
    }
    }

    ?>



   <form method="POST">
      <div class="g-recaptcha" data-sitekey="6LekCeEZAAAAAGKY6QsC1ume5HZ3VB8HmFdBsyMX"></div>
      <br/>
      <input type="submit" name="submitpost">
    </form>
  </td>
  </tr>
  </table>

<footer>
  <table class="table_page">
  <tr>
  <td class="fa_footer">
    <a class="fa_icon_footer" href="https://www.facebook.com/louka.fauvel?fref=mentions"><i class="fab fa-facebook-square">&nbsp;</i></a>
    <a class="fa_icon_footer" href="https://github.com/Louka-Fauvel"><i class="fab fa-github"></i></a>
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

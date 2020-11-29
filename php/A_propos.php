<?php
getHeader();
?>
<div id="A_propos"></div>
<div class="body_A_propos">
<?php
echo "<p class='titre_page'>$a_propos[titre]</p>";
echo "<p class='accroche_page_A_propos'>$a_propos[accroche]</p>";
echo "<p class='texte_page_A_propos'>$a_propos[texte]</p>";
 ?>
<img class="image_page_A_propos" src="image/Louka_Fauvel.png" alt="photo de profil">
<?php
fleche('#Compétences');
?>
</div>
<?php
getFooter();
?>

<?php
getHeader();
echo "<div id='Expérience'></div>
<div class='body_Expérience'>
<p class='titre_page'>Expérience</p>
<table class='table_page'>";

for ($i=0; $i<3; $i++){
    echo "<tr class='tableau_page_Expérience'>";
    echo "<td class='tableau_page_Expérience'><img class='image_page_table' src=".$experiences[$i]['image']."></td>";
    echo "<td class='tableau_page_Expérience'>".$experiences[$i]['contexte']."</td>";
    echo "<td class='tableau_page_Expérience'>".$experiences[$i]['texte']."</td>";
    echo "</tr>";
}
echo "</table>
<div class='CV_page2'>
<a class='CV_page' href='image/CV.pdf' target='_blank'>Télécharger mon CV</a>
</div>";
fleche('#Formation');
echo "</div>";

getFooter();
?>

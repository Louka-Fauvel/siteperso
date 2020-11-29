<?php
getHeader();
echo "<div id='Formation'></div>
<div class='body_Formation'>
<p class='titre_page'>Formation</p>
<table class='table_page'>";

for ($i=0; $i<4; $i++){
    echo "<tr class='tableau_page_Formation'>";
    echo "<td class='tableau_page_Formation'><img class='image_page_table' src=".$formations[$i]['image']."></td>";
    echo "<td class='tableau_page_Formation'>".$formations[$i]['contexte']."</td>";
    echo "<td class='tableau_page_Formation'>".$formations[$i]['texte']."</td>";
    echo "</tr>";
}
echo "</table>";
fleche('#Contact');
echo "</div>";
getFooter();
?>

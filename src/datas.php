<?php
$menu=['A_propos','Compétences','Expérience','Formation','Contact'];

$a_propos=['titre'=>'Louka Fauvel','accroche'=>'Sérieux et collectif','texte'=>file_get_contents('./src/Contenus/Texte_A_propos.php', true)];

$competences=[['type'=>'Informatique et technique','competences'=> [
                                                                    ['title'=>'A l\'aise ++','niveau'=>100,'items'=>['Adobe Photoshop','Adobe Premiere']],
                                                                    ['title'=>'A l\'aise +','niveau'=>60,'items'=>['Labview','Arduino','Html/css','PacketTracer']],
                                                                    ['title'=>'En cours de pratique','niveau'=>25,'items'=>['Apache','Python']]
                                                                  ]
             ],
             ['type'=>'Langues','competences'=> [
                                                  ['title'=>'A l\'aise ++','niveau'=>100,'items'=>['']],
                                                  ['title'=>'A l\'aise +','niveau'=>60,'items'=>['Anglais']],
                                                  ['title'=>'En cours de pratique','niveau'=>25,'items'=>['Espagnol']]
                                                ]
            ]];

$experiences=[
              ['image'=>'image/Erasmus.png','contexte'=>'<b>ERASMUS +</b> <br>Institut Lemonnier <br>Octobre 2019 <br>1 semaine <br>Falkenberg, Suède','texte'=>file_get_contents('./src/Contenus/Texte_experience1.php', true)],
              ['image'=>'image/Erasmus.png','contexte'=>'<b>ERASMUS +</b> <br>Institut Lemonnier <br>Mars 2019 <br>1 semaine <br>Caen, Normandie','texte'=>file_get_contents('./src/Contenus/Texte_experience2.php', true)],
              ['image'=>'image/Corlet.png','contexte'=>'<b>Corlet</b> <br>Agence de communication <br>Janvier 2017 <br>1 semaine <br>Caen, Normandie','texte'=>file_get_contents('./src/Contenus/Texte_experience3.php', true)]
            ];

$formations=[
              ['image'=>'image/SupAvenir.png','contexte'=>'<b>BTS SIO 1ère année</b> <br>SupAvenir Sainte-Ursule <br>2020/2021 <br>Caen, Normandie','texte'=>'Conception et administration de bases de données, conception Web,
                <br>génie logiciel, cybersécurité et configuration de réseaux, architecture informatique.
                <p>Langages et outils : HTML/CSS, PHP, Python, SQL
                <br>Concepts : Algorithmique, POO, méthode Merise</p></td>'],
              ['image'=>'image/Lemonnier.jpg','contexte'=>'<b>Terminale STI2D SIN, section Euro</b> <br>Institut Lemonnier <br>2019/2020 <br>Caen, Normandie','texte'=>'Compétences étendues dans les 3 domaines «Matière, Energie, Information».
                <br>Intégration les démarches d’éco-conception et de développement durable afin de répondre aux enjeux de notre société.
                <br>Systèmes d’information et numérique : Analyse et création de solutions techniques.
                <br>Traitement des flux d’information ( voix, données, images) dans les systèmes pluritechniques actuels.
                <br>Gestion locale et à distance de l’information.
                <p>Langages et outils : Arduino, Labview</p>'],
              ['image'=>'image/Lemonnier.jpg','contexte'=>'<b>Première STI2D SIN, section Euro</b> <br>Institut Lemonnier <br>2018/2019 <br>Caen, Normandie','texte'=>'Compétences étendues dans les 3 domaines «Matière, Energie, Information».
                <br>Intégration les démarches d’éco-conception et de développement durable afin de répondre aux enjeux de notre société.
                <br>Systèmes d’information et numérique : Analyse et création de solutions techniques.
                <br>Traitement des flux d’information ( voix, données, images) dans les systèmes pluritechniques actuels.
                <br>Gestion locale et à distance de l’information.
                <p>Langages et outils : Arduino, Labview</p>'],
              ['image'=>'image/Dumont.jpg','contexte'=>'<b>Seconde générale</b> <br>Lycée Dumont d\'Urville <br>2017/2018 <br>Caen, Normandie','texte'=>'Option Sciences de l\'ingénieur']


            ];

 ?>

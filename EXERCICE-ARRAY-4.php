<?php

//Nous voulons simuler un jeu de carte. Pour ce faire, nous utilisons un tableau associatif dans la clé est la valeur de la carte et dont la valeur est
// un tableau contenant le nom de la carte (As par exemple) et un lien vers l’image de la carte (télécharger ces images et mettez les dans un dossier appelé carte).
 
$carte1 = array(
    '1' => array(
        'As',
        '<img src="https://static1.squarespace.com/static/5270d306e4b0f075b5044736/t/5a6f58ed419202096a414119/1517246719715/Ace.png"  width="100px" height="100px">',
    )
);

$carte2 = array(
    '2' => array(
        '2',
        '<img src="https://comps.canstockphoto.fr/coeur-poker-2-jeu-carte-clipart-vectoris%C3%A9_csp30183511.jpg" width="100px" height="100px">',
    )
);

$carte3 = array(
    '3' => array(
        '3',
        '<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/52/Playing_card_spade_3.svg/200px-Playing_card_spade_3.svg.png"  width="100px" height="100px">',
    )
);

$carte4 = array(
    '4' => array(
        '4',
        '<img src="http://www.tiragecarte.fr/images/cartes-classiques/4-carreau.jpg"  width="100px" height="100px">',
    )
);

$carte5 = array(
    '5' => array(
       '5' ,
        '<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fd/Playing_card_diamond_5.svg/819px-Playing_card_diamond_5.svg.png" width="100px" height="100px">',
    )
);
$carte6 = array(
    '6' => array(
        '6',
        '<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7e/6_of_hearts.svg/2000px-6_of_hearts.svg.png"  width="100px" height="100px">',
    )
);
$carte7 = array(
    '7' => array(
        '7',
        '<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/95/07_of_diamonds.svg/langfr-150px-07_of_diamonds.svg.png"  width="100px" height="100px">',
    )
);
$carte8 = array(
    '8' => array(
        '8',
        '<img src="os_83317118-stock-illustration-poker-playing-card-6-heart.jpg"  width="100px" height="100px">',
    )
);
$carte9 = array(
    '9' => array(
        '9',
        '<img src="https://www.tests-qi.fr/images/cartes/carte-9-coeur.png"  width="100px" height="100px">',
    )
);
$carte10 = array(
    '10' => array(
        '10',
        '<img src="http://ghbridge.free.fr/cartes/KXC.png"  width="100px" height="100px">',
    )
);

// l tab imbique t5arej f FATAL ERROR 


$cartes = array ( $carte1, $carte2, $carte3, $carte4, $carte5, $carte6, $carte7, $carte8, $carte9, $carte10,);


echo "<div align='center'><font color='red'> jeu de carte  </font> </strong></div>";
// Ensuite, on crée une variable joueur 1 et une variable joueur 2. Chacune de ces deux variables contiendra un tableau de carte.
$x =0;
$y = 0;
for ($i = 1; $i <= 10; $i++){
	
	//array_rand — Prend une ou plusieurs valeurs, au hasard dans un tableau; l res est un tableau 
    $rand1 = array_rand($cartes);
    $rand2 = array_rand($cartes);

    $ScoreJoueur1 = key($cartes[$rand1]) ;
    $ScoreJoueur2 = key($cartes[$rand2]) ;


    if ($ScoreJoueur1>$ScoreJoueur2){

        $x += 1;

    }elseif($ScoreJoueur1<$ScoreJoueur2){

        $y += 1;
    }else{
        $x += 0;
        $y += 0;
    }
	
	
 ///// Partie 1er joueur  
    echo "<div style='display: flex; justify-content: space-between'>";
    echo "<div style='display: flex; flex-direction: column;'>";
    echo "<p style='justify-content: center'>tour Joueur 1</p>";
    
    print_r($cartes[$rand1][$ScoreJoueur1][0]); //
    print_r($cartes[$rand1][$ScoreJoueur1][1]); //[1]
    echo "</div>";


//////Partie 2em joueur 

    echo "<div style='display: flex; flex-direction: column;'>";
    echo "<p style='justify-content: center'>tour Joueur 2</p>";
   
    print_r($cartes[$rand2][$ScoreJoueur2][0]); //[0]
    print_r($cartes[$rand2][$ScoreJoueur2][1]); //
    echo "</div>";

    echo "</div>"; 
}
///////// Resultat 
if ($x > $y){
    echo "<div align='center'><font color='red'> Joueur 1 a gagné la bataille  </font> </strong></div>";
}elseif ($x < $y){
    echo "<div align='center'><font color='red'>Joueur 2 a gagné la bataille  </font></div>";
}else{
    echo "<div align='center'><font color='red'>Rejouer </font></div>";
}


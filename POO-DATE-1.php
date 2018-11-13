<?php
for($i=2005;$i<=2018;$i++)
{

    $jour=mktime(0,0,0,5,1, $i);

    $jourDeLa= array(" Dimanche "," Lundi "," Mardi "," Mercredi "," Jeudi "," Vendredi "," Samedi ");

    $num=date('w',$jour);


    if(date("w",$jour)==6 OR date("w",$jour)==0 ) {

        echo "Le 1er Mai $i était un $semaine[$num]:Désolé <br>";

    }elseif(date("w",$jour)==5 OR date("w",$jour)==1 ) {
        echo "Le 1er Mai $i était un $semaine[$num]: Week-end prolongé <br>";
        //si c'est entre Mardi et Jeudi
    }else{
        echo "Le 1er Mai $i était un $semaine[$num]:En plein milieu de semaine</b>";
    }
}

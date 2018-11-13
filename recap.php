

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>recap</title> 
</head>

<body>




       <?php
    echo "bonjour ";
        if (isset($_POST['envoyer'])){ 
             echo "<p align='center'>RECAP DE VOTRE COMMANDE:</p> <br><br>";
             $fname = $_POST['firstName'];
             $lname = $_POST['lastName'];
            
             echo " Bonjour <strong>{$fname}, {$lname} </strong> <br>, vous trouvez ci-dessous le recap de votre commande";
            }
            $fAdress=$_POST['adress'];
            $fEmail=$_POST['email']; 
       $nbre = $_POST['nombre'];
       $type = $_POST['type'];
       $ingredient = $_POST['ingredients'];
         ?>

<ul>
    <li>
        <?php echo "{$nbre}";?> Sandwitch(s)
    </li>

    <li>
        A l'Addresse: <?php echo "{$fAdress}";?>
    </li>

    <li>
        Le(s) sandwitch(s) est/sont de type : <?php echo "{$type}";?>
    </li>
    <?php
    //if($_POST['ingredients'] !== null){ ?> 
        <li>

            Avec les ingredients:
        <ul>


            <?php foreach ($_POST['ingredients'] as $n): ?> 
                        <li><?php echo $n;  ?></li>
            <?php endforeach; ?>

        </ul>
     
    </li>

</ul>

       <?php
       if ($nbre >=10){
       echo  " Vous beneficiez d'une remise de 10%: " .$addition  = ($nbre * 4) - (10*($nbre * 4)/100). " dt"; 
              }
              else{
           $addition  = $nbre * 4;
       }
       ?>
       <p>
           Votre addition est:
           <?php echo $addition?."dt">
       </p>

       <br>

</body>
</html>


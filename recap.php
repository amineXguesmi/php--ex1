<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo uniqid();?></title>
    <?php $GLOBALS["nbremax"]=60;?>
    </head>
<body>
    <?php     
     $nom=htmlEntities($_POST["nom"]);
     $prenom=htmlEntities($_POST["prenom"]);
     $nbre=htmlEntities($_POST["nbre"]);
     $adresse=htmlEntities($_POST["adresse"]);
     $type=htmlEntities($_POST["type"]);
     if(isset($_POST["harisa"]))
        $harisa=$_POST["harisa"];
    if(isset($_POST["salade"]))
        $salade=$_POST["salade"];
    if(isset($_POST["mayo"]))
        $harisa=$_POST["mayo"];
     $a="";
     if(isset($harisa))
       $a=$a."harisa";
     if(isset($salade))
       $a=$a.", salade ";
    if(isset($mayo))
       $a=$a.", mayo ";
        echo "<h1>Bienvenue chez nous $prenom $nom </h1>";
     echo "<h1> votre commande : $nbre sandwitch $type avec $a qui vont étre delivrée à votre adresse :$adresse </h1>";
     if($nbre>=10)
     {   $x=$nbre*9;
         echo "<h1> le prix totalle est : $x dt </h1>";
     }
     else {
        $x=$nbre*10;
        echo "<h1>le prix totalle est : $x dt </h1>";}
    ?>
</body>
</html>
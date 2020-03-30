<?php
include("tridy.php");
?>
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
  
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<p>
<?php echo "Postava: " . $behavior->race ?></br>
<?php echo "Pohlavi: " . $behavior->sex ?></br>
<?php echo "Jméno: " . $behavior->name ?></br>
<?php echo "Příjmení: " . $behavior->surname ?></br>
<?php echo "Síla: " . $behavior->strenght ?></br>
<?php echo "Obratnost: " . $behavior->dexerity ?></br>
<?php echo "Inteligence: " . $behavior->inteligence ?></br>
<?php echo "Moudrost: " . $behavior->wisdom ?></br>
<?php echo "Stamina: " . $behavior->stamina ?></br>
<?php echo "Charisma: " . $behavior->charisma ?> <br>






</p>
</body>
</html>
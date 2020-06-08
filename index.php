<?php
$HP = 100;
define ('MaxDmg', 25);
define ('MinDmg', 10);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mamka s pantoflí</title>
</head>
<body>
    <?php

    do {
        $HP = $HP - rand(MinDmg, MaxDmg); if ($HP < 0) {
        $HP = 0;
    } echo  "<br>Matka vrhla pantoflí, zbývá ti $HP HP. ";
    
    }while($HP > 0);
 
      if ($HP <= 0) {
         echo " <br><b>Game over";
    }

     ?>
</body>
</html>
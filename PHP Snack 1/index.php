<?php include("matches.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php for($i=0; $i<$lunghezzaArray; $i++){
            $casa = $matches[$i]['casa'];
            $ospite = $matches[$i]['ospite'];  
            $puntiC = $matches[$i]['pC'];
            $puntiO = $matches[$i]['pO']; 
        
        ?>
        <h2><?php echo $casa." - ".$ospite." | ".$puntiC." - ".$puntiO ?></h2>
    


        <?php } ?>
    
</body>
</html>
<?php
    $message="Accesso Riuscito ";
    $name=$_GET['name'];
    $email=$_GET['email'];
    $age=$_GET['age'];
    if( empty($name)|| empty($email)|| empty($age)){
        $message="Si prega di compilare i campi";
    }
    elseif(  !(strlen($name)>3 && (strpos($email,'@') && strpos($email,'.')) && is_numeric($age)) ){
        $message="Accesso Negato ";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h2><?php echo $message ?></h2>
    
</body>
</html>
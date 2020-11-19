<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice 1</title>
</head>
<body>
    
<?php
    $age = 140 ;

    if (($age >= 18) && ($age <= 120)){
        echo 'Vous êtes majeur' ;
    }
    if (($age < 18) && ($age >= 0)){
        echo 'Vous êtes mineur' ;
    }
    else {
        echo 'Vous êtes un  menteur' ;
    }
?>

</body>
</html>
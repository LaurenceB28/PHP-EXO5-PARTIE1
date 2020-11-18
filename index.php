<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exophp5</title>
</head>

<body>
    <p>
        <?php

        $answer = 'yes';

        if ($answer == 'yes') // SI la réponse est oui
        {
            echo 'Vous avez répondu OUI!';
        
        } 

        // elseif ($answer == 'Non')
        
        
        else // SI la réponse est NON
        {
            echo 'Vous avez répondu NON!';

        }

        ?>
    </p>
</body>

</html>
<?php

    $passwordLenght = $_GET['passwordLenght'];

    function passwordGenerator($passwordLenght){

        $permittedCharacters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()[]{}|;:,.<>?';
        $lunghezzaCaratteriPermessi = strlen($permittedCharacters);
        $randomPassword = '';

        for( $i = 0 ; $i < $passwordLenght ; $i++) {

            $randomCharacter = $permittedCharacters[rand(0 , $lunghezzaCaratteriPermessi - 1)];
            $randomPassword .= $randomCharacter;

        }

        return $randomPassword;
    }

?>









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>
</head>
<body>
    


    <div>
        <form action="" method="GET">
            <input type="number" name="passwordLenght">

            <button type="submit">
                Invio
            </button>
        </form>
    </div>


    <div>
        <?php

            $randomPassword = passwordGenerator($passwordLenght);
            echo $randomPassword;

        ?>
    </div>
</body>
</html>
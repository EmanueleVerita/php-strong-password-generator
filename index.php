<?php

    include_once __DIR__ .'/funcions.php';

    $passwordLenght = $_GET['passwordLenght'];

    

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
<?php

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
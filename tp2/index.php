<?php 
// Exercice 2
declare(strict_types=1);
$age=20;

function showAge(int $a):void
{
    echo "Votre age est $a";
}

showAge($age);

<!--
    Exercice 7

Traduire ce code avec des if et des else :

  echo ($maVariable == false) ? 'c\'est pas bon !!!' : 'c\'est ok !!';
-->

<?php

$maVariable = "false";

if($maVariable == "false")
{
    echo "C'est pas bon !!!";
}
else
{
    echo "C'est ok !!!";
}
?>
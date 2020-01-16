<!--
    Traduire ce code avec des if et des else :

  echo ($maVariable) ? 'c\'est ok !!' : 'c\'est pas bon !!!';
-->

<?php

    $maVariable = "C'est ok !!";

    if($maVariable === $maVariable)
    {
       echo $maVariable;
    }
    else
    {
        echo "C'est pas bon !!!";
    }
    
?>
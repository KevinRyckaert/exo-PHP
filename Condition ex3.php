<!--
    Exercice 3

Créer deux variables age et genre. La variable genre peut prendre comme valeur :

    Homme
    Femme

En fonction de l'âge et du genre, afficher la phrase correspondante :

    Vous êtes un homme et vous êtes majeur
    Vous êtes un homme et vous êtes mineur
    Vous êtes une femme et vous êtes majeur
    Vous êtes une femme et vous êtes mineur

Gérer tous les cas.
-->

<?php
    $age = 29;

    $genre = "Homme";

    if ($age >= 18 and $genre === 'Homme') 
    {
        echo "Vous êtes un homme et vous êtes majeur";
    }
    elseif ($age >= 18 and $genre === "Femme")
    {
        echo "Vous êtes une femme et vous êtes majeur";
    }
    elseif ($age < 18 and $genre === 'Femme')
    {
        echo "Vous êtes une femme et vous êtes mineur";
    }
    else
    {
        echo "Vous êtes un homme et vous êtes mineur";
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Condition ex3</title>
</head>
<body>
    
</body>
</html>

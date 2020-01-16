<!--
    Exercice 6

    C'est les soldes. 
    
    Un t-shirt qui te plaît coûte 785€ à la base mais ce mois-ci, 

    ton magasin préféré lui applique une ristourne de 30%. 

    Grâce à tes nouvelles connaissances en PHP, affiche le prix de départ,

    le montant de la ristourne et le prix que tu vas payer sur ton navigateur.
-->

<?php

$prix = 785;

$solde = $prix*(30/100);

$newPrix = $prix - $solde;

    echo "une ristourne de $solde € sur 785 € et le prix que tu vas payé est $newPrix €";

    
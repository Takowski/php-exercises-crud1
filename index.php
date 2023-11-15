<?php
include 'connect.php';
include 'query.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercice 1</title>
    </head>
    <body>
        <h1>Crud</h1>
        <h2>Partie 1</h2>
        <h3>Exercice 1</h1>
        <h4>Afficher tous les clients.</h3>
        <p><?php DisplayAllCustomer(); ?></p>
        <hr>
        <h3>Exercice 2</h3>
        <h4>Afficher tous les types de spectacles possibles.</h3>
        <p><?php DisplayAllShow(); ?></p>
        <hr>
        <h3>Exercice 3</h3>
        <h4>Afficher les 20 premiers clients.</h3>
        <p><?php Display20Customer(); ?></p>
        <hr>
        <h3>Exercice 4</h3>
        <h4>N'afficher que les clients possédant une carte de fidélité.</h3>
        <p><?php DisplayAllCustomerWithCard(); ?></p>
        <hr>
        <h3>Exercice 5</h3>
        <h4>Afficher uniquement le nom et le prénom de tous les clients dont le nom commence par la lettre "M". Les afficher comme ceci :</h4>
        <p><?php DisplayAllCustomerStartByM(); ?></p>
        <hr>
        <h3>Exercice 6</h3>
        <h4>Afficher le titre de tous les spectacles ainsi que l'artiste, la date et l'heure. Trier les titres par ordre alphabétique. Afficher les résultat comme ceci : Spectacle par artiste, le date à heure.</h4>
        <p><?php DisplayAllShowWithArtistDateHour(); ?></p>
        <hr>
        <h3>Exercice 7</h3>
        <h4>display all client in a card format with fidelity card y/n then his card number</h4>
        <p><?php displayClientCard(); ?></p>
    </body>
</html>

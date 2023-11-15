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
        <h1>Crud1</h1>
        <h2>Exercice 1</h1>
        <h3>Afficher tous les clients.</h2>
        <p><?php DisplayAllCustomer(); ?></p>
        <hr>
        <h2>Exercice 2</h2>
        <h3>Afficher tous les types de spectacles possibles.</h2>
        <p><?php DisplayAllShow(); ?></p>
        <hr>
        <h2>Exercice 3</h2>
        <h3>Afficher les 20 premiers clients.</h2>
        <p><?php Display20Customer(); ?></p>
        <hr>
        <h2>Exercice 4</h2>
        <h3>N'afficher que les clients possédant une carte de fidélité.</h2>
        <p><?php DisplayAllCustomerWithCard(); ?></p>
        <hr>
        <h2>Exercice 5</h2>
        <h3>Afficher uniquement le nom et le prénom de tous les clients dont le nom commence par la lettre "M". Les afficher comme ceci :</h3>
        <p><?php DisplayAllCustomerStartByM(); ?></p>
        <hr>
        <h2>Exercice 6</h2>
        <h3>Afficher le titre de tous les spectacles ainsi que l'artiste, la date et l'heure. Trier les titres par ordre alphabétique. Afficher les résultat comme ceci : Spectacle par artiste, le date à heure.</h3>
        <p><?php DisplayAllShowWithArtistDateHour(); ?></p>
        <hr>
        <h2>Exercice 7</h2>
        <h3>display all client in a card format with fidelity card y/n then his card number</h3>
        <p><?php displayClientCard(); ?></p>




    </body>
</html>

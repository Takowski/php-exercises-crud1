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
    </body>
</html>

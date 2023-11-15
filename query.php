<?php
// Display all customer
function DisplayAllCustomer()
{
    require 'connect.php';
    $query = $pdo->query('SELECT * FROM clients');
    $clients = $query->fetchAll();
    echo "<table>";
    echo "<tr><th>Last Name</th><th>First Name</th></tr>";
    foreach ($clients as $client) {
        echo "<tr>";
        echo "<td>" . $client['lastName'] . "</td>";
        echo "<td>" . $client['firstName'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}

// Display all show
function DisplayAllShow()
{
    require 'connect.php';
    $query = $pdo->query('SELECT * FROM shows');
    $shows = $query->fetchAll();
    echo "<table>";
    echo "<tr><th>Title</th></tr>";
    foreach ($shows as $show) {
        echo "<tr>";
        echo "<td>" . $show['title'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}

// Display 20 first customer
function Display20Customer()
{
    require 'connect.php';
    $query = $pdo->query('SELECT * FROM clients LIMIT 20');
    $clients = $query->fetchAll();
    echo "<table>";
    echo "<tr><th>Last Name</th><th>First Name</th></tr>";
    foreach ($clients as $client) {
        echo "<tr>";
        echo "<td>" . $client['lastName'] . "</td>";
        echo "<td>" . $client['firstName'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}

// Display all customer with card
function DisplayAllCustomerWithCard()
{
    require 'connect.php';
    $query = $pdo->query('SELECT * FROM clients WHERE card=1');
    $clients = $query->fetchAll();
    echo "<table>";
    echo "<tr><th>Last Name</th><th>First Name</th></tr>";
    foreach ($clients as $client) {
        echo "<tr>";
        echo "<td>" . $client['lastName'] . "</td>";
        echo "<td>" . $client['firstName'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}
// Display all customer start by M
function DisplayAllCustomerStartByM()
{
    require 'connect.php';
    $query = $pdo->query('SELECT * FROM clients WHERE lastName LIKE "M%" ORDER BY lastName');
    $clients = $query->fetchAll();
    echo "<table>";
    echo "<tr><th>Last Name</th><th>First Name</th></tr>";
    foreach ($clients as $client) {
        echo "<tr>";
        echo "<td>" . $client['lastName'] . "</td>";
        echo "<td>" . $client['firstName'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}
// Display all show with artist date and hour, order by title
// display it like this: Spectacle by artist, date at hour
function DisplayAllShowWithArtistDateHour()
{
    require 'connect.php';
    $query = $pdo->query('SELECT * FROM shows ORDER BY title');
    $shows = $query->fetchAll();
    echo "<table>";
    echo "<tr><th>Title</th><th>Artist</th><th>Date</th><th>Hour</th></tr>";
    foreach ($shows as $show) {
        echo "<tr>";
        echo "<td>" . $show['title'] . "</td>";
        echo "<td>" . $show['performer'] . "</td>";
        echo "<td>" . $show['date'] . "</td>";
        echo "<td>" . $show['startTime'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}
// Display all client in a tile for each client display all show he has seen
function displayClientCard()
{
    require 'connect.php';
    $query = $pdo->query('SELECT * FROM clients');
    $clients = $query->fetchAll();
    foreach ($clients as $client) {
        echo "<p> Nom: " . $client['lastName'] . "</p>";
        echo "<p>Prénom: " . $client['firstName'] . "</p>";
        echo "<p>Date de naissance: " . $client['birthDate'] . "</p>";
        if ($client['card'] == 1) {
            echo "<p>Carte de fidélité : Oui</p>";
            echo "<p>Numéro de carte: " . $client['cardNumber'] . "</p>";
        } else {
            echo "<p>Carte de fidélité: Non</p>";
        }
        echo "<hr>";
    }
}

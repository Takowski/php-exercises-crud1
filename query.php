<?php
// Display all customer
function DisplayAllCustomer(){
    require 'connect.php';
    $query=$pdo->query('SELECT * FROM clients');
    $clients=$query->fetchAll();
    echo "<table>";
    echo "<tr><th>Last Name</th><th>First Name</th></tr>";
    foreach ($clients as $client){
        echo "<tr>";
        echo "<td>".$client['lastName']."</td>";
        echo "<td>".$client['firstName']."</td>";
        echo "</tr>";
    }
    echo "</table>";
}

// Display all show
function DisplayAllShow(){
require 'connect.php';
$query=$pdo->query('SELECT * FROM shows');
$shows=$query->fetchAll();
echo "<table>";
echo "<tr><th>Title</th></tr>";
foreach ($shows as $show){
    echo "<tr>";
    echo "<td>".$show['title']."</td>";
    echo "</tr>";
}
echo "</table>";    

}

// Display 20 first customer
function Display20Customer(){
    require 'connect.php';
    $query=$pdo->query('SELECT * FROM clients LIMIT 20');
    $clients=$query->fetchAll();
    echo "<table>";
    echo "<tr><th>Last Name</th><th>First Name</th></tr>";
    foreach ($clients as $client){
        echo "<tr>";
        echo "<td>".$client['lastName']."</td>";
        echo "<td>".$client['firstName']."</td>";
        echo "</tr>";
    }
    echo "</table>";
}

// Display all customer with card
function DisplayAllCustomerWithCard(){
    require 'connect.php';
    $query=$pdo->query('SELECT * FROM clients WHERE card=1');
    $clients=$query->fetchAll();
    echo "<table>";
    echo "<tr><th>Last Name</th><th>First Name</th></tr>";
    foreach ($clients as $client){
        echo "<tr>";
        echo "<td>".$client['lastName']."</td>";
        echo "<td>".$client['firstName']."</td>";
        echo "</tr>";
    }
    echo "</table>";
}



?>
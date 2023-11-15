<?php
try {
    $pdo=new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8','root','root');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $e) {
    echo "Connection failed: ".$e->getMessage();
}
?>
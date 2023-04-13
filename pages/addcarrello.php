<?php
    session_start();
    include "../connect.php";
    $product = $_POST['prodotto'] ;
    $id = $_SESSION['id'];
    $mysqli = open();
    $query = "INSERT INTO orders(product, userId) VALUES ('$product', '$id')";
    $result = $mysqli->query($query);
    header("Location: ./carrello.php");
?>
<?php
function open(){
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "FerreEFerretti";
    $mysqli = new mysqli($host, $username, $password, $database);
    return $mysqli;
}
?>
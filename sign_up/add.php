<?php
    include "../connect.php";
    $mysqli = open();
    if(!empty($_POST)){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $permission = 0;
        $query = "SELECT * FROM users WHERE email = '$email' ";
        $result = $mysqli->query($query);
        if ($result->num_rows == 0) {
            $query = "INSERT INTO users(email, password) VALUES ('$email', '$password')";
            $mysqli->query($query);
            $query = "SELECT ID FROM users WHERE email = '$emai' ";
            $result = $mysqli->query($query);
            $row = $result->fetch_assoc();
            $_SESSION["id"] = $row['ID'];
            header("Location: ../pages/home");
        }else {
            $_SESSION["err"] = 2;
            header("Location: ../index.php");
        }     
    }
    $mysqli->close();
?>
<?php
    include "../connect.php";
    session_start();
    if(empty($_POST)){
        header("Location: ../index.php");
        $_SESSION["err"] = 1;
    }else {
        $email = $_POST["email"];
        $password = $_POST["password"];

        $mysqli = open();
        $query = "SELECT id FROM users WHERE email = '$email' AND password = '$password'";
        $response = $mysqli->query($query);

        if($response->num_rows == 0){
            header("Location: ../index.php");
            $_SESSION["err"] = 1;
            $mysqli->close();
        }else{
            $row = $response->fetch_assoc();

            $_SESSION["id"] = $row['id'];
            
            header("Location: ../pages/home.php");
        }
        $mysqli->close();
    }
?>

<?php
    include_once 'database.php';
    session_start();
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $username = $_SESSION['username'];
        
        $stmt = $conn->prepare("SELECT * FROM credential WHERE username = '$username'");

        $stmt->execute();
        
        $readrow = $stmt->fetch(PDO::FETCH_ASSOC);

        $name = $readrow['username'];
        $pass= $readrow['password'];
            
    if($username==''){
        header("location:login.php");
        } else {
            header("");
    }
?>
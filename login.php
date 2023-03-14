<?php
    include_once 'database.php';
    session_start();
    if(isset($_SESSION['username'])) {
    } try {  
        if(isset($_POST["login"])) {  
            if(empty($_POST["username"]) || empty($_POST["password"])) {  
                $message = '<label>All fields are required</label>';  
            } else {  
                $query = "SELECT * FROM credential WHERE username = :username AND password = :password";  
                $stmt = $conn->prepare($query);  
                $stmt->execute(  
                    array(  
                        'username'  =>  $_POST["username"],  
                        'password'  =>  $_POST["password"]  
                    )  
                );  
                $count = $stmt->rowCount();  
                if($count > 0) {  
                    $_SESSION["username"] = $_POST["username"];
                    header("location:index.php");  
                } else {  
                    $message = '<label>Wrong Password!</label>';
                }  
            }  
        }  
    } catch(PDOException $error) {  
        $message = $error->getMessage();  
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>T-Shirt Inventory System</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <style>
            <?php include 'style.css'; ?>
        </style>
    </head>
    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
        <div class="ellipse"></div>
        <div class="ellipse2"></div>
        <div class="container1">
            <h1>T-Shirt Inventory System</h1>
            <div class="container2">
                <form method="post">
                    <h2>Administrator Login</h2>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="text" class="form-control" id="passsword" name="password" placeholder="Enter your password">
                    </div>
                    <div>
                        <button type="submit" name="login" class="btn btn-primary">Login</button> <!-- direct the page -->
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>


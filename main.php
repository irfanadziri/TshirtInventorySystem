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
            .ellipse{
                position: absolute;
                width: 745px;
                height: 745px;
                left: -271px;
                top: 98px;
                border-radius: 50%;
                background: rgba(115, 26, 58, 0.75);
                filter: blur(175px);
                z-index: -1;
            }
            .ellipse2{
                position: absolute;
                width: 546px;
                height: 546px;
                left: 1100px;
                top: 315px;
                background: rgba(151, 71, 255, 0.5);
                filter: blur(175px);
                z-index: -1;
            }
            body {
                background-color: #21092d;
                background-repeat: no-repeat;
                background-size: cover;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }
            h1 {
                width: auto;
                height: auto;
                font-family: Outfit;
                font-style: normal;
                font-weight: 600;
                font-size: 64px;
                line-height: 1;
                text-align: center;
                color: #ffffff;
            }
            .container1 {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }
            .container2 {
                width: auto;
                height: auto;
                padding: 50px 50px;
                background: #ffffff;
                border-radius: 8px;
                margin-top: 50px;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }
            .form-group {
                margin-top: 20px;
            }
            h2 {
                width: 292px;
                height: 32px;
                margin-bottom: 50px;
                font-family: Outfit;
                font-style: normal;
                font-weight: 600;
                font-size: 32px;
                line-height: 1;
                text-align: center;
                color: #4e217d;
            }
            label {
                font-family: Outfit;
                font-style: normal;
                font-weight: 400;
                font-size: 20px;
                line-height: 1;
                text-align: left;
                text-transform: capitalize;
                color: #5a5a5d;
                margin-bottom: 10px;
            }
            :placeholder-shown {
                font-family: Outfit;
                font-style: normal;
                font-weight: 400;
                font-size: 19px;
                line-height: 1;
                text-align: left;
                color: #CECECE;
            }
            .btn-primary {
                background-color: #9747ff;
                border-radius: 8px;
                margin-top: 20px;
            }
            .btn-primary:hover {
                background-color: #34A853;
            }
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
                <form action="#" method="post"> <!-- direct the page -->
                    <!-- mysql connect here -->
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
                        <button type="submit" name="login" href="#" class="btn btn-primary">Login</button> <!-- direct the page -->
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>


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
            .navbar .nav-link {
                width: 100%;
                height: 150px;
                background: transparent;
                display: flex;
                flex-direction: row;
                justify-content: space-between;
                align-items: center;
                padding: 0 50px;
                font-family: Outfit;
                font-size: 20px;
                color: #ffffff !important;
            }
            .navbar-brand {
                font-family: Outfit;
                font-size: 24px;
                font-style: extra-bold !important;
                color: #ffffff !important;
            }
            .ms-auto {
                padding-left: 500px;

            }
            .container-fluid {
                padding: 0;
            }
            h1 {
                width: 690px;
                height: 64px;
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
                box-sizing: content-box;
                margin-bottom: 20px;
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
                align-items: center !important;
            }
            .btn-primary:hover {
                background-color: #34A853;
            }
            .col {
                font-family: Outfit;
                font-style: normal;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="homePage.php">T-Shirt Inventory System</a>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                            <a class="nav-link" href="addShirt.php">Add</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="listInventory.php">Inventory</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="ellipse"></div>
        <div class="ellipse2"></div>
        <div class="container1">
            <div class="container2">
                <form action="#" method="post"> <!-- direct the page -->
                    <!-- mysql connect here -->
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <input type="text" class="form-control" id="search" name="search" placeholder="Search here">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <button type="submit" name="search" class="btn btn-primary">Search</button>
                                <!-- mysql query here -->
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="size">Brand</label>
                            <!-- echo brand mysql -->
                        </div>
                        <div class="col">
                            <label for="size">Size</label>
                            <!-- echo size mysql -->
                        </div>
                        <div class="col">
                            <label for="color">Color</label>
                            <!-- echo color mysql -->
                        </div>
                        <div class="col">
                                <button type="submit" name="edit" href="#" class="btn btn-primary">Edit</button> <!-- direct the page -->
                        </div>
                        <div class="col">
                            <button type="button" class="btn btn-danger">Delete</button>
                            <!-- mysql query here -->
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>


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
        <?php include 'navbar.html'; ?>
        <div class="ellipse"></div>
        <div class="ellipse2"></div>
        <div class="container1">
            <div class="container2">
                <form action="#" method="post"> <!-- direct the page -->
                    <!-- mysql connect here -->
                    <h2>Add New T-Shirt</h2>
                    <div class="form-group">
                        <label for="brand">Brand</label>
                        <input type="text" class="form-control" id="brand" name="brand" placeholder="Enter brand name">
                        <!-- query the brand sql here -->
                    </div>
                    <div class="form-group">
                        <label for="color">Color</label>
                        <input type="text" class="form-control" id="color" name="color" placeholder="Enter shirt color">
                        <!-- query the color sql here -->
                    </div>
                    <div class="form-group">
                        <label for="size">Size</label>
                        <input type="text" class="form-control" id="size" name="size" placeholder="Enter shirt size">
                        <!-- query the size sql here -->
                    </div>
                    <div>
                        <button type="submit" name="add" href="#" class="btn btn-primary">Add Record</button> <!-- direct the page -->
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>


<?php
  include_once 'session.php';
  include_once 'database.php';
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
            <?php include 'style2.css'; ?>
        </style>
    </head>
    <body>
        <?php include_once 'navbar.php'; ?>
        <div class="ellipse"></div>
        <div class="ellipse2"></div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                    <div class="page-header">
                        <h2>Create New Order</h2>
                    </div>
                    <form action="itemOrders.php" method="post" class="form-horizontal">
                        <div class="form-group">
                            <label for="orderid" class="col-sm-3 control-label">Order ID</label>
                            <div class="col-sm-9">
                                <input name="oid" type="text" class="form-control" id="orderid" placeholder="Order ID" readonly value="<?php if(isset($_GET['edit'])) echo $editrow['orders.id']; ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="odate" class="col-sm-3 control-label">Order Date</label>
                            <div class="col-sm-9">
                                <input name="orderdate" type="text" class="form-control" id="orderdate" placeholder="Order Date" readonly value="<?php if(isset($_GET['edit'])) echo $editrow['order_date']; ?>" required>
                            </div>
                        </div> 
                        <div class="form-group">
                            <label for="obrand" class="col-sm-3 control-label">Brand</label>
                            <div class="col-sm-9">
                                <select name="oid" class="form-control" id="obrand" required>
                                    <?php
                                        try {
                                            $stmt = $conn->prepare("SELECT * FROM brand");
                                            $stmt->execute();
                                            $result = $stmt->fetchAll();
                                            if (count($result) == 0) {
                                                echo '<option value="">No results found</option>';
                                            } else {
                                                foreach ($result as $brandrow) { ?>
                                                    <?php                                    
                                                    if ((isset($_GET['edit'])) && ($editrow['name'] == $brandrow['name'])) { ?>
                                                        <option value="<?php echo $brandrow['name']; ?>" selected><?php echo $brandrow['name']; ?></option>
                                                    <?php
                                                    } else { ?>
                                                        <option value="<?php echo $brandrow['name']; ?>"><?php echo $brandrow['name']; ?></option>
                                                    <?php
                                                    }
                                                    ?><?php
                                                }
                                            }
                                            $conn = null;
                                        } catch (PDOException $e) {
                                            echo "Error: " . $e->getMessage();
                                        }
                                    ?>
                                </select>
                            </div>
                        </div> 
                        <div class="form-group">
                            <label for="cname" class="col-sm-3 control-label">Customer</label>
                            <div class="col-sm-9">
                                <input name="cn" type="text" class="form-control" id="orderdate" placeholder="Customer Name" required>
                            </div>
                        </div> 
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <?php if (isset($_GET['edit'])) { ?>
                                <input type="hidden" name="oldpid" value="<?php echo $editrow['orders.id']; ?>">
                                <button class="btn btn-default" type="submit" name="update"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Update</button>
                                <?php } else { ?>
                                <button class="btn btn-default" type="submit" name="create"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Create</button>
                                <?php } ?>
                                <button class="btn btn-default" type="reset"><span class="glyphicon glyphicon-erase" aria-hidden="true"></span> Clear</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
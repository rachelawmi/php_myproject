<?php include('connection.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Panel X Ecommerce</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="bg-light">
    <?php include("navbar.php") ?>


    <div class="container-fluid">
        <div class="row min-vh-100">

            <div class="col-12 d-flex align-items-center justify-content-center bg-white">
                <div class="auth-card w-100 p-4 p-md-5" style="max-width: 850px;">
                    <div class="mb-5">
                        <h2 class="fw-bold">Product Update</h2>
                    </div>

                    <form>
                        <div class="row g-3">
                            <div class="col-md-8">
                                <label class="form-label small fw-bold">Product Name</label>
                                <input type="text" class="form-control rounded-3">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label small fw-bold">Price ($)</label>
                                <input type="number" class="form-control rounded-3">
                            </div>
                            <div class="col-md-12">
                                <label class="form-label small fw-bold">Stock Quantity</label>
                                <input type="number" class="form-control rounded-3" placeholder="0">
                            </div>
                            <div class="col-12">
                                <label class="form-label small fw-bold">Description</label>
                                <textarea class="form-control rounded-3" rows="3"></textarea>
                            </div>
                            <div class="col-12">
                                <label class="form-label small fw-bold">Product Image</label>
                                <input type="file" name="image" class="form-control rounded-3">
                            </div>
                            <div class="col-12 mt-4">
                                <button type="submit" class="btn btn-primary-custom w-100 py-3">Save Product</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
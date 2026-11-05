    <?php include('connection.php') ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Shop | Panel X Ecommerce</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-icons.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body class="bg-light">

        <?php include('navbar.php') ?>


        <header class="py-5 bg-white border-bottom mt-5">
            <div class="container pt-4">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{% url 'index' %}">Home</a></li>
                        <li class="breadcrumb-item active">Shop</li>
                    </ol>
                </nav>
            </div>
        </header>

        <main class="container py-5">
            <div class="row">
                <aside class="col-lg-3 d-none d-lg-block">
                    <div class="filter-section mb-4">
                        <h5 class="fw-bold mb-3">Categories</h5>
                        <ul class="list-unstyled">
                            <li class="mb-2"><a href="#" class="text-decoration-none text-secondary">Electronics (12)</a>
                            </li>
                            <li class="mb-2"><a href="#" class="text-decoration-none text-secondary">Fashion (45)</a></li>
                            <li class="mb-2"><a href="#" class="text-decoration-none text-secondary">Accessories (20)</a>
                            </li>
                            <li class="mb-2"><a href="#" class="text-decoration-none text-secondary">Home & Living (15)</a>
                            </li>
                        </ul>
                    </div>

                    <div class="filter-section mb-4">
                        <h5 class="fw-bold mb-3">Price Range</h5>
                        <input type="range" class="form-range" min="0" max="1000" id="priceRange">
                        <div class="d-flex justify-content-between text-secondary mt-2">
                            <span>$0</span>
                            <span>$1000</span>
                        </div>
                    </div>

                    <div class="filter-section">
                        <h5 class="fw-bold mb-3">Rating</h5>
                        <div class="fbaseorm-check mb-2">
                            <input class="form-check-input" type="checkbox" id="star4">
                            <label class="form-check-label text-secondary" for="star4">4 Stars & Up</label>
                        </div>
                    </div>
                </aside>

                <div class="col-lg-9">
                    <div class="d-flex justify-content-between align-items-center mb-4 bg-white p-3 rounded-3 shadow-sm">
                        <p class="mb-0 text-secondary">Showing 1-9 of 24 results</p>
                        <form method="GET">
                            <select class="form-select w-auto border-0 bg-light" name="order" onchange="this.form.submit()">
                                <option selected>Default sorting</option>
                                <option>Name: A to Z</option>
                                <option>Name: Z to A</option>
                                <option>Price: Low to High</option>
                                <option>Price: High to Low</option>
                                <option>Latest</option>
                                <option>Oldest</option>
                            </select>
                        </form>
                    </div>

                    <div class="row g-4">
                        <div class="col-md-6 col-xl-4">
                            <div class="card h-100 border-0 shadow-sm product-card">
                                <div class="position-relative overflow-hidden">
                                    <span class="badge bg-primary position-absolute m-3 top-0 start-0 z-1">New</span>
                                    <img src="images/watch.jpg" class="card-img-top p-2 rounded-4" alt="Product">
                                    <div class="product-actions d-flex flex-column gap-2">
                                        <a href="" class="btn btn-white shadow-sm"><i class="bi bi-cart"></i></a>
                                        <a class="btn btn-white shadow-sm"><i class="bi bi-eye"></i></a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="text-muted small mb-1">Smart Watch Ultra</p>
                                    <h6 class="card-title fw-bold">299.00$</h6>
                                    <div class="d-flex justify-content-between align-items-center mt-3">
                                        <!-- <span class="h5 fw-bold mb-0 text-primary">{{product.price}}</span> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </main>

        <script src="js/bootstrap.bundle.min.js"></script>
    </body>

    </html>
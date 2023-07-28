<section class="">
    <div class="container px-4 px-lg-5 mt-0">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <div class="input-group" style=" display:inline-flex; justify-content:flex-end; align-items:right; margin:40px;">
                <!-- <div class="dropdown">
                    <a class="dropdown-toggle btn border-success nav-link text-light font btn navigation" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <b class="hov">Category</b>
                    </a>

                    <div class="dropdown-menu border-success" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="./index.php">All Products</a>
                        <a class="dropdown-item" href="./fruits.php">Fruits</a>
                        <a class="dropdown-item" href="./vegetables.php">Vegetables</a>
                        <a class="dropdown-item" href="./others.php">Others</a>
                    </div>
                </div> -->
                <form method="GET" action="./psearch.php">

                    <div class="d-flex form-outline justify-content-end">

                        <input type="search" required value="<?php if (
                            isset($_GET['search'])
                        ) {
                            echo $_GET['search'];
                        } ?>" placeholder="Search" name="search" class="d-inline form-control border-dark border-1 w-75">&nbsp;
                        <!-- <button type="submit" class="btn btn-dark text-white">
                            <i class="fa fa-search"></i>
                        </button> -->
                    </div>
                </form>
            </div>
            <!-- Products -->
            <?php while (
                $featuredProd = mysqli_fetch_array($featuredProducts)
            ) { ?>  
                <div class="col mb-5 zoom">
                    <div class="border-1 border-success card h-100 rounded-3">
                        <form action="" method="POST">
                            <!-- Product image-->
                            <img class="card-img-top" src="admin/uploads/products/<?php echo $featuredProd[
                                'photo'
                            ]; ?>" alt="" />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">
                                        <?php echo $featuredProd['name']; ?>
                                    </h5>
                                    <!-- Product price-->
                                    Rs. <?php echo $featuredProd['price']?>

                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="text-center card-footer border-top-0 bg-transparent">
                                <div class="btn-group-sm mb-3">
                                    <a href="products.php?pid=<?php echo $featuredProd[
                                        'productid'
                                    ]; ?>" class="btn border-success btn-outline-dark">
                                        Details
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
</section>
<section class="">
    <div class=" container px-4 px-lg-5 mt-0">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <div class="input-group" style=" display:inline-flex; justify-content:flex-end; align-items:right; margin:40px;">

                <form method="GET" action="./psearch.php">

                    <div class="d-flex form-outline justify-content-end">

                        <input type="search" required value="<?php if (isset($_GET['search'])) {
                                                                    echo $_GET['search'];
                                                                } ?>" placeholder="Search" name="search" class="d-inline form-control border-dark border-2 w-75">&nbsp;
                        <button type="submit" class="btn btn-outline-dark">
                            Search </button>
                    </div>
                </form>
            </div>
            <!-- Products -->
            <?php while ($featuredProd = mysqli_fetch_array($featuredProducts)) { ?>
                <div class="col mb-5 zoom">
                    <div class="border-1 border-dark card h-100 rounded-3">
                        <form action="" method="POST">
                            <!-- Product image-->
                            <img class="card-img-top mb-2" src=" ./admin/uploads/products/<?php echo $featuredProd['photo']; ?>" alt="photo" />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">
                                        <?php echo $featuredProd['brand']; ?>
                                        <?php echo $featuredProd['model']; ?>
                                    </h5>
                                    <h6 class="">Car Type: <?php echo $featuredProd['car_type']; ?>
                                    </h6>
                                    <!-- Product price-->
                                    Rs. <?php echo $featuredProd['price']; ?>

                                </div>
                            </div>
                            <div class="text-center card-footer border-top-0 bg-transparent">
                                <div class="btn-group-sm mb-3">
                                    <?php if (isset($_SESSION['username'])) { ?>
                                        <a href="products.php?pid=<?php echo $featuredProd["id"]; ?>" class="btn btn-outline-dark">
                                            Details
                                        </a>
                                    <?php } else { ?>
                                        <a href="login.php" class="btn btn-outline-dark">
                                            Details
                                        </a>
                                    <?php } ?>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
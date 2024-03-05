<?php
include('./dbconn.php');
?>
<html lang="en">

<head>
    <title>Sawari | Search</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <!-- js for dropdown -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <?php
    require './includes/menu.php';
    ?>

    <div class="col-md-12 container mb-5 p-lg-5">
        <div class="card mt-4">
            <div class="card-body">
                <h2 class="d-flex mt-5 text-dark font">YOUR SEARCH IS HERE</h2>

                <table class="table table-bordered border border-dark">
                    <thead>
                        <tr>
                            <th>Product Image</th>
                            <th>Brand</th>
                            <th>Model</th>
                            <th>Year</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <form method="POST" action="booking.php">
                            <?php
                            $mysqli = mysqli_connect("localhost", "root", "", "sawari");
                            if (isset($_GET['search'])) {
                                $filtervalues = $_GET['search'];
                                $query = "SELECT * FROM cars WHERE CONCAT(brand,car_type,model,year) LIKE '%$filtervalues%' ";
                                $query_run = mysqli_query($conn, $query);
                                if (mysqli_num_rows($query_run) > 0) {
                                    foreach ($query_run as $featuredProd) {
                            ?>
                                        <tr>
                                            <td class="w-25 "><img class=" card-img-top img-fluid img-thumbnail w-50" src="admin/uploads/products/<?php echo $featuredProd['photo']; ?>" alt="" />
                                            </td>
                                            <td><?= $featuredProd['brand']; ?></td>
                                            <td><?= $featuredProd['model']; ?></td>
                                            <td><?= $featuredProd['year']; ?></td>
                                            <td><?= $featuredProd['price']; ?></td>

                                            <input type="hidden" name="Item_name" value="<?php echo $featuredProd['brand'] . $featuredProd['model']; ?>">
                                            <input type="hidden" name="price" value="<?php echo $featuredProd['price']; ?>">
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                } else {

                                    ?>
                                    <tr>
                                        <td colspan="5">No Records Found</td>
                                    </tr>
                            <?php
                                }
                            }

                            ?>

                        </form>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <?php
    require './includes/footer.php';
    ?>
</body>

</html>
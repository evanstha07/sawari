<?php

require './includes/dbconn.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Sawari</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" /> <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        
        <!-- Core theme CSS (includes Bootstrap)-->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>

        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Unlock your Journey</h1>
                    <p class="lead fw-normal text-white-50 mb-0"> Where Every Drive Has a Story</p>
                </div>
            </div>
        </header>
        <?php $featuredProducts = mysqli_query($mysqli,'SELECT * FROM products WHERE isActive = 1'); ?>
        <?php include 'includes/prod_disp.php'; ?>
        <!-- Section-->
        <!-- <section class="py-5"> -->
            <!-- <div class="container px-4 px-lg-5 mt-5"> -->
                <!-- <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center"> -->


                    <!-- <div class="col mb-5"> -->
                        <!-- <div class="card h-100"> -->
                            <!-- Product image-->
                            <!-- <img class="card-img-top" src="/images/download.jpeg" alt="..." /> -->
                            <!-- Product details-->
                            <!-- <div class="card-body p-4"> -->
                                <!-- <div class="text-center"> -->
                                    <!-- Product name-->
                                    <!-- <h5 class="fw-bolder">Gorkha Strong</h5> -->
                                    <!-- Product price-->
                                    <!-- NRS. 320
                                </div>
                            </div> -->
                            <!-- Product actions-->
                            <!-- <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                            </div>
                        </div>
                    </div> -->


                    <!-- <div class="col mb-5"> -->
                        <!-- <div class="card h-100"> -->
                            <!-- Sale badge-->
                            <!-- <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div> -->
                            <!-- Product image-->
                            <!-- <img class="card-img-top" src="/images/budweiser.jpeg" alt="..." /> -->
                            <!-- Product details-->
                            <!-- <div class="card-body p-4"> -->
                                <!-- <div class="text-center"> -->
                                    <!-- Product name-->
                                    <!-- <h5 class="fw-bolder">Budweiser</h5> -->
                                    <!-- Product reviews-->
                                    <!-- <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div clas$25.00ass="text-muted text-decoration-line-through"> -->
                                        <!-- NRS. 475 -->
                                <!-- </div>
                            </div> -->
                            <!-- Product actions-->
                            <!-- <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                            </div>
                        </div> -->
                    <!-- </div> -->


                    <!-- <div class="col mb-5">
                        <div class="card h-100"> -->
                            <!-- Sale badge-->
                            <!-- <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div> -->
                            <!-- Product image-->
                            <!-- <img class="card-img-top" src="images/carlsberg.jpeg" alt="..." /> -->
                            <!-- Product details-->
                            <!-- <div class="card-body p-4"> -->
                                <!-- <div class="text-center"> -->
                                    <!-- Product name-->
                                    <!-- <h5 class="fw-bolder">Carlsberg</h5>  -->
                                    <!-- Product price-->
                                    <!-- <span class="text-muted text-decoration-line-through">$50.00</span> -->
                                    <!-- NRS. 520
                                </div>
                            </div> -->
                            <!-- Product actions-->
                            <!-- <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                            </div>
                        </div>
                    </div> -->


                    <!-- <div class="col mb-5"> -->
                        <!-- <div class="card h-100"> -->
                            <!-- Product image-->
                            <!-- <img class="card-img-top" src="images/bigmaster.jpg" alt="..." /> -->
                            <!-- Product details-->
                            <!-- <div class="card-body p-4"> -->
                                <!-- <div class="text-center"> -->
                                    <!-- Product name-->
                                    <!-- <h5 class="fw-bolder">Big master</h5> -->
                                    <!-- Product reviews-->
                                    <!-- <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div> -->
                                    <!-- Product price-->
                                    <!-- NRS. 985
                                </div>
                            </div> -->
                            <!-- Product actions-->
                            <!-- <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                            </div>
                        </div>
                    </div> -->


                    <!-- <div class="col mb-5"> -->
                        <!-- <div class="card h-100"> -->
                            <!-- Sale badge-->
                            <!-- <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div> -->
                            <!-- Product image-->
                            <!-- <img class="card-img-top" src="/images/canvas.jpg" alt="..." /> -->
                            <!-- Product details-->
                            <!-- <div class="card-body p-4"> -->
                                <!-- <div class="text-center"> -->
                                    <!-- Product name-->
                                    <!-- <h5 class="fw-bolder">Canvas</h5> -->
                                    <!-- Product price-->
                                    <!-- <span class="text-muted text-decoration-line-through">$50.00</span> -->
                                    <!-- NRS. 950
                                </div>
                            </div> -->
                            <!-- Product actions-->
                            <!-- <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                            </div>
                        </div>
                    </div> -->


                    <!-- <div class="col mb-5"> -->
                        <!-- <div class="card h-100"> -->
                            <!-- Product image-->
                            <!-- <img class="card-img-top" src="/images/dadaghare.jpg" alt="..." /> -->
                            <!-- Product details-->
                            <!-- <div class="card-body p-4"> -->
                                <!-- <div class="text-center"> -->
                                    <!-- Product name-->
                                    <!-- <h5 class="fw-bolder">Dadaghare</h5> -->
                                    <!-- Product price-->
                                    <!-- NRS. 700
                                </div>
                            </div> -->
                            <!-- Product actions-->
                            <!-- <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                            </div>
                        </div>
                    </div>


                    <div class="col mb-5">
                        <div class="card h-100"> -->
                            <!-- Sale badge-->
                            <!-- <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div> -->
                            <!-- Product image-->
                            <!-- <img class="card-img-top" src="/images/divinewine.jpg" alt="..." /> -->
                            <!-- Product details-->
                            <!-- <div class="card-body p-4"> -->
                                <!-- <div class="text-center"> -->
                                    <!-- Product name-->
                                    <!-- <h5 class="fw-bolder">Divine Wine</h5> -->
                                    <!-- Product reviews-->
                                    <!-- <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div> -->
                                    <!-- Product price-->
                                    <!-- <span class="text-muted text-decoration-line-through">$20.00</span> -->
                                    <!-- NRS. 1200
                                </div>
                            </div> -->
                            <!-- Product actions-->
                            <!-- <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                            </div>
                        </div>
                    </div> -->


                    <!-- <div class="col mb-5"> -->
                        <!-- <div class="card h-100"> -->
                            <!-- Product image-->
                            <!-- <img class="card-img-top" src="/images/hinwa.jpg" alt="..." /> -->
                            <!-- Product details-->
                            <!-- <div class="card-body p-4"> -->
                                <!-- <div class="text-center"> -->
                                    <!-- Product name-->
                                    <!-- <h5 class="fw-bolder">Hinwa</h5> -->
                                    <!-- Product reviews-->
                                    <!-- <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div> -->
                                    <!-- Product price-->
                                    <!-- NRS. 850
                                </div>
                            </div> -->
                            <!-- Product actions-->
                            <!-- <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

        <!-- <div class="col mb-5"> -->
            <!-- <div class="card h-100"> -->
                <!-- Product image-->
                <!-- <img class="card-img-top" src="/images/robertsonwinery.jpeg" alt="..." /> -->
                <!-- Product details-->
                <!-- <div class="card-body p-4"> -->
                    <!-- <div class="text-center"> -->
                        <!-- Product name-->
                        <!-- <h5 class="fw-bolder">Robertson Winery</h5> -->
                        <!-- Product reviews-->
                        <!-- <div class="d-flex justify-content-center small text-warning mb-2">
                            <div class="bi-star-fill"></div>
                            <div class="bi-star-fill"></div>
                            <div class="bi-star-fill"></div>
                            <div class="bi-star-fill"></div>
                            <div class="bi-star-fill"></div>
                        </div> -->
                        <!-- Product price-->
                        <!-- NRS. 1350        -->
                    <!-- </div> -->
                <!-- </div> -->
                <!-- Product actions-->
                <!-- <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
</section> -->


        <!-- Footer-->
        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
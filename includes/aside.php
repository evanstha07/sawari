<div class="wrapper">
    <!-- Navbar -->
    <!-- <nav class="main-header navbar navbar-expand navbar-white navbar-light bg-dark">
        Left navbar links -->
    <!-- <ul class="navbar-nav"> -->


    <!-- <li class="nav-item d-none d-sm-inline-block">
          <a href="../contact.php" class="nav-link">Contact</a>
        </li> -->
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

        </li>
        <li>
            <a class="nav-link text-white-50" href="#">
                <!-- <i class="far fa-user text-white-50"></i> <?php echo $_SESSION['admin']; ?> -->
            </a>
    </ul>
    </nav>

    <aside class="main-sidebar sidebar-dark-primary elevation-4" style="display:flex; flex-direction:column">
        <a href="#" class="brand-link">
            <img src="../assets/img/Sawari.PNG" alt="Sawari Logo" class="brand-image elevation-3" style="opacity: 0.8; margin-left: 50px;" />
        </a>

        <div class="sidebar">
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="info">
                    <i class="fa fa-user-alt text-white-50"></i>
                </div>
                <div class="info">
                    <!-- <a href="#" class="d-block font"><?php echo $_SESSION['admin']; ?></a> -->
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="#" class="nav-link text-white-50">Admin Panel</a>
                    </li>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item">
                        <a href="./dashboard.php" class="d-block nav-link font">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="./add-product.php" class="d-block nav-link font">
                            <i class="nav-icon fas fa-upload"></i>
                            <p>
                                Add Car
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="./manageprod.php" class="nav-link font">
                            <i class="nav-icon fas fa-edit"></i>
                            <p>
                                Manage Car
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="./manageUsr.php" class="d-block nav-link font">
                            <i class="nav-icon fas fa-user-edit"></i>
                            <p>
                                Manage User
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="./manageorder.php" class="d-block nav-link font">
                            <i class="nav-icon fas fa-user-edit"></i>
                            <p>
                                Manage Bookings
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-block font" href="./logout.php">
                            <>Logout
                        </a>
                    </li>

                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
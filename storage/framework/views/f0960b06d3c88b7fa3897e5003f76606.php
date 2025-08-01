<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="<?php echo e(asset('admin/css/styles.css')); ?>" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">

    <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link" href="<?php echo e(url('users')); ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-user fa-fw"></i></div>
                                Users
                            </a>
                            <a class="nav-link" href="<?php echo e(url('car')); ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-car fa-fw"></i></div>
                                Add cars
                            </a>
                            <a class="nav-link" href="<?php echo e(url('carshow')); ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-car fa-fw"></i></div>
                                Show cars
                            </a>
                            <a class="nav-link" href="<?php echo e(url('showbokings')); ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-car fa-fw"></i></div>
                                Show Bookings
                            </a>
                            <a class="nav-link" href="<?php echo e(url('contactsinfo')); ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-users fa-fw"></i></div>
                                 contacts info
                            </a>
                            
                            
                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="charts.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Charts
                            </a>
                            <a class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tables
                            </a>
                            
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo e(asset('admin/js/scripts.js')); ?>"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo e(asset('admin/js/datatables-simple-demo.js')); ?>"></script>
    </body>
</html>

<?php /**PATH C:\z\xampp\htdocs\rentalcar\resources\views/admin/inc/admin-sidebar.blade.php ENDPATH**/ ?>
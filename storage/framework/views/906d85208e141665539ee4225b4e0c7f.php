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

    <?php echo $__env->make('admin.inc.admin-navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        
        <div id="layoutSidenav">
        <?php echo $__env->make('admin.inc.admin-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div id="layoutSidenav_content">
                <main>
    <div>
  <br>
       <div class="container-fluid px-4">
         <div class="card mt-4">
           <div class="card-header">
                 <h4 class="">edit users<h4>
           </div>
           <div class="card-body">
            <form method="POST" action="<?php echo e(url('update_data',$data->id)); ?>">
                <?php echo csrf_field(); ?>
                <div class="mb-3">
                    <label>name</label>
                    <input type="text" name="name" class="form-control" value="<?php echo e($data->name); ?>" required autocomplete="name" autofocus>

                </div>
                <div class="mb-3">
                    <label>email</label>
                    <input type="text" name="email" class="form-control" value="<?php echo e($data->email); ?>" required autocomplete="email">
                </div>
                <div class="mb-3">
                    <label>password</label>
                    <input class="form-control" id="password" type="password"  name="password" required autocomplete="new-password">
                </div>
                <div class="mb-3">
                    <label>Confirm password</label>
                    <input  class="form-control" id="password-confirm" type="password"  name="password_confirmation" required autocomplete="new-password">
                </div>
                <div class="col-md-3">
                  <button type="submit" class="btn btn-primary">save</button>
                </div>
            </form>
                
           </div>
         </div>
       </div>
    </div>   

    </main>
                <?php echo $__env->make('admin.inc.admin-footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo e(asset('admin/js/scripts.js')); ?>"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo e(asset('admin/js/datatables-simple-demo.js')); ?>"></script>
    </body>
</html><?php /**PATH C:\z\xampp\htdocs\rentalcar\resources\views/admin/edit-users.blade.php ENDPATH**/ ?>
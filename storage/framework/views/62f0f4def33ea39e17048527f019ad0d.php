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
       <div class="card">   
            <div class="card-header">   
               <h4>view cars</h4>
            </div>
            <div class="card-body">
                  
                 <?php if(session('message')): ?>
                       <div class="alert alert-success"><?php echo e(session('message')); ?> </div>     
                 <?php endif; ?>
                 
                 <table class="table table-boardered">
                 <thead>
                      <tr>
                        <th>id</th>
                        <th>carname</th>
                        <th>brand</th>
                        <th>nplate</th>
                        <th>image</th>
                        <th>rprice</th>
                        <th>status</th>
                        <th>edit</th>
                        <th>delete</th>
                      </tr>
                </thead>
                <tbody>
                     <?php $__currentLoopData = $records; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                         <th><?php echo e($record->id); ?></th>
                         <td><?php echo e($record->carname); ?></td>
                         <td><?php echo e($record->brand); ?></td>
                         <td><?php echo e($record->nplate); ?></td>
                         <td><img src="cars/<?php echo e($record->image); ?>" height="90px" width="135px"></td>
                         <td><?php echo e($record->rentprice); ?></td>
                         <td>
                             <?php if($record->status == '1'): ?> 
                                <spam style="color: green;">Avail </spam>
                             <?php endif; ?>

                             <?php if($record->status == '0'): ?> 
                                <spam style="color: red;">no avail </spam>
                             <?php endif; ?>
                         </td>
                         <td>
                              <a href="caredit/<?php echo e($record->id); ?>" class="btn btn-success">Edit</a>
                         </td>
                         <td>
                              <a href="cardelete/<?php echo e($record->id); ?>" class="btn btn-danger">Delete</a>
                         </td>
                         <td>
                              <a href="approve/<?php echo e($record->id); ?>" class="btn btn-success">Approve</a>
                              <a href="reject/<?php echo e($record->id); ?>" class="btn btn-danger">Reject</a>
                         </td>
                         </tr>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
                </table>
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
</html><?php /**PATH C:\z\xampp\htdocs\rentalcar\resources\views/admin/show-cars.blade.php ENDPATH**/ ?>
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
        <link href="{{asset('admin/css/styles.css')}}" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">

    @include('admin.inc.admin-navbar')
        
        <div id="layoutSidenav">
        @include('admin.inc.admin-sidebar')
            <div id="layoutSidenav_content">
                <main>
                
                <div>
  <br>
       <div class="container-fluid px-4">
         <div class="card mt-4">
           <div class="card-header">
                 <h4 class="">Add cars<h4>
           </div>
           <div class="card-body">
            <form action="{{url('carupdate_data',$data->id)}}" method="post" enctype="multipart/form-data">
              @csrf
                <div class="mb-3">
                    <label>car name</label>
                    <input type="text" name="carname" class="form-control" values=" {{$data->carname}} " required autocomplete="carname">
                </div>
                <div class="mb-3">
                    <label>car brand</label>
                    <input type="text" name="brand" class="form-control" placeholder="Enter car brand" required />
                </div>
                <div class="mb-3">
                    <label>car number</label>
                    <input type="text" name="nplate" class="form-control" placeholder="Enter car number" required />
                </div>
                <div class="mb-3">
                    <label>car image</label>
                    <input class="form-control" name="image" class="form-control" type="file" id="formFile">
                </div>
                <div class="mb-3">
                    <label>rent price</label>
                    <input type="text" name="rentprice" class="form-control" placeholder="Enter price" required />
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
                @include('admin.inc.admin-footer')
            </div>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('admin/js/scripts.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('admin/js/datatables-simple-demo.js')}}"></script>
    </body>
</html>
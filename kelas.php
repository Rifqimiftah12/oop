<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Kelas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
</head>
<body>
    <!-- Header -->
    <!-- End Header -->

     <!-- Content -->
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-6" style="padding:20px;">
                <div class="card-body">
                <div class="card">
                <div class="card-header"><center>XI RPL 2</center></div>
                    <form action="oopkelas.php" method="POST">
                        <div class="form-group">
                        <br>
                        <br>
                            <label>Wali Kelas</label>
                                <input type="text" name="wk" class="form-control"required>
                        </div>
                        <div class="form-group">
                            <label>Ketua Murid</label>
                                <input type="text" name="km" class="form-control"  required>
                        </div>
                        <div class="form-group">
                            <label>Sekertaris</label>
                            <input type="text" name="sk" class="form-control"  required>
                        </div>
                        <div class="form-group">
                            <label>Bendahara</label>
                            <input type="text" name="bd" class="form-control"  required>
                        </div>
                        <div class="form-group">
                            <label>Seksi</label>
                            <input type="text" name="si" class="form-control"  required>
                        </div>
                        <div class="form-group">
                             <button type="submit" name="simpan" class="btn btn-primary btn-block">
                             Simpan
                            </button>
                        </div>
                 
                    </form>
                </div>
            </div>
        </div>
        </div>
          </div>
            </div>  
    <!-- End Content -->
 
    <!-- Footer -->
    <footer>
  
    </footer>
    <!-- End Footer -->

    <!-- Js -->
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bootstrap.bundle.js"></script>
    <!-- End Js -->
</body>
</html>
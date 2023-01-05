<?php ob_start() ; ?>
<?php   require 'C:\xampp\htdocs\ders\db.php'?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>RL Admin</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body>

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="../">ReadLearn</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
      <div class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
       <a class="nav-link" href="#">
           <span>Çıkış</span>
           <i class="fas fa-sign-out-alt"></i>
       </a>
       </div>
</nav>

<!---->
      

    <div id="wrapper">
<!--headr bitiş-->
     
    
    
    
    
    
    <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="kategori.php">
            <span>Kategoriler</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ürünler.php">
            <span>Ürünler</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="yazarlar.php">
            <span>Yazarlar</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="siparisler.php">
            <span>Siparişler</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Login Screens:</h6>
            <a class="dropdown-item" href="login.html">Login</a>
            <a class="dropdown-item" href="register.html">Register</a>
            <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
            <div class="dropdown-divider"></div>
          </div>
        </li>
        
     
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">



        <div class="container mt-5 my-5">
  <h2 class="text-center">Siparişler</h2>
  
<table class="table table-bordered">
    <thead>
      <tr>
        
        <th>İsim</th>
        <th>Soyisim</th>
        <th>Email</th>
        <th>Telefon</th>
        
      </tr>
    </thead>
    <tbody>

   

<?php

$sql_query="SELECT * FROM sipariş ";
$selec_all_ürünler= mysqli_query($db,$sql_query);
while($row = mysqli_fetch_assoc($selec_all_ürünler)){
    
 ?>  
    
    <tr>

<td><?php echo $row['sipariş_ad'];?></td>
<td><?php echo $row['sipariş_soyad'];?></td>
<td><?php echo $row['sipariş_email'];?></td>
<td><?php echo $row['sipariş_tel'];?></td>

</tr>
<?php } ?>
 
     
    
    </tbody>
  </table>
</div>





     
     
     
     
     
     
     <!--footer başlangıç-->
      </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span class="lead">NO Copyright ReadLearn 2021</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->


    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>

  </body>

</html>

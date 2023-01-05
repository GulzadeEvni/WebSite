<?php session_start() ;?>
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
        <li class="nav-item">
          <a class="nav-link" href="ürünler.php">
            <span>Ürünler</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="üyeler.php">
            <span>Üyeler</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="yazarlar.php">
            <span>Yazarlar</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="siparisler.php">
            <span>Siparişler</span></a>
        </li>

      
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">
        <h1>Welcome to Admin Page</h1>
            <hr>

            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Category</th>
                        <th>Ürün Adı</th>
                        <th>Author</th>
                        <th>fiyat</th>
                        <th>resim</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>

        <?php

            if(isset($_POST['add_ekle'])){
               
              $products_name=$_POST['products_name'];
              $products_kategori=$_POST['products_kategori'];
                
                $products_author=$_POST['products_author'];
                $products_fiyat=$_POST['products_fiyat']; 
               
                $products_img=$_FILES["products_img"]["name"];
                $products_img_temp=$_FILES["products_img_temp"]["temp_name"];
                move_uploaded_file($products_img_temp,"../img/$products_img");

                $sql_query="INSERT INTO ürünler (products_kategori,products_name,products_author,products_fiyat,products_img) VALUES ('{$products_kategori}','{$products_name}','{$products_author}','{$products_fiyat}','{$products_img}')";
  
                $create_ürün_query=mysqli_query($db,$sql_query);
                header("Location: ürünler.php");
            }?>
           
        


              <?php

            $sql_query="SELECT * FROM ürünler ORDER BY products_id DESC";
            $selec_all_ürünler= mysqli_query($db,$sql_query);
            while($row = mysqli_fetch_assoc($selec_all_ürünler)){
                $products_id=$row['products_id'];
                $products_name=$row['products_name'];
                $products_kategori=$row['products_kategori'];
               
                $products_author=$row['products_author'];
                $products_fiyat=$row['products_fiyat'];
                $products_img=$row['products_img'];
                

              

                echo"   <tr>
                <td>{$products_id}</td>
                <td>{$products_kategori}</td>
                <td>{$products_name}</td>
                <td>{$products_author}</td>
                <td>{$products_fiyat}</td>
                <td><img src='../img/$products_img' width='80px' height='80px'></td>
               
              
                
                <td>
                    <div class='dropdown'>
                        <button class='btn btn-primary dropdown-toggle' type='button' id='dropdownMenuButton' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                            Actions
                        </button>
                        <div class='dropdown-menu' aria-labelledby='dropdownMenuButton'>
                            <a class='dropdown-item' data-toggle='modal' data-target='#edit_modal' href='#'>Edit</a>
                            <div class='dropdown-divider'></div>
                            <a class='dropdown-item' href='#'>Delete</a>
                            <div class='dropdown-divider'></div>
                            <a class='dropdown-item' data-toggle='modal' data-target='#add_modal'>Add</a>
                        </div>
                    </div>
               
                   
               
                  </td>

                  


            
            </tr>";
            ?>




            <div id="edit_modal" class="modal fade">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Edit Portfolio</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="post_title">Post Title</label>
                                            <input type="text" class="form-control" name="post_title">
                                        </div>
                                        <div class="form-group">
                                            <label for="post_category">Post Category</label>
                                            <input type="text" class="form-control" name="post_category">
                                        </div>
                                        <div class="form-group">
                                            <label for="post_author">Post Author</label>
                                            <input type="text" class="form-control" name="post_author">
                                        </div>

                                        <div class="form-group">
                                            <label for="post_image">Post Image</label>
                                            <input type="file" class="form-control" name="post_image">
                                        </div>
                                        <div class="form-group">
                                            <label for="post_tags">Post Tags</label>
                                            <input type="text" class="form-control" name="post_tags">
                                        </div>
                                        <div class="form-group">
                                            <label for="post_text">Post Text</label>
                                            <textarea class="form-control" name="post_text" id="" cols="20" rows="5"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <input type="hidden" name="post_id" value="">
                                            <input type="submit" class="btn btn-primary" name="edit_post" value="Edit Post">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    
            <?php }  ?>
                </tbody>
            </table>

             

                      <div id="add_modal" class="modal fade">
                          <div class="modal-dialog" role="document">
                             <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add New Category</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="post_title">ürün ismi</label>
                                    <input type="text" class="form-control" name="products_name">
                                </div>
                                <div class="form-group">
                                    <label for="post_category">kategori</label>
                                    <input type="text" class="form-control" name="products_kategori">
                                </div>
                                <div class="form-group">
                                    <label for="post_author">yazar</label>
                                    <input type="text" class="form-control" name="products_author">
                                </div>
                                <div class="form-group">
                                    <label for="post_author">fiyat</label>
                                    <input type="text" class="form-control" name="products_fiyat">
                                </div>

                                <div class="form-group">
                                    <label for="post_image">Post Image</label>
                                    <input type="file" class="form-control" name="products_img">
                                </div>
                                

                                <div class="form-group">
                                    <input type="hidden" name="post_id" value="">
                                    <input type="submit" class="btn btn-primary" name="add_ekle" value="Add Post">
                                </div>
                                   
                                   
                                   
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                </tbody>
            </table>
                        </div>
                    </div>
                </div>
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

<?php session_start() ; ?>
<?php require 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ReadLearn</title>
    <link rel="stylesheet" href="css\style.css">
    <link rel ="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

</head>
<body> 

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="proje.php">ReadLearn</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="login.php">Giriş Yap</a>
         </li>
        <li class="nav-item">
          <a class="nav-link active" href="kaydol.php">Kayıt Ol</a>
        </li>    
        <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Kategoriler
          </a>
         
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <?php
            
            $sql_query="SELECT * FROM kategori";
            $select_kategoriler=mysqli_query($db,$sql_query);
                while($row= mysqli_fetch_assoc($select_kategoriler)){

                
                //get parametresi oluştur kategori_name ile al.
            ?>

            <li><a class="dropdown-item" href="edebiyat.php?category=<?php echo $row["kategori_name"]; ?>"><?php echo $row['kategori_name'];?></a></li>
      
            <?php } ?> 
          </ul>
          
         
        </li>
        <li class="nav-item">
          <a class="nav-link " href="sepet.php">Sepetim</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="yazarlar.php">Yazarlar</a>
        </li>
      </ul>
     
      <form class="d-flex" action="search.php" method="POST">
         <input class="form-control me-2" name="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-danger" name="searchbtn" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
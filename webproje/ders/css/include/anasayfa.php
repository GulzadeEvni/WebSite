
<?php
ob_start();
require 'db.php';?>


<div class="container-fluid  mt-5">
<div class="col-sm-12 col-lg-2 p-5" style="width:1200px; margin-left:150px">
<!-- Carousel -->
<div id="demo" class="carousel slide " data-bs-ride="carousel">


  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="4"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="5"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="6"></button>
  </div>
  
  <!-- The slideshow/carousel -->
 
  <div class="carousel-inner">
    <div class="carousel-item active" >
      <img src="img\pexels-pixabay-207662 (1).jpg"  class="d-block" style="width:100%">
      <div class="carousel-caption">
        <h3>Araştırma ve Tarih</h3>
        <p></p>
      </div>
    </div>
    <div class="carousel-item"  >
      <img src="img\pexels-suzy-hazelwood-1098601.jpg"  class="d-block" style="width:100%">
      <div class="carousel-caption">
        <h3>Edebiyat</h3>
        <p></p>
      </div> 
    </div>
    <div class="carousel-item"  >
      <img src="img\pexels-suzy-hazelwood-1130980.jpg"  class="d-block" style="width:100%">
      <div class="carousel-caption">
        <h3>Ders Kitapları</h3>
        <p></p>
      </div>  
    </div>
    <div class="carousel-item"  >
      <img src="img\pexels-lina-kivaka-1741231.jpg"  class="d-block" style="width:100%">
      <div class="carousel-caption">
        <h3>Psikoloji</h3>
        <p></p>
      </div> 
    </div>
    <div class="carousel-item"  >
      <img src="img\pexels-oziel-gómez-2846814.jpg" class="d-block" style="width:100%">
      <div class="carousel-caption">
        <h3>Şiir</h3>
     
      </div> 
    </div>
    <div class="carousel-item"  >
      <img src="img\pexels-element-digital-1370298.jpg"  class="d-block" style="width:100%">
      <div class="carousel-caption">
        <h3>Kişisel Gelişim</h3>
        
      </div> 
    </div>
    <div class="carousel-item"  >
      <img src="img\pexels-lina-kivaka-1741231.jpg" class="d-block" style="width:100%">
      <div class="carousel-caption">
        <h3>Çocuk Kitapları</h3>
        
      </div> 
    </div>
  </div>
  
  
  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>
</div>
</div>


<div class="container mt-3 pt-3 pb-2 text-center">
  <h1 id="text"> Kitaplar</h1>
</div>

<div class="container my-3">
  <div class="row">
  <?php
      $sql="SELECT * FROM anasayfa";
      $select_products=mysqli_query($db,$sql);
      while($row = mysqli_fetch_assoc($select_products)){

        ?>
    <div class="col-sm-12 col-lg-2 p-4">
      
      <div class="card">
      <form method="POST" action="sepet.php?action=add&products_id=<?php echo $row["products_id"]; ?>"> 
        <a href="#"><img src="<?php echo $row["products_img"]; ?>" name="products_img" class="card-img-top"></a>
        <h6 class="text-center"style="font-weight:bold;"><?php echo $row["products_name"]; ?></h6> 
        <h6 class="text-center"><?php echo $row["products_author"]; ?></h6>
        <p class="text-center" style="font-weight:bold;"><?php echo $row["fiyat"]; ?>TL</p>  
        <input type="hidden" class="text-center" name="products_name"style="font-weight:bold;" value="<?php echo $row["products_name"]; ?>"/>
        <input type="hidden" class="text-center" name="fiyat" value="<?php echo $row["fiyat"]; ?>"TL/>
          <div class="d-grid gap-2 col-6 mx-auto">
          <input type="submit" name="add_to_cart" style=" margin-bottom:10px;" class="btn btn-outline-dark btn-sm" value="Sepete Ekle" /> 
          </form> 
     </div>  
      </div>
      
    </div>
    <?php } ?>
  </div>
</div>
</div>



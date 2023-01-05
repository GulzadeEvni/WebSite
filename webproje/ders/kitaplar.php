<?php session_start(); ?>
<?php require 'db.php'; ?>
<?php include 'css\include\navigation.php';?>


<div class="container mt-5 pt-5 pb-2 text-center">
  <h1 id="text"> Kitaplar</h1>
</div>

<div class="container my-5">
  <div class="row">
  <?php

    if(isset($_GET['isim'])){
      $products_yazar_selected=$_GET['isim'];
    }

      $sql="SELECT * FROM ürünler WHERE products_author='$products_yazar_selected'";
      $select_yazar=mysqli_query($db,$sql);
      while($row = mysqli_fetch_assoc($select_yazar)){

        ?>
    <div class="col-md-12 col-lg-2 p-4">
      
      <div class="card">
      <form method="POST" action="sepet.php?action=add&products_id=<?php echo $row["products_id"]; ?>"> 
        <img src="<?php echo $row["products_img"]; ?>" name="products_img" class="card-img-top">
        <h6 class="text-center"style="font-weight:bold;"><?php echo $row["products_name"]; ?></h6> 
        <h6 class="text-center"><?php echo $row["products_author"]; ?></h6>
        <p class="text-center"><?php echo $row["products_fiyat"]; ?>TL</p>  
        <input type="hidden" class="text-center" name="products_name"style="font-weight:bold;" value="<?php echo $row["products_name"]; ?>"/>
        
           <input type="hidden" class="text-center" name="fiyat" value="<?php echo $row["products_fiyat"]; ?>"TL/>
          <div class="d-grid gap-2 col-6 mx-auto">
         
          <input type="submit" name="add_to_cart" style="margin-bottom:10px;" class="btn btn-outline-dark btn-sm" value="Sepete Ekle" /> 
          </form> 
     </div>  
      </div>
      
    </div>
    <?php } ?>
  </div>
</div>


<?php include 'css\include\footer.php';?>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
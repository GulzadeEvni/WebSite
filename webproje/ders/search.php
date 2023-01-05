<?php require 'db.php';?>
<?php include 'css\include\navigation.php';?>
 <?php
if(isset($_POST['searchbtn'])){
    $search=$_POST['search'];

    if(!empty($search)){
      
    
    
             $sql="SELECT * FROM ürünler WHERE products_name  LIKE '%$search%' ORDER BY products_id";
              $select_products=mysqli_query($db,$sql);
                        if(!$select_products){
                            die("QUERY FAILED:".mysqli_error($db));
                        }
                        else{
                            $search_count=mysqli_num_rows($select_products);
                            if($search_count == 0){
                                echo "Aranan Ürün Bulunamadı...";
                             
                            }
                            else{
                                while($row = mysqli_fetch_assoc($select_products)){
                                    $products_id=$row['products_id'];
                                    $products_name=$row['products_name'];
                                    $products_author=$row['products_author'];
                                    $fiyat=$row['products_fiyat'];
                                    $products_img=$row['products_img'];

    ?>
           <div class="container my-5">
  <div class="row">   
              <div class="col-sm-4 col-md-2 p-4 my-5">
      
      <div class="card">
      <form method="POST" action="sepet.php?action=add&products_id=<?php echo $row["products_id"]; ?>"> 
        <a href="#"><img src="<?php echo $row["products_img"]; ?>" name="products_img" class="card-img-top"></a>
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

                <?php
                          }

                        }

                      }
                    }
                    
                ?>
                </div>
</div>
         <br>
         <br>
         <br>
         <br>
         <br>
         <br>
         <br>
         <br>
         <br>
         <br>
         <br>
         <br>
         <br>
         <br>
         <br>
         <br>
         <br>
         <br>
         <br>
         <br>
         <br>
         <br>
         <br>
         <br>

               


<?php include 'css\include\footer.php'?>
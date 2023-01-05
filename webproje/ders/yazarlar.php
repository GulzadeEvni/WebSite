<?php require 'db.php';?>
<?php include 'css\include\navigation.php'?>


<div class="container mt-5 pt-5 pb-2 text-center">
  <h1 id="text"> Yazarlar</h1>
</div>



<div class="container my-5">
  <div class="row">

  <?php


      $sql="SELECT * FROM yazarlar";
      $select_products=mysqli_query($db,$sql);
      while($row = mysqli_fetch_assoc($select_products)){


?>
                <div class='col-md-12 col-lg-2 my-5 p-4 '>
      
            <div class='card'>
            
              <a href="kitaplar.php?isim=<?php echo $row["yazar_isim"]; ?>"><img src="<?php echo $row['yazar_img'];?>" name='yazar_img' class='card-img-top'></a>
              <h6 class='text-center'style='font-weight:bold;'><?php echo $row['yazar_isim'];?></h6> 
              
             
           </div>  
      </div>
            
            <?php } ?>   



    
  </div>
</div>



<?php include 'css\include\footer.php'?>
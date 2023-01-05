<?php session_start(); ?>
<?php require 'db.php'; ?>
<?php include 'css\include\navigation.php';?>
<?php 

if(isset($_POST["add_to_cart"]))  
{  
     if(isset($_SESSION["shopping_cart"]))  //ürün varsa
     {  
          $item_array_id = array_column($_SESSION["shopping_cart"], "products_id");//id'lre göre sıralı bir dizi oluştur. array_colum ile 
          if(!in_array($_GET["products_id"], $item_array_id))  
          {  
               $count = count($_SESSION["shopping_cart"]);  //sepetteki ürün sayısını bulmak için değişken oluştur.
               $item_array = array(  
                    'products_id' =>$_GET["products_id"],  
                    'products_name' => $_POST["products_name"],  
                    'fiyat' => $_POST["fiyat"]

                  );  
               $_SESSION["shopping_cart"][$count] = $item_array;  
          }  
            
     }  
     else  //sepette ürün yoksa yeni ürün eklenecekse
     {  
          $item_array = array(  
            'products_id'=>$_GET["products_id"],  
            'products_name' => $_POST["products_name"],  
            'fiyat' => $_POST["fiyat"]
            
          );  
          $_SESSION["shopping_cart"][0] = $item_array;  
     }  
}  
if(isset($_GET["action"]))  //ürn silinmek istendiğinde
{  
     if($_GET["action"] == "delete")  
     {  
          foreach($_SESSION["shopping_cart"] as $keys => $values)  
          {  
               if($values["products_id"] == $_GET["products_id"])  
               {  
                    unset($_SESSION["shopping_cart"][$keys]);  
                    
               }  
          }  
     }  
}  
?>  

<!DOCTYPE html>  
<html>  
     <head>  
          <title>Sepet</title>    
          <link rel="stylesheet" href="css\bootstrap.min.css" />  
          
     </head>  
     <body>  
          <br />  
          <div class="container" style="width:700px;">  
              <br>
              <br>
              <br>
                 <h3 class="text-center">Sepetim</h3><br />  
              
               <div style="clear:both"></div>  
               <br />  
               <h3 class="text-center">Sepet Bilgileri</h3>  
               <div class="table-responsive">  
                    <table class="table table-bordered">  
                         <tr>  
                              <th width="40%">Ürün</th>    
                              <th width="20%">Fiyat</th>  
                              <th width="15%">Toplam</th>
                         </tr>  
                         <?php   
                         if(!empty($_SESSION["shopping_cart"]))  
                         {  
                              $total = 0;  
                              foreach($_SESSION["shopping_cart"] as $keys => $values){  
                              
                         ?>  
                         <tr>  
                              <td><?php echo $values['products_name']; ?></td>  
                              <td> <?php echo $values['fiyat']; ?></td>  
                              <td> <?php echo number_format($values["fiyat"], 2); ?>TL</td>  
                              <td><a href="sepet.php?action=delete&products_id=<?php echo $values["products_id"]; ?>" style="text-decoration:none;"><span class="text-danger" >Sepetten Çıkar</span></a></td>  
                         </tr>  
                         <?php  
                                   $total = $total + ($values["fiyat"]);  
                                
                         } ?>  
                         <tr>  
                              <td colspan="3">Toplam</td>  
                              <td><?php echo number_format($total, 2); ?>TL</td>  
                              <td><a href ="form.php">Satın Al</a></td>
                              
                         </tr>  
                         <?php  
                         }  
                         ?>  
                    </table>  
               </div>  
          </div>  

<br>
<br>
<br>
<br>
<br>


<?php include 'css\include\footer.php' ?> 
<script src="js/bootstrap.min.js"></script>
</body>
</html>
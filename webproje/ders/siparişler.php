<?php require 'db.php'; ?>
<?php include 'css\include\navigation.php';?>


<div class="container mt-5 my-5">
  <h2>Sipariş Detay</h2>
  
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
$siparis= mysqli_query($db,$sql_query);
while($row = mysqli_fetch_assoc($siparis)){
    
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



<?php include 'css\include\footer.php';?>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
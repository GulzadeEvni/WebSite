<footer>
  <div class="footer-content">
    <div class="footer-ul-content">
      <ul class="kategori">
       
      <?php
            
            $sql_query="SELECT * FROM kategori";
            $select_kategoriler=mysqli_query($db,$sql_query);
                while($row= mysqli_fetch_assoc($select_kategoriler)){

                
                
            ?>
          
            <li><a class="dropdown-item" href="edebiyat.php?category=<?php echo $row["kategori_name"]; ?>"><?php echo $row['kategori_name'];?></a></li>
      
            <?php } ?> 
      
      <!--
      <li><a href="araştırma.php" class="footer-link">Araştırma/Tarih Kitapları</a></li>
        <li><a href="edebiyat.php" class="footer-link">Edebiyat Kitapları</a></li>
        <li><a href="#" class="footer-link">Şiir Kitapları</a></li>
        <li><a href="#" class="footer-link">Ders Kitapları</a></li>
        <li><a href="#" class="footer-link">Psikoloji Kitapları</a></li>
        <li><a href="#" class="footer-link">Kişisel Gelişim Kitapları</a></li>
        <li><a href="#" class="footer-link">Çocuk Kitapları</a></li>
                -->
      </ul>
    </div>
    <div class="footer-title">
      <p class="info">E-mail: abcdef@hotmail.com</p>
      <p class="info">Telefon No: 0530123456789</p>
      <div class="footer-social">
        <a href="#" class="social-link">Instagram</a>
        <a href="#" class="social-link">Facebook</a>
        <a href="#" class="social-link">Twitter</a>
      </div>
    </div>
  </div>

  <p class="footer-credit">İyi Bir Kitap Gerçek Bir Hazinedir...</p>



</footer>
     
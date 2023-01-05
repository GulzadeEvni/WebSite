<?php
 require 'db.php'; 
session_start();
$aylar=array();
for($i=12; $i>0; $i--){
    $aylar[]=array(
        'text' => str_pad($i,2,"0",STR_PAD_LEFT),
        'value' => str_pad($i,2,"0",STR_PAD_LEFT)
    );
}
$yil=date("Y");
$yillar= array();
for($i=$yil; $i<$yil+10;$i++){
    $yillar[]=array(
        'text' => $i,
        'value' => $i
    );
}
?>


 
<?php

if(isset($_POST['ilerle'])){
   
  $sipariş_ad=$_POST['ad'];
  $sipariş_soyad=$_POST['soyad'];
    
    $sipariş_email=$_POST['email'];
    $sipariş_tel=$_POST['tel']; 
   
    
    $sql_query="INSERT INTO sipariş (sipariş_ad,sipariş_soyad,sipariş_email,sipariş_tel) VALUES ('{$sipariş_ad}','{$sipariş_soyad}','{$sipariş_email}','{$sipariş_tel}')";


    if($db->query($sql_query)===TRUE){
        echo "Siparişiniz Alınmıştır...";
        header('Refresh:2 proje.php');
    }
    else{
       echo "Bir Hata Oluştu";
    
    }

}?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alışveriş Sepetim</title>

<style>
    label{
        display:inline-block;
        width:100px;
    }
</style>
</head>
<body>
    
<h2>Ödeme Bilgileri</h2>
<div>
    <form  method="POST">
    Peşin Ödeme: <input type="radio" name="taksit" checked vslue="0">
    2 Taksit: <input type="radio" name="taksit"  value="2"><br>
    <label> Kart Ad:</label><input name="ad" type="text"><br>
    <label>Kart Soyad:</label><input type="text" name="soyad"><br>
    <label>E-mail:</label><input type="text" name="email"><br>
    <label>Telefon:</label><input type="text" name="tel"><br>
    <label>Kart No</label><input type="text" name="cart"><br>
    Son Kullanım Tarihi:
    <select name="mon">

    <?php

    foreach($aylar as $ay){?>
    
        <option value="<?php echo $ay['value'];?>"><?php echo $ay['text']; ?>
    </option>
    <?php } ?>
</select>
<select name="year">
    <?php foreach($yillar as $yil){?>
        <option value="<?php echo $yil['value'];?>"><?php echo $yil['text'];?>
    </option>
    <?php } ?>
</select>
<br>
<label>cvv:</label><input type="text" name="cvv"><br>
<label>Tam Adres: </label><textarea name="adres" cols="30" rows="3"></textarea>
<input type="submit" name="ilerle" value="İlerle">
</form>
</div>











    

</body>
</html>
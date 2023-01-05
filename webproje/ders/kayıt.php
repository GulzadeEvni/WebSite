<?php 
//ob_start();
//session_start();
require 'db.php';


$user = $pass = $againpass= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $user = test_input($_POST["user"]);
  $pass = test_input($_POST["pass"]);
        if(!$user || !$pass){
            "Kullanıcı Adı ve Şifre Giriniz.";
            header('Refresh:2 kayıt.php');
        }
        else{
            //veritabanı kayıt işlemi
           $sorgu ="INSERT INTO kullanıcılar (user_name,user_password) VALUES('".$user."','".$pass."')" ;
        
        if($db->query($sorgu)===TRUE){
            echo "kayıt başarılı yönlendiriliyorsunuz.";
            header('Refresh:2 login.php');
        }
        else{
           echo "Bir Hata Oluştu";
        
        }
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }















?>
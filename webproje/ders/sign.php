<?php
ob_start();
session_start();
require 'db.php';



if(isset($_POST['giris'])){
    $user = test_input($_POST["user"]);
    $pass = test_input($_POST["pass"]);
    if(!$user && !$pass){
        echo  "kullanıcı adı veya şifre girin";
        header('Refresh:3 login.php');
    }
    else{
        $kullanici_sorgu="SELECT * FROM kullanıcılar WHERE user_name='".$user."' AND user_password ='".$pass."' ";
        $result=$db->query($kullanici_sorgu);

        
            if($result->num_rows > 0){

                $_SESSION['oturum']= true;
                $_SESSION['user']=$user;
                echo "Giriş Başarılı Yönlendiriliyorsunuz...";
                header('Refresh:3 signin.php');
            
           
            }
            else{
                echo "Hatalı Kullanıcı Adı Veya Şifre Tekrar Deneyiniz...";
                header('Refresh:1 login.php');

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



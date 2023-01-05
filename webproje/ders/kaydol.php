<?php 

require 'db.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css\style.css">
    <link rel ="stylesheet" href="css/bootstrap.min.css">
    

</head>
<body>
<form class="box" action="kayıt.php" method="POST">
<h1>LOGİN</h1>
<input type="text" name="user" placeholder="Username">

<input type="password" name="pass" placeholder="Password">

<input type="submit" name="kayıt" value="Kayıt Ol">
</form>



<script src="js/bootstrap.min.js"></script>
</body>
</html>
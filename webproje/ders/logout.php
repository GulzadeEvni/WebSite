<?php
session_start();
if(session_destroy()){
    header('Refresh:2 proje.php');
}





?>
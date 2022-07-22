<?php
        if(!$_GET['id']){
           
            unset($_SESSION['sepet']);
         
        }else{
            unset($_SESSION['sepet'][$_GET['id']]);
        }



 
        HEADER('Location:index.php?page=sepet');




?>
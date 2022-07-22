<?php 
    session_start();
    unset( $_SESSION['admin_giris'] );
    unset( $_SESSION['admin_bilgileri'] );
    header('Location:index.php');
?>
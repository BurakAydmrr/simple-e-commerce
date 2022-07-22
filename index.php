<?php 
   session_start();
    include('settings.php');
    include('functions.php');
    include('components/header.php');
    echo '<div class="content">';
 
    if(!isset($_GET['page'])){
        
        include('pages/home.php');

    }else{

        $getSayfa = $_GET['page'];

        if($getSayfa=="sayfa"){
            include('pages/sayfa.php');

        }elseif($getSayfa=="urunler"){ 
            include('pages//urunler.php');

        }elseif($getSayfa=="detay"){
            include('pages/detay.php');
        }
        elseif($getSayfa=="iletisim"){
            
            include('pages/iletisim.php');
           
        }elseif($getSayfa=="register"){
            include('pages/register.php');
        }
        elseif($getSayfa=="login"){
            include('pages/login.php');
        }elseif ($getSayfa=='logout'){
            unset($_SESSION['uye_giris']);
            unset($_SESSION['uye_bilgileri']);
            session_destroy();
            header('Location:index.php?page=login');

        }elseif($getSayfa=="uyedetay"){
            include('pages/uyedetay.php');
        }
        
        elseif($getSayfa=="sepet"){
            include('pages/sepet.php');
        }elseif($getSayfa=="sepete-ekle"){
            include('pages/sepete-ekle.php');
            
        }elseif($getSayfa=="sepet-sil"){

            include('pages/sepet-sil.php');
           

        }elseif($getSayfa=="odeme"){
            include('pages/odeme.php');

        }elseif($getsayfa="siparisal"){
            include('pages/siparisal.php');
        }elseif($getSayfa=="odeme-sonuc"){
            include('pages/odemesonuc.php');
        }
        else{
            include('pages/not_page.php');

        }

    }

    echo '</div>';
    include('components/footer.php');



?>
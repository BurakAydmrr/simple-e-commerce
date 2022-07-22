<?php 

if(isset($_GET['is'])){

    switch($_GET['is']){
        case 'ekle':
            include('urun_ekle.php');
            break;

        case 'duzenle':
            include('urun_duzenle.php');
            break;

        case 'sil':
            include('urun_sil.php');
            break;

        default: 
            include('urun_listesi.php');
    }

}else{
    include('urun_listesi.php');
}
?>
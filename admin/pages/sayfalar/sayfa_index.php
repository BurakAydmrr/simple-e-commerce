<?php 

if(isset($_GET['is'])){

    switch($_GET['is']){
        case 'ekle':
            include('sayfa_ekle.php');
            break;

        case 'duzenle':
            include('sayfa_duzenle.php');
            break;

        case 'sil':
            include('sayfa_sil.php');
            break;

        default: 
            include('sayfa_listesi.php');
    }

}else{
    include('sayfa_listesi.php');
}
?>
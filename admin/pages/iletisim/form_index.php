<?php 

if(isset($_GET['is'])){

    switch($_GET['is']){
        case 'sil':
            include('formsil.php');
            break;
    }

}else{
    include('iletisimform.php');
}
?>
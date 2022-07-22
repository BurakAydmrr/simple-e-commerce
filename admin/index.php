<?php 
    session_start();
    include('../settings.php');
    /*
    $_SESSION = [
        'admin_giris' => 1
    ]
    */
    if(!isset($_SESSION['admin_giris']) || $_SESSION['admin_giris']!=1){

            header('Location:login.php');
        
    }

    
    include('functions.php');
    include('header.php');
    echo '<div class="container my-3">';
    
    if(!isset($_GET['page'])){
        
        include('pages/home.php');

    }else{

        $getSayfa = $_GET['page'];
        switch($getSayfa){
            case 'sayfalar': 
                include('pages/sayfalar/sayfa_index.php');
                break;

            case 'urunler': 
                include('pages/urunler/urunler_index.php');
                break;

                case 'form':
                include('pages/iletisim/form_index.php');
                break;
                
                case 'uyeler':
                    include('pages/uyeler.php');
                    break;

                 case 'siparisler':
                    include('pages/siparisler.php');
                    break;

                    case 'siparis':
                        include('pages/siparis.php');
                        break;

                        case 'odemesil':
                            include('pages/odemesil.php');
                            break;


            default:
                include('pages/home.php');
        }

 

    }

    echo '</div>';
    include('footer.php');

?>
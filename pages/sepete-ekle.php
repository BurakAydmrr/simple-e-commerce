<?php
    if(!$_GET['id']){
        header('Location:index.php');
    }



    $urun_id = $_GET['id'];

    $urun_adet = !$_GET['adet']? 1 : $_GET['adet'];

    

    $urun_detay = $db->query("SELECT * FROM urunler WHERE id = $urun_id");

   

    $urun = $urun_detay->fetch_array();

        if($urun) { 
            if(isset($_SESSION['sepet'][$urun['id']])){

                if(!$_GET['duzenle']){
                    $_SESSION['sepet'][$urun['id']]['adet'] += $urun_adet;   
                }else{

                    $_SESSION['sepet'][$urun['id']]['adet'] = $urun_adet;   
                }



             
                
            }else{
                $_SESSION['sepet'][$urun['id']]= [
                    'id' => $urun['id'],
                    'ad' => $urun['baslik'],
                    'fiyat' => $urun['fiyat'],
                    'adet' => $urun_adet, 
                    'resim' => $urun['gorsel']
                ];
            }
            


           

        header('Location:?page=urunler');

        }













?>
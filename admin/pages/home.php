<?php
    $sayfalar = $db->query("SELECT * from sayfalar");
    $adet = $sayfalar->num_rows;
    
    $urnadet = $db->query("SELECT * from urunler");
    $sayi = $urnadet->num_rows;

    $uye = $db->query("SELECT * from uyeler");
    $uyesay = $uye->num_rows;

    $form = $db->query("SELECT * from iletisim");
    $formsay = $form->num_rows;

    $siparisler = $db->query("SELECT * from alisveris");
    $sipsay = $siparisler->num_rows;

    $siparisler = $db->query("SELECT * from odemeler");
    $odemesay = $siparisler->num_rows;

?>


<div class="fs-4 center "> <b> Yönetim Paneli Ana Sayfa</b> </div>

<div class="row mt-5 fw-bold ">

    <div class="col-xl-4 col-md-6">
        <div class="card bg-dark text-white mb-4">
            <div class="card-body"> <img src="https://img.icons8.com/office/50/000000/ingredients-list.png"/>  <span class="fs-6">Sayfa Bilgisi</span>   <hr>
           <?php  echo $adet; ?> Adet Sayfanız Bulunuyor <br> 
            Sayfa Adları : 
           <?php while($sayfa = $sayfalar->fetch_array()){?>
             <span style="color:#0babbd;"><?php echo $sayfa['baslik']; echo ','; ?></span> 
           <?php }  ?>
           
        </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="?page=sayfalar">Sayfalara Git !</a>
            </div>
        </div>
    </div>

    <div class="col-xl-4 col-md-6">
        <div class="card bg-dark text-white mb-4">
            <div class="card-body">  <img src="https://img.icons8.com/external-victoruler-linear-colour-victoruler/50/000000/external-product-logistics-victoruler-linear-colour-victoruler-1.png"/>  <span class="fs-6">Ürün Bilgisi</span>   <hr>
         <?php echo  $sayi; ?> Adet Ürününüz Buluyor. <br>
         <?php $product = $db->query("SELECT * FROM urunler ORDER BY id DESC LIMIT 0,5");
                $set = $product->fetch_array(); // set = son eklenen tarih demek by worlex
         ?>
         Son Ürün Ekleme Tarihiniz : <span style="color:#0babbd;"><?php echo $set['eklenme']; ?></span> 
        </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="?page=urunler">Ürünlere Git !</a>
            </div>
        </div>
    </div>

    <div class="col-xl-4 col-md-6">
        <div class="card bg-dark text-white mb-4">
            <div class="card-body"><img src="https://img.icons8.com/external-flaticons-lineal-color-flat-icons/50/000000/external-members-agile-flaticons-lineal-color-flat-icons.png"/>  <span class="fs-6">Üye Bilgisi</span>   <hr>
        Selay Fide'de Şuanda Kayıtlı <?php echo $uyesay;?> Kişi Bulunmaktdır.
        <?php $member = $db->query("SELECT * FROM uyeler ORDER BY id DESC LIMIT 0,5");
            $membersayi = $member->fetch_array();
        ?>
        Son Kayıt Olan Üyemiz <span style="color:#0babbd;"><?php echo $membersayi['username'];?> </span> 
        </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="?page=uyeler">Üye Bilgisine Git !</a>
            </div>
        </div>
    </div>
            <hr>
    <div class="col-xl-4 col-md-6">
        <div class="card bg-dark text-white mb-4">
            <div class="card-body">  <img src="https://img.icons8.com/fluency/50/000000/contact-card.png"/> <span class="fs-6">İletişim Form Bilgisi</span>   <hr>
    
           Selay Fide  Şuanda <span style="color:#0babbd;"><?php echo $formsay; ?> </span> Adet Cevaplanmamış Soru var. <br>
           <?php
            $formkisi = $db->query("SELECT * from iletisim ORDER BY id DESC LIMIT 0,5");
            $formsayi = $formkisi->fetch_array();
           ?>
           <br>
            Son İletşim Formu Açan Üyemiz <span style="color:#0babbd;"><?php echo $formsayi['ad'] ?></span>  Tarafından  <span style="color:#0babbd;"> <?php echo $formsayi['eklenme'];?></span>  Tarihinde Açılmıştır. 
        </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="?page=form">Formlar Git !</a>
            </div>
        </div>
    </div>
            
    <div class="col-xl-4 col-md-6">
        <div class="card bg-dark text-white mb-4">
            <div class="card-body">  <img src="https://img.icons8.com/external-inipagistudio-mixed-inipagistudio/50/000000/external-order-digital-marketing-strategy-inipagistudio-mixed-inipagistudio.png"/> <span class="fs-6">Siparişler Bilgisi</span>   <hr>
    
            <span style="color:#0babbd;"><?php echo $odemesay?> </span>Kişinin Siparişi Aktif 3 Gün içinde Kargoya Verilicek.
           <?php
            $siparis = $db->query("SELECT * from alisveris ORDER BY id DESC LIMIT 0,5");
            $sipsayı = $siparis->fetch_array();
           ?>
          
           <br><br>
                Şuanda <span style="color:#0babbd;"> <?php echo $sipsay;?></span> Adet Ürün Paketlenmesi Gerek.
        </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="?page=siparisler">Siparişlere Git !</a>
            </div>
        </div>
    </div>
    
    
</div>
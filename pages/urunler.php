
<div style="background: url('./assets/img/fb.jpg') no-repeat center center; background-size: cover; padding-top:120px; padding-bottom:120px">


<div class="p-5 m-5 text-white text-center" >
  <h1>Ürünlerimiz</h1>
</div>

</div>

<?php

$urunlerdb = $db->query("SELECT * FROM urunler WHERE  durum>0 ORDER BY id desc");

?>

<h2 style="text-align: center; color: rgb(5, 110, 66);" class="mt-4">Saksı Çeşitlerimiz </h2>
<div id="urunlerimiz" class="container px-4 px-lg-5 mt-5">
<div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
<?php
while($urun = $urunlerdb->fetch_array()):
?>
<div class="col mb-5">

        <div class="card h-100">
           
       <a href="?page=detay&id=<?php echo $urun['id'];?>">  <img class="card-img-top" src="./assets/uploads/<?php echo $urun['gorsel']?>" alt="<?php echo $urun['baslik']?>" /></a> 
         
            <div class="card-body p-4">
                <div class="text-center">
                   
                    <h5 class="fw-bolder"><?php echo $urun['baslik']?></h5>
              
                    <a  style="text-decoration:none" href="?page=detay&id=<?php echo $urun['id'];?>">  <p> <?php echo $urun['aciklama']?></p></a>
                </div>
            </div>
            
        
            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                
                <div class="text-center"> <a class="btn btn-outline-dark mt-auto"  href="?page=sepete-ekle&id=<?php echo $urun['id'];?>">  <b>Sepete Ekle</b> </a></div>
            </div>
        </div>
    </div>
    <?php endwhile;?>

    
        



    </div>
    </div>
    
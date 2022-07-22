 
<?php
$id = $_GET["id"];

$urunlerdb = $db->query("SELECT * FROM urunler WHERE id=$id");


?>



<section class="py-5">
<?php
while($detay = $urunlerdb->fetch_array()):
?>
    
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="./assets/uploads/<?php echo $detay['gorsel']; ?>"/></div>
                    <div class="col-md-6">
                       
                        <h1 class="display-5 fw-bolder"><?php echo $detay['baslik'];?></h1>
                        <div class="fs-5 mb-5">
                        
                            <span><?php echo $detay['fiyat'];?> TL</span>
                        </div>
                        <p class="lead"><?php echo $detay['icerik']?></p>
                        <div class="d-flex">
                            <form action="index.php" method="GET">   
                            <input type="hidden" name="page" value="sepete-ekle"> 
                            <input type="hidden" name="id" value="<?php echo $detay['id']; ?>"> 
                            <input class="form-control text-center me-3" id="inputQuantity" type="number" value="1" style="max-width: 3rem"  name="adet"/>
                            <button class="btn btn-outline-dark flex-shrink-0" type="submit">
                                <i class="bi-cart-fill me-1"></i>
                               Satın Al
                            </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <footer></footer>
          
            <section class="py-5 bg-light">
              
           

            <div class="container px-4 px-lg-5 mt-5">
                <h2 class="fw-bolder mb-4">Sizin İçin Öneriyoruz...</h2>

                <hr>
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <?php $detay = $db->query("SELECT * FROM urunler ORDER BY RAND() LIMIT 4");
                 while($cek = $detay->fetch_array()){
            ?>
                    <div class="col mb-5">
                        <div class="card h-100">
                           
                             <img class="card-img-top" src="./assets/uploads/<?php echo $cek['gorsel']; ?>" alt="<?php echo $cek['baslik']?>" />
                        
                            <div class="card-body p-4">
                                <div class="text-center">
                                <?php echo $cek['baslik'];?>
                                 <br>
                                <?php echo $cek['fiyat'];?> TL
                                  
                                </div>
                            </div>
                            
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Satın Al</a></div>
                            </div>
                        </div>
                    </div>
                <?php } ?>






            </div>
        </section>
       

        <?php endwhile;?>
    
</body>
 </html>
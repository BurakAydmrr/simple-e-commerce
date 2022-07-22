<?php include('components/slider.php'); ?>



<div class="container py-4">

  <div class="row border-top pt-4">


    <div class="col-4">
      <div class="card ">
        <img class="card-img-top" src="assets/img/hak.png" width="220" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Hakkımızda</h5>
          <p class="card-text">Hakkımızdaki Bilgiler İçin Buttona Tıklayarak Hakkımzıda Bölüme Ulaşabilirsin.</p>
          <a href="" class="btn btn-dark">Hakkımızda</a>
        </div>
      </div> 
    </div>


    <div class="col-4">
      <div class="card ">
        <img class="card-img-top" src="assets/img/un.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Ürünlerimiz</h5>
          <p class="card-text">Ürünlermiz Satın Almak ve İncelemek İsterseniz Buttona Tıklayarak Ürünlerimiz Bölümüne Ulaşabilirsin. <br> </p>
          <a href="?page=urunler" class="btn btn-dark">Ürünlerimiz</a>
        </div>
      </div>
    </div>

    <div class="col-4">
      <div class="card ">
        <img class="card-img-top" src="assets/img/abb.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">İletişim</h5>
          <p class="card-text">İletişim Numaralarımız ve Ardesimize Buttona Tıklayarak Ulaşabilirsin. - Selay fide <br><br> </p>
          <a href="?page=iletisim" class="btn btn-dark">İletişim</a> 
        </div>
      </div> 
    </div>
    <br>


<section class="mt-4">

              
              <?php $detay = $db->query("SELECT * FROM urunler ORDER BY RAND() LIMIT 4");
                  
              ?>
  
              <div class="container">
              <h2 class="fw-bolder mb-4">Ürünlerimiz</h2>

  
                  <hr>
                  <div class="row ">
               <?php      while($cek = $detay->fetch_array()){
                 ?>
                      <div class="col" style="max-height:800px;">
                          <div class="card h-100">
                             
                               <img class="card-img-top" src="./assets/uploads/<?php echo $cek['gorsel']; ?>" alt="<?php echo $cek['baslik']?>" />
                          
                              <div class="card-body p-4">
                                  <div class="text-center">
                                  <?php echo mb_substr(strip_tags($cek['icerik']),0,200,'utf-8');?>...
                                  
                                 
                                 
                                  </div>
                              </div>
                              
                              <div class="card-footer  bg-transparent">
                                  <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="?page=detay&id=<?php echo $cek['id'];?>">Ürüne Git</a></div>
                              </div>
                          </div>
                      </div>
                      <?php } ?>

                    
  
  
              </div>
          </section>



</div>
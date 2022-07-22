<div class="m-0 py-5 bg-secondary color-white text-white text-center">
           
            <h4 class="hakkımızda text-white">  İLETİŞİM </h4>
            <p>
               Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>
              
            </p>
        </div>
        
        <div class="container my-4">
            <div class="row">
                <div class="col-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.15830857912!2d-74.11976403406965!3d40.69766374878395!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20Amerika%20Birle%C5%9Fik%20Devletleri!5e0!3m2!1str!2str!4v1658511616654!5m2!1str!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div>

                <?php
                
                if($_POST){
      
                    $ad = $_POST['ad'];
                    $eposta = $_POST['eposta'];
                    $konubaslik = $_POST['konubaslik'];
                    $mesaj = $_POST['mesaj'];
         
              
                  
                    if(strlen($konubaslik) < 3){
                        echo '<div class="alert alert-danger">Konu Başlığı Çok Kısa</div>';
                    }else{
                        $prepare = $db->prepare('INSERT INTO iletisim (ad, eposta, konubaslik, mesaj) VALUES (?, ?, ?, ?)');
                        $prepare->bind_param("ssss", $ad, $eposta, $konubaslik , $mesaj);
                        $prepare->execute();
                        echo '<div class="alert alert-success">İşlem Başarılı. En kısa Sürede Geri Donüş Sağlacağız. Selay Fideyi Tercih Ettiğiniz İçin Teşşekür Ederiz.</div>';
                    }
                        
                    
              
                    
              
                }
              
                
                ?>
                        
                <div class="col-6">
                    <h2>İletişim Formu</h2>
                    <form action="" method="post">
                    <div class="mb-2">
                        <label for="" class="form-label">Adınız:</label>
                        <input type="text" class="form-control" name="ad">
                    </div>


                    <div class="mb-2">
                        <label for="" class="form-label">E-posta:</label>
                        <input type="text" class="form-control" name="eposta">
                    </div>


                    <div class="mb-2">
                        <label for="" class="form-label">Konu Başlığı:</label>
                        <input type="text" class="form-control" name="konubaslik">
                    </div>


                    <div class="mb-2">
                        <label for="" class="form-label">Mesaj:</label>
                        <textarea name="mesaj" id="" cols="30" rows="10" class="form-control"></textarea>
                    </div>

                    <div class="mb-2">
                        <button class="btn btn-primary">Gönder</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
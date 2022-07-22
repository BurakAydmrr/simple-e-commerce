<div class="row">
    <div class="col-6"><h3>Ürün Oluştur</h3> </div>
    
    <div class="col-6 text-end">
        <a href="<?php echo url('?page=urunler'); ?>" class="btn btn-primary">Ürün Listesi</a>
    </div>
</div>

<hr>


<div class="row">
    <div class="col-8">
        <?php
        if($_POST){
            
            $baslik = $_POST['baslik'];
            $icerik = $_POST['icerik'];
            $aciklama = $_POST['aciklama'];
            $fiyat = $_POST['fiyat'];
            $stok = $_POST['stok'];

            $gorsel =$_FILES['gorsel'];
            $gorselname= time()."-".rand(9999,999999)."-".$gorsel['name'];
            move_uploaded_file($gorsel['tmp_name'],"../assets/uploads/".$gorselname);

         
           
            if(strlen($baslik) < 3){
                echo '<div class="alert alert-danger">Lütfen bir sayfa başlığı girin.</div>';
            }else{
                $prepare = $db->prepare('INSERT INTO urunler (baslik, aciklama, fiyat,stok,gorsel,icerik) VALUES (?, ?, ?, ?, ?, ?)');
                $prepare->bind_param("ssiiss", $baslik, $aciklama, $fiyat,$stok,$gorselname,$icerik);
                $prepare->execute();
                header('Location:index.php?page=urunler');
            }

        }
        
            
        ?>
             
        
        <form action="" method="POST" enctype="multipart/form-data">


            <div class="mb-3">
                <label for="" class="form-label"> <b>Ürün Adı</b> </label>
                <input type="text" class="form-control" name="baslik">
            </div>

            <div class="mb-3">
                <label for="" class="form-label"> <b>Ürün Alt Başlık</b> </label>
                
                <input type="text" class="form-control" name="aciklama">
            </div>


            <div class="mb-3">
                <label for="" class="form-label"> <b>Ürün Detay Sayfa İçerği</b> </label>
                <textarea name="icerik" id="summernote"></textarea>
            </div>
            
            <div class="mb-3">
            <label for="" class="form-label"><b>Fiyat</b></label>
            <input type="text" class="form-control" name="fiyat">
            </div>

            <div class="mb-3">
            <label for="" class="form-label"><b>Stok</b></label>
            <input type="text" class="form-control" name="stok">
            </div>
            <div class="mb-3">
            <label for="" class="form-label"><b>Resim Yükle</b></label>
            <input type="file" class="form-control" name="gorsel">
            </div>

           

        

            <div class="mb-3">
                <button class="btn btn-primary">Kaydet</button>
            </div> <br><br>


        </form>

    </div>
</div>
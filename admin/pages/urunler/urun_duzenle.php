<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ürün Düzenle</title>
</head>
<body>
<div class="row">
    <div class="col-8">
        <?php 
        $urun_id = $_GET["id"];
        $dbSayfa = $db->query("SELECT * FROM urunler WHERE id=$urun_id");
        $urun = $dbSayfa->fetch_array();

        if($_POST){
            
            $baslik = $_POST['baslik'];
            $aciklama = $_POST['aciklama'];
            $icerik = $_POST['icerik'];
            $fiyat = $_POST['fiyat'];
            $stok = $_POST['stok'];
            $gorsel = $_POST['gorsel'];;

            if(strlen($baslik) < 3){
                echo '<div class="alert alert-danger">Lütfen bir sayfa başlığı girin.</div>';
            }else{
                $prepare = $db->prepare('UPDATE urunler SET baslik=?, aciklama=?, icerik=? , fiyat=?,stok=?,gorsel=? WHERE id=?');
                $prepare->bind_param("sssiisi", $baslik, $aciklama,$icerik, $fiyat, $stok, $gorsel, $urun_id);
                $prepare->execute();
                header('Location:?page=urunler&id='.$urun_id);    
            }

        }
        ?>

        <form action="" method="POST">


        <div class="mb-3">
                <label for="" class="form-label"> <b>Ürün Adı</b> </label>
                <input type="text" class="form-control" name="baslik" value="<?php echo $urun['baslik']; ?>">
            </div>

            <div class="mb-3">
                <label for="" class="form-label"> <b>Ürün Alt Başlık</b> </label>
                
                <input type="text" class="form-control" name="aciklama" value="<?php echo $urun['aciklama'];?>">
            </div>


            <div class="mb-3">
                <label for="" class="form-label"> <b>Ürün Detay Sayfa İçerği</b> </label>
                <textarea name="icerik" id="summernote"> <?php echo $urun['icerik']; ?> </textarea>
            </div>
            
            <div class="mb-3">
            <label for="" class="form-label"><b>Fiyat</b></label>
            <input type="text" class="form-control" name="fiyat"  value="<?php echo $urun['fiyat'];?>">
            </div>

            <div class="mb-3">
            <label for="" class="form-label"><b>Stok</b></label>
            <input type="text" class="form-control" name="stok" value="<?php echo $urun['stok'];?>"
    </div>
          
            <div class="mb-3">
            <label for="" class="form-label"><b>Resim Yükle</b></label>
            <input type="file" class="form-control" name="gorsel">
            </div>

           
    

        
            <div class="mb-3">
                <button class="btn btn-primary">Güncelle</button>
            </div> <br><br>


        </form>

    </div>
</div>




</form>
</body>
</html> 

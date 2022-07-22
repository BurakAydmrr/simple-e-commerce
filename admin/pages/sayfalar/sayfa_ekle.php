<div class="row">
    <div class="col-6"><h3>Sayfa Oluştur</h3></div>
    <div class="col-6 text-end">
        <a href="<?php echo url('?page=sayfalar'); ?>" class="btn btn-primary">Sayfa Listesi</a>
    </div>
</div>
<hr>


<div class="row">
    <div class="col-8">
        <?php 
        if($_POST){
            
            $baslik = $_POST['baslik'];
            $durum = $_POST['durum'];
            $icerik = $_POST['icerik'];

           
            if(strlen($baslik) < 3){
                echo '<div class="alert alert-danger">Lütfen bir sayfa başlığı girin.</div>';
            }else{
                $prepare = $db->prepare('INSERT INTO sayfalar (baslik, icerik, durum) VALUES (?, ?, ?)');
                $prepare->bind_param("ssi", $baslik, $icerik, $durum);
                $prepare->execute();
                header('Location:index.php?page=sayfalar');
            }

        }
        ?>

        <form action="" method="POST">


            <div class="mb-3">
                <label for="" class="form-label">Sayfa Başlığı</label>
                <input type="text" class="form-control" name="baslik">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Durumu</label>
                <select class="form-select" id="" name="durum">
                    <option value="1">Yayında</option>
                    <option value="0">Gizli</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="" class="form-label">İçerik</label>
                <textarea name="icerik" id="summernote"></textarea>
            </div>

            <div class="mb-3">
                <button class="btn btn-primary">Kaydet</button>
            </div>


        </form>

    </div>
</div>